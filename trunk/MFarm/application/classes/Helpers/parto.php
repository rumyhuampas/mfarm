<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Parto {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('parto')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=parto.IdCerda)'), 'Numero'))
				->where('Id', '=', $id)->find();
		}
		else{
			return ORM::factory('parto')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=parto.IdCerda)'), 'Numero'))
				->order_by('Fecha', 'ASC')->find_all();
		}
	}
	
	public static function getLast($IdCerda){
		return ORM::factory('parto')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=parto.IdCerda)'), 'Numero'))
			->where('IdCerda', '=', $IdCerda)->order_by('Fecha', 'DESC')->limit(1)->find();
	}
}