<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Combos {
	
	public static function getEstados(){
		return DB::select('id', 'nombre')->from('estados')->order_by('Nombre', 'ASC')->execute()->as_array('id', 'nombre');
	}
	
	public static function getTiposDeReportes(){
		return array(Helpers_Const::DATOMODIF, Helpers_Const::DATOSERVICIOS, Helpers_Const::DATOREPS, Helpers_Const::DATOPARTOS, Helpers_Const::DATOLACTANCIAS, Helpers_Const::DATODESTETES, Helpers_Const::DATOCOMPLETO);
	}
	
	public static function getTiposDePagos(){
		return array(Helpers_Const::TPEFECTIVO, Helpers_Const::TPCHEQUE, Helpers_Const::TPDEPOSITO);
	}
}