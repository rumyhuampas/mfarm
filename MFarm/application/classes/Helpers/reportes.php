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
		$report->rows = Helpers_CerdaAudit::getByDates($desde, $hasta, $IdCerda);
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
		$report->rows = Helpers_Servicio::getByDates($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getRepsReport($reportTitle = '', $desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = $reportTitle;
		if($IdCerda == NULL){
			$report->colTitles = Helpers_Const::REPSCOLTITLES();
			$report->colNames = Helpers_Const::REPSCOLNAMES();
		}
		else{
			$report->colTitles = Helpers_Const::CERDAREPSCOLTITLES();
			$report->colNames = Helpers_Const::CERDAREPSCOLNAMES();
		}
		$report->rows = Helpers_Celo::getByDates($desde, $hasta, $IdCerda);
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
		$report->rows = Helpers_Parto::getByDates($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getLactanciaReport($reportTitle = '', $desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = $reportTitle;
		if($IdCerda == NULL){
			$report->colTitles = Helpers_Const::LACTANCIASCOLTITLES();
			$report->colNames = Helpers_Const::LACTANCIASCOLNAMES();
		}
		else{
			$report->colTitles = Helpers_Const::CERDALACTANCIASCOLTITLES();
			$report->colNames = Helpers_Const::CERDALACTANCIASCOLNAMES();
		}
		$report->rows = Helpers_Lactancia::getByDates($desde, $hasta, $IdCerda);
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
		$report->rows = Helpers_Destete::getByDates($desde, $hasta, $IdCerda);
		return $report;
	}
}