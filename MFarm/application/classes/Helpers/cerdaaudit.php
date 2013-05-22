<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_CerdaAudit {
	
	public static function getByDates($desde, $hasta, $IdCerda = NULL){
		$qry = DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=cerdaaudit.IdCerda) AS Numero'),
			DB::expr('(SELECT Nombre FROM estados WHERE estados.id=cerdaaudit.IdEstado) AS Estado'))
			->from('cerdaaudit')
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
			->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'));
		if($IdCerda != NULL){
			$qry->and_where('IdCerda', '=', $IdCerda);
		}
		$qry->order_by('Fecha', 'ASC');
		return $qry->execute()->as_array();		
	}
	
	public static function IsLast($id = NULL){
		if($id != NULL){
			$audit = ORM::factory('cerdaaudit')->order_by('Fecha', 'DESC')->limit(1)->find();
			if($audit->Id == $id){
				return true;
			}
			else{
				return false;
			}
		}
		return false;
	}
}