<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Reportes {
	public static function getModifReport($reportTitle = '', $desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = $reportTitle;
		if($IdCerda == NULL){
			$report->colTitles = Helpers_Const::MODIFCOLTITLES();
			$report->colNames = Helpers_Const::MODIFCOLNAMES();
		}
		else{
			$report->colTitles = Helpers_Const::CERDAMODIFCOLTITLES();
			$report->colNames = Helpers_Const::CERDAMODIFCOLNAMES();
		}
		$report->rows = Helpers_Reportes::getModificaciones($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getServReport($reportTitle = '', $desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = $reportTitle;
		if($IdCerda == NULL){
			$report->colTitles = Helpers_Const::SERVICIOSCOLTITLES();
			$report->colNames = Helpers_Const::SERVICIOSCOLNAMES();
		}
		else{
			$report->colTitles = Helpers_Const::CERDASERVICIOSCOLTITLES();
			$report->colNames = Helpers_Const::CERDASERVICIOSCOLNAMES();
		}
		$report->rows = Helpers_Reportes::getServicios($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getPartoReport($reportTitle = '', $desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = $reportTitle;
		if($IdCerda == NULL){
			$report->colTitles = Helpers_Const::PARTOSCOLTITLES();
			$report->colNames = Helpers_Const::PARTOSCOLNAMES();
		}
		else{
			$report->colTitles = Helpers_Const::CERDAPARTOSCOLTITLES();
			$report->colNames = Helpers_Const::CERDAPARTOSCOLNAMES();
		}
		$report->rows = Helpers_Reportes::getPartos($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getDesteteReport($reportTitle = '', $desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = $reportTitle;
		if($IdCerda == NULL){
			$report->colTitles = Helpers_Const::DESTETESCOLTITLES();
			$report->colNames = Helpers_Const::DESTETESCOLNAMES();
		}
		else{
			$report->colTitles = Helpers_Const::CERDADESTETESCOLTITLES();
			$report->colNames = Helpers_Const::CERDADESTETESCOLNAMES();
		}
		$report->rows = Helpers_Reportes::getDestetes($desde, $hasta, $IdCerda);
		return $report;
	}
	
	private static function getModificaciones($desde, $hasta, $IdCerda = NULL){
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
	
	private static function getServicios($desde, $hasta, $IdCerda = NULL){
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
	
	private static function getPartos($desde, $hasta, $IdCerda = NULL){
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
	
	private static function getDestetes($desde, $hasta, $IdCerda = NULL){
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