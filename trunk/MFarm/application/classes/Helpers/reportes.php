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
		$report->rows = Helpers_DB::getModificaciones($desde, $hasta, $IdCerda);
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
		$report->rows = Helpers_DB::getServicios($desde, $hasta, $IdCerda);
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
		$report->rows = Helpers_DB::getPartos($desde, $hasta, $IdCerda);
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
		$report->rows = Helpers_DB::getDestetes($desde, $hasta, $IdCerda);
		return $report;
	}
}