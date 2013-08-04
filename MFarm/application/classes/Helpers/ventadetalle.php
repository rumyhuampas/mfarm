<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_VentaDetalle {
	
	public static function get($idventa){
		return ORM::factory('ventadetalle')
			->where('IdVenta', '=', $idventa)
			->order_by('Id', 'ASC')->find_all();
	}
}