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
	
	public static function getByParto($idParto = NULL){
		if($idParto != NULL){
			return ORM::factory('lactanciaaudit')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=lactanciaaudit.IdCerda)'), 'Numero'))
				->where('IdParto', '=', $idParto)
				->order_by('Fecha', 'ASC')->find_all();
		}
	}
	
	public static function getByDates($desde, $hasta, $IdCerda = NULL){
		$qry = DB::select(DB::expr('partos.Fecha AS FechaParto'), 'cerdas.Numero', 'lactanciaaudit.Fecha', 'lactanciaaudit.Adoptados', 'lactanciaaudit.Muertos', 'lactanciaaudit.Total', 'lactanciaaudit.Observaciones')
			->from('lactanciaaudit')
			->join('partos')->on('partos.Id', '=', 'lactanciaaudit.IdParto')
			->join('cerdas')->on('cerdas.Id', '=', 'lactanciaaudit.IdCerda')
			->where(DB::expr('DATE(lactanciaaudit.Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
			->and_where(DB::expr('DATE(lactanciaaudit.Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'));
		if($IdCerda != NULL){
			$qry->and_where('lactanciaaudit.IdCerda', '=', $IdCerda);
		}
		$qry->order_by('lactanciaaudit.Fecha', 'ASC');
		return $qry->execute()->as_array();
	}
	
	public static function getLastByCerda($IdCerda){
		return ORM::factory('lactanciaaudit')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=lactanciaaudit.IdCerda)'), 'Numero'))
			->where('IdCerda', '=', $IdCerda)->order_by('Fecha', 'DESC')->limit(1)->find();
	}
}