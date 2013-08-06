<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_VentaPago {
	
	public static function get($idventa){
		return ORM::factory('ventapago')
			->where('IdVenta', '=', $idventa)
			->order_by('Fecha', 'ASC')->find_all();
	}
}