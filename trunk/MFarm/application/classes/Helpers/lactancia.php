<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Lactancia {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('lactanciaaudit')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=lactanciaaudit.IdCerda)'), 'Numero'))
				->where('Id', '=', $id)->find();
		}
		else{
			return ORM::factory('lactanciaaudit')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=lactanciaaudit.IdCerda)'), 'Numero'))
				->order_by('Fecha', 'ASC')->find_all();
		}
	}
	
	public static function getLastByCerda($IdCerda){
		return ORM::factory('lactanciaaudit')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=lactanciaaudit.IdCerda)'), 'Numero'))
			->where('IdCerda', '=', $IdCerda)->order_by('Fecha', 'DESC')->limit(1)->find();
	}
}