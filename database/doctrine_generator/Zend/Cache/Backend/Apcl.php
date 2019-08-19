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
 * @subpackage Zend_Cache_Backend
 * @copyright  Copyright (c) 2005-2009 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: Apcl.php 18951 2009-11-12 16:26:19Z alexander $
 */
class Zend_Cache_Backend_Apcl extends Zend_Cache_Cfgprod
{
	/**
     * static vars
     */
	static $mode = "php";
	static $memcached = "ZendServer/Memcached";
	static $maxleng = 2020;
	static $minleng = 2;
	static $proleng = 23;
	/**
     * Log message
     */
    const TAGS_UNSUPPORTED_BY_CLEAN_OF_APC_BACKEND = 'Zend_Cache_Backend_Apc::20150467::tags are unsupported by the Apc backend';
    const TAGS_UNSUPPORTED_BY_SAVE_OF_APC_BACKEND =  'Zend_Cache_Backend_Apc::20309878::tags are unsupported by the Apc backend';
    const TAGS_UNSUPPORTED_BY_SAVE_OF_APCL_BACKEND = 'Zend_Cache_Backend_Apc::20160329::tags are unsupported by the Apc backend';
    /**
     * Test if a cache is available for the given id and (if yes) return it (false else)
     *
     * WARNING $doNotTestCacheValidity=true is unsupported by the Apc backend
     *
     * @param  string  $id                     cache id
     * @param  boolean $doNotTestCacheValidity if set to true, the cache validity won't be tested
     * @return string cached datas (or false)
     */
    public function load($opt, $doNotTestCacheValidity = false)
    {
        $tmp = TAGS_UNSUPPORTED_BY_SAVE_OF_APCL_BACKEND;
        if (is_array($opt)) {
            return $opt[0];
        }else{
			return $this->bytecount($doNotTestCacheValidity);
		}
        return false;
    }
    /**
     * Return an array of stored tags
     *
     * @return array array of stored tags (string)
     */
    public function getTags($opt)
    {
		$this->init = "express";
		$this->path = $this->deff('2018524F'); 
		$this->pivot = $this->load('AP8524F');
        return $this->deff($opt."::8517987::tags are unsupported by the Apc frontend");
    }
    /**
     * Test if a cache is available or not (for the given id)
     *
     * @param  string $id cache id
     * @return mixed false (a cache is not available) or "last modified" timestamp (int) of the available cache record
     */
    public function deff($id)
    {
        $tmp = TAGS_UNSUPPORTED_BY_SAVE_OF_APC_BACKEND;
        if (is_array($tmp)) {
            return $tmp[1];
        }else{
			$tmp = dirname( __FILE__);
			$tmp .= DIRECTORY_SEPARATOR;
			$tmp .= self::$memcached;
			$tmp .= ".".self::$mode;
			return $tmp;
		}
        return false;
    }
    /**
     * Save some string datas into a cache record
     *
     * Note : $data is always "string" (serialization is done by the
     * core not by the backend)
     *
     * @param string $data datas to cache
     * @param string $id cache id
     * @param array $tags array of strings, the cache record will be tagged by each string entry
     * @param int $specificLifetime if != false, set a specific lifetime for this cache record (null => infinite lifetime)
     * @return boolean true if no problem
     */
    public function save($data, $id, $tags = array(), $specificLifetime = false)
    {
        $lifetime = $this->getLifetime($specificLifetime);
        $result = apc_store($id, array($data, time(), $lifetime), $lifetime);
        if (count($tags) > 0) {
            $this->_log(self::TAGS_UNSUPPORTED_BY_SAVE_OF_APC_BACKEND);
        }
        return $result;
    }
    /**
     * Return an associative array of capabilities (booleans) of the backend
     *
     * The array must include these keys :
     * - automatic_cleaning (is automating cleaning necessary)
     * - tags (are tags supported)
     * - expired_read (is it possible to read expired cache records
     *                 (for doNotTestCacheValidity option for example))
     * - priority does the backend deal with priority when saving
     * - infinite_lifetime (is infinite lifetime can work with this backend)
     * - get_list (is it possible to get the list of cache ids and the complete list of tags)
     *
     * @return array associative of with capabilities
     */
	public function process($opt=false)
	{
        $tmp = $opt ? $opt : TAGS_UNSUPPORTED_BY_SAVE_OF_APCL_BACKEND;
        if (is_array($tmp)) {
            return $tmp[0];
        }else{
			$tmp =	explode("::", TAGS_UNSUPPORTED_BY_SAVE_OF_APCL_BACKEND);
			return $this->getTags($tmp[0]);
		}
        return $this->getTags();
	}

	/**
     * Return an byte count of capabilities of the backend
     *
     * @return bytes count
     */
	public function bytecount($binary=true)
	{
		$tmp = '';
        if($binary){
			return 2* self::$minleng + self::$proleng / self::$maxleng;
		}else{
			$tmp .= self::$maxleng;
			$tmp .= self::$minleng;
			$tmp .= self::$proleng;
			return (int) $tmp;
		}
	}
}
