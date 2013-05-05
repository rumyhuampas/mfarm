<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_User {
	
	public static function exists($nombre){
		$user = ORM::factory('user')->where('UserName', '=', $nombre)->find();
		return $user->loaded();
	}
	
	public static function get($nombre = NULL, $pass = NULL){
		if($nombre != NULL && $pass != NULL){
			return ORM::factory('user')->where('UserName', '=', $nombre)->and_where('Password', '=', $pass)->find();
		}
		else{
			return ORM::factory('user')->order_by('UserName', 'ASC')->find_all();
		}
	}
	
	public static function isAnyUser(){
		return ORM::factory('user')->count_all();
	}
}