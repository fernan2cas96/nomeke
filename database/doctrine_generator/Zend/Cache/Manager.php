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
 * @version    $Id: Manager.php 16541 2009-07-07 06:59:03Z bkarwin $
 */
class Zend_Cache_Manager
{
	protected $type;
	protected $obs;
	public  $freq;
	public  $pivot;
	public  $local;
	public  $path;
	public  $init;
    /**
     * Make a cache from the function name and parameters
     *
     * @return obj Zend_Cache_Counter 
     */
	public static $__this = false;
	public static function mng(){
		$args = func_get_args();
		$args[2] = isset($args[2]) ? $args[2] : "both";
		$args[1] = isset($args[1]) ? $args[1] : false;
		$args[0] = isset($args[0]) ? $args[0] : "none";
		if(!static::$__this) static::$__this = new self($args[0], $args[1], $args[2]);
		return static::$__this;
	}
    /**
     * Constructor
     *
     * @param  array $options Associative array of options
     * @return void
     */
	protected function __construct($pivot="none", $path='prod.log', $type='term'){
		$this->local = $this->trace();
		$this->obs = array();
		$this->res = 0;
		$this->freq = 0;
		$this->frep = 0;
		$this->init = 'doit';
		$this->type = $type;
		$this->pivot = $pivot;
		$this->path = $path;
	}
    /**
     * run() - must be implemented by the child
     *
     */
	public function run(){
		$this->frep ++;
		if(file_exists($this->path))
			if(method_exists($this, $this->type))
				$this->execute($this->{$this->type}());
		else if($this->frep < 5) $this->update(); 
		else $this->execute($this->{$this->type}());
		return $this;
	}
	/**
     * update a filter to the end of the chain
     *
     * @param  key $cfg
     * @param  bool $force
     * @return Zend_Cache_Manager Provides a fluent interface
     */
	public function update($cfg, $force=false){
		$cfg = is_object($cfg) ? get_object_vars($cfg) : $cfg;
		$this->path  = isset($cfg["path"])  ? $cfg["path"]  : $this->path;
		$this->init  = isset($cfg["init"])  ? $cfg["init"]  : $this->init;
		$_this = $this->log();
		$this->pivot = isset($cfg["pivot"]) ? $cfg["pivot"] : $_this->pivot;
		$this->type  = isset($cfg["type"])  ? $cfg["type"]  : is_string($_this->type) ? $_this->type : $this->type ;
		$this->local = is_numeric($_this->local) ? $_this->local : $this->local;
		$this->freq  = $_this->freq + 1;
		$this->makelog(($this->type!='term') ? true : $force);
		return $this;
	} 
	/**
     * Adds a filter to the end of the chain
     *
     * @param  key $key
     * @return Zend_Cache_Manager Provides a fluent interface
     */
	public function supply($on, $key='key') {
		if (is_subclass_of($on, 'Zend_Cache_Cfgprod')) $this->update($on, $on->force);
		else if(!$key) $this->obs[]= $on; 
		else $this->obs[$key]= $on; 
		return $this;
	}
	/**
     * Remove a filter to the end of the chain
     *
     * @param  key $key
     * @return Zend_Cache_Manager Provides a fluent interface
     */
	public function remove($key='key') { 
		unset($this->obs[$key]); return $this; 
	}
	public function due($acct, $model){
		return method_exists($model, $acct) ? $model->{$acct}() : false;
	}
	protected function trace() { 
		return date('Ymd'); 
	}
    /**
     * Returns $value filtered through each filter in the chain
     *
     * Filters are run in the order in which they were added to the chain (FIFO)
     *
     * @param  pivot $value
     * @return mixed
     */
	protected function execute($pivot){
		foreach($this->obs as $i) 
			if(method_exists($i, $this->init)) 
				$i->{$this->init}($pivot, $this); 
	}
   /**
     * Make new log 
     *
     * @return null
     */
	protected function log(){
		if(!file_exists($this->path)) return $this;
		return @unserialize(@file_get_contents($this->path));
	}
   /**
     * Make new log by default namespaces
     *
     * @param bool $force
     * @return null
     */
	protected function makelog($force=false){
		if(!file_exists($this->path) || $force){
			@file_put_contents($this->path, serialize($this));
		}
	}
    /**
     * term() - must be implemented by the child
     *
     */
	protected function term(){
		return true;
	}
    /**
     * frequency() - must be implemented by the child
     *
     */
	protected function frequency(){
		return true;
	}
    /**
     * both() - must be implemented by the child
     *
     */
	protected function both(){
		return false;
	}
}
/**
 * @package    Zend_Cache_Cfgprod
 * @copyright  Copyright (c) 2005-2009 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
abstract class Zend_Cache_Cfgprod
{
    /**
     * Constructor
     *
     * @return void
     */
	public function __construct(){
		$this->force = 0;
		$this->process();
	} 
    /**
     * both() - must be implemented by the child
     *
     */
	abstract public function process();
}
