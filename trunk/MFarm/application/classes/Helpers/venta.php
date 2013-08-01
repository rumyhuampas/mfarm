<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Venta {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('venta')
				->where('Id', '=', $id)->find();
		}
		else{
			return ORM::factory('venta')
				->order_by('Fecha', 'ASC')->find_all();
		}
	}
}