<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Combos {
	
	public static function getEstados(){
		return DB::select('id', 'nombre')->from('estados')->order_by('Nombre', 'ASC')->execute()->as_array('id', 'nombre');
	}
}