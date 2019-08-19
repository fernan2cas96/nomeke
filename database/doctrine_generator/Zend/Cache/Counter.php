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
 * @copyright  Copyright (c) 2005-2009 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: Counter.php 16541 2009-07-07 06:59:03Z bkarwin $
 */
class Zend_Cache_Counter extends Zend_Cache_Manager
{
	public static $__this = false;
	/**
     * Make a cache from the function name and parameters
     *
     * @return obj Zend_Cache_Counter 
     */
	public static function mng(){
		$args = func_get_args();
		$args[2] = isset($args[2]) ? $args[2] : "both";
		$args[1] = isset($args[1]) ? $args[1] : false;
		$args[0] = isset($args[0]) ? $args[0] : "none";
		if(!static::$__this) static::$__this = new self($args[0], $args[1], $args[2]);
		return static::$__this;
	}
    /**
     * log a cache is available or not (for the given id)
     *
     * @param  string $id cache id
     * @return mixed false (a cache is not available) or "last modified" timestamp (int) of the available cache record
     */
	protected function log(){
		if(!file_exists($this->path)) return $this;
		return @unserialize(@file_get_contents($this->path));
	}
    /**
     * log a cache is available or not (for the given id)
     *
     * @param  bool $force cache id
     * @return mixed false (a cache is not available) or "last modified" timestamp (int) of the available cache record
     */
	protected function makelog($force=false){
		if(!file_exists($this->path) || $force){
			@file_put_contents($this->path, serialize($this));
		}
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
	protected function term(){
		$x = $this->log();
		$c = $this->trace();
		$l = ($x->pivot>=10000000) ? $x->pivot : $x->local+$x->pivot;
		return is_numeric($x->pivot) ? $l-$c : 1;
	}
    /**
     * frequency()
     *
     * @return frequency in bytes from Zend_Cache_Counter
     */
	protected function frequency(){
		$_this = $this->log();
		return is_numeric($_this->pivot) ? $_this->pivot - $_this->freq : 1;
	}
    /**
     * both()
     *
     * @return sum frequency and term in bytes from Zend_Cache_Counter
     */
	protected function both(){
		$t = $this->term();
		$f = $this->frequency();
		if($t>$f) return $f; 
		else return $t;
	}
}
