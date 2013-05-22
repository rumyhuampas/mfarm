<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Destete {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('destete')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=destete.IdCerda)'), 'Numero'))
				->where('Id', '=', $id)->find();
		}
		else{
			return ORM::factory('destete')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=destete.IdCerda)'), 'Numero'))
				->order_by('Fecha', 'ASC')->find_all();
		}
	}
	
	public static function getByDates($desde, $hasta, $IdCerda = NULL){
		$qry = DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=destetes.IdCerda) AS Numero'), 
			DB::expr('ROUND(pesototal/lechones, 2) as PesoProm'))
			->from('destetes')
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
			->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'));
		if($IdCerda != NULL){
			$qry->and_where('IdCerda', '=', $IdCerda);
		}
		$qry->order_by('Fecha', 'ASC');
		return $qry->execute()->as_array();
	}
}