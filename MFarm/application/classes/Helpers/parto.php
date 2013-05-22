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
	
	public static function getByDates($desde, $hasta, $IdCerda = NULL){
		$qry = DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=partos.IdCerda) AS Numero'))
			->from('partos')
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
			->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'));
		if($IdCerda != NULL){
			$qry->and_where('IdCerda', '=', $IdCerda);
		}
		$qry->order_by('Fecha', 'ASC');
		return $qry->execute()->as_array();
	}
	
	public static function getLast($IdCerda){
		return ORM::factory('parto')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=parto.IdCerda)'), 'Numero'))
			->where('IdCerda', '=', $IdCerda)->order_by('Fecha', 'DESC')->limit(1)->find();
	}
}