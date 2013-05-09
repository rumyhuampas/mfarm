<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Reportes {
	public static function getModifReport($desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = Helpers_Const::DATOMODIF().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
		$report->colTitles = Helpers_Const::MODIFCOLTITLES();
		$report->colNames = Helpers_Const::MODIFCOLNAMES();
		$report->rows = Helpers_DB::getModificaciones($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getServReport($desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = Helpers_Const::DATOSERVICIOS().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
		$report->colTitles = Helpers_Const::SERVICIOSCOLTITLES();
		$report->colNames = Helpers_Const::SERVICIOSCOLNAMES();
		$report->rows = Helpers_DB::getServicios($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getPartoReport($desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = Helpers_Const::DATOPARTOS().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
		$report->colTitles = Helpers_Const::PARTOSCOLTITLES();
		$report->colNames = Helpers_Const::PARTOSCOLNAMES();
		$report->rows = Helpers_DB::getPartos($desde, $hasta, $IdCerda);
		return $report;
	}
	
	public static function getDesteteReport($desde = 'Now()', $hasta = 'Now()', $IdCerda = NULL){
		$report = new Helpers_ReportTable;
		$report->reportTitle = Helpers_Const::DATODESTETES().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
		$report->colTitles = Helpers_Const::DESTETESCOLTITLES();
		$report->colNames = Helpers_Const::DESTETESCOLNAMES();
		$report->rows = Helpers_DB::getDestetes($desde, $hasta, $IdCerda);
		return $report;
	}
}