<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Prena {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('prena', $id)
				->find();
		}
	}
	
	public static function getByCerda($IdCerda = NULL){
		$qry = DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS Numero'))
			->from('servicios')
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE("'.$desde.'")'))
			->and_where(DB::expr('DATE(FechaServicio)'), '<=', DB::expr('DATE("'.$hasta.'")'));
		if($IdCerda != NULL){
			$qry->and_where('IdCerda', '=', $IdCerda);
		}
		$qry->order_by('FechaServicio', 'ASC');
		return $qry->execute()->as_array();
	}
}