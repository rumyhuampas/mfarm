<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Config {
	
	public static function exists($name){
		$config = ORM::factory('config')->where('Name', '=', $name)->find();
		return $config->loaded();
	}
	
	public static function get($name = NULL){
		if($name != NULL){
			return ORM::factory('config')
				->where('Name', '=', $name)->find();
		}
		else{
			return ORM::factory('config')
				->order_by('Name', 'ASC')->find_all();
		}
	}
}