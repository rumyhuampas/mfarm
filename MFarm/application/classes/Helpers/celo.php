<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Celo {
	
	public static function get($id = NULL){
		if($id != NULL){
			return DB::select('cerdacelos.Id', 'cerdas.Numero', 'servicios.FechaServicio', 'servicios.ProbableFechaCelo21', 'servicios.ProbableFechaCelo42', 'cerdacelos.Fecha', 'cerdacelos.Observaciones')
				->from('cerdacelos')
				->join('servicios')->on('servicios.Id', '=', 'cerdacelos.IdServicio')
				->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')
				->where('cerdacelos.Id', '=', $id)
				->as_object()->execute();
		}
		else{
			return DB::select('cerdacelos.Id', 'cerdas.Numero', 'servicios.FechaServicio', 'servicios.ProbableFechaCelo21', 'servicios.ProbableFechaCelo42', 'cerdacelos.Fecha', 'cerdacelos.Observaciones')
				->from('cerdacelos')
				->join('servicios')->on('servicios.Id', '=', 'cerdacelos.IdServicio')
				->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')
				->order_by('cerdacelos.Fecha', 'ASC')
				->as_object()->execute();
		}
	}
}