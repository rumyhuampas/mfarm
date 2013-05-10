<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Estado {

	public static function exists($nombre){
		$estado = ORM::factory('estado')->where('Nombre', '=', $nombre)->find();
		return $estado->loaded();
	}
	
	public static function get($nombre = NULL){
		if($nombre != NULL){
			return ORM::factory('estado')->where('Nombre', '=', $nombre)->find();
		}
		else{
			return ORM::factory('estado')->order_by('Nombre', 'ASC')->find_all();
		}
	}
	
	public static function getEndStatus(){
		$muerta = Helpers_Const::ESTMUERTA;
		return ORM::factory('estado')->where('Nombre', '=', $muerta)->find();
	}
}