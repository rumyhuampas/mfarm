<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Cliente {
	
	public static function exists($cuil){
		$cliente = ORM::factory('cliente')->where('CUIL', '=', $cuil)->find();
		return $cliente->loaded();
	}
	
	public static function get($cuildni = NULL){
		if($cuildni != NULL){
			return ORM::factory('cliente')
				->where('CUIL', '=', $cuildni)
				->or_where('DNI', '=', $cuildni)->find();
		}
		else{
			return ORM::factory('cliente')
				->order_by('Nombre', 'ASC')->find_all();
		}
	}
	
	public static function getByName($name = NULL){
		if($name != NULL){
			return ORM::factory('cliente')
				->where('Nombre', ' LIKE ', '%'.$name.'%')
				->order_by('Nombre', 'ASC')->find_all();
		}
		else{
			return ORM::factory('cliente')
				->order_by('Nombre', 'ASC')->find_all();
		}
	}
}