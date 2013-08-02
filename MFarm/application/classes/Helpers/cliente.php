<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Cliente {
	
	public static function exists($dni){
		$cliente = ORM::factory('cliente')->where('DNI', '=', $dni)->find();
		return $cliente->loaded();
	}
	
	public static function get($dni = NULL){
		if($dni != NULL){
			return ORM::factory('cliente')
				->where('DNI', '=', $dni)->find();
		}
		else{
			return ORM::factory('cliente')
				->order_by('Nombre', 'ASC')->find_all();
		}
	}
}