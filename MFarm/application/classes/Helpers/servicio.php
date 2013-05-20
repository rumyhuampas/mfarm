<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Servicio {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('servicio')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
				->where('Id', '=', $id)
				->find();
		}
		else{
			return ORM::factory('servicio')->order_by('FechaServicio', 'ASC')->find_all();
		}
	}
	
	public static function getLast($IdCerda, $desde = NULL){
		return ORM::factory('servicio')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
			->where('IdCerda', '=', $IdCerda)->and_where('FechaServicio', '>=', $desde)
			->order_by('FechaServicio', 'DESC')->limit(1)->find();
	}
}