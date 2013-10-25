<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Prena {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('prena', $id)
				->find();
		}
	}
	
	public static function cerdaHasActivePrena($IdCerda){
		$qry = ORM::factory('prena')
			->where('IdCerda', '=', $IdCerda)
			->and_where('Estado', '=', Helpers_Const::ESTENCURSO);
		return $qry->count_all() > 0;
	}
	
	public static function getActivePrena($IdCerda){
		$qry = ORM::factory('prena')
			->where('IdCerda', '=', $IdCerda)
			->and_where('Estado', '=', Helpers_Const::ESTENCURSO);
		return $qry->find();
	}
	
	public static function gerPrenaServicios($IdPrena){
		$qry = ORM::factory('servicio')
			->where('IdPrena', '=', $IdPrena)
			->order_by('FechaServicio', 'DESC');
		return $qry->find_all();
	}
}