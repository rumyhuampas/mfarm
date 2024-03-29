<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Reportes {
	public static function create($source, $format = '', $orientation = 'P'){
		return View_MPDF::factory($source, NULL,
			array('',	// mode - default ''
				$format,	// format - A4, for example, default ''
				0,		// font size - default 0
				'',		// default font family
				8,		// margin_left
				8,		// margin right
				25,		// margin top
				15,		// margin bottom
				9,		// margin header
 				9,		// margin footer
 				$orientation));  // L - landscape, P - portrait
	}
	
	public static function show($pdf){
		$pdf->inline($pdf->filename);
	}
	
	public static function createFactura($id){
		$pdf = Helpers_Reportes::create('reports/factura', 'A4');
		$stylesheet = file_get_contents('assets/css/pdfstyle.css');
		$pdf->get_mpdf()->WriteHTML($stylesheet, 1);
			
		$pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME.' - Factura');
		$pdf->get_mpdf()->SetSubject('Factura');
		$pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME);
		$pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME);
		
		$pdf->title = Helpers_Const::APPNAME.' - Factura';
		$pdf->filename = Helpers_Const::APPNAME.' - factura.pdf';
		
		$pdf->_id = $id;
		
		return $pdf;
	}
    
    public static function createEstadoVenta($id){
        $pdf = Helpers_Reportes::create('reports/estadoventa', 'A4');
        $stylesheet = file_get_contents('assets/css/pdfstyle.css');
        $pdf->get_mpdf()->WriteHTML($stylesheet, 1);
            
        $pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME.' - Estado Venta');
        $pdf->get_mpdf()->SetSubject('Estado Venta');
        $pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME);
        $pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME);
        
        $pdf->title = Helpers_Const::APPNAME.' - Estado Venta';
        $pdf->filename = Helpers_Const::APPNAME.' - estadoventa.pdf';
        
        $pdf->_id = $id;
        
        return $pdf;
    }
	
	public static function createRecibo($id){
		$pdf = Helpers_Reportes::create('reports/recibo', 'A4-L');
		$stylesheet = file_get_contents('assets/css/pdfstyle.css');
		$pdf->get_mpdf()->WriteHTML($stylesheet, 1);
			
		$pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME.' - Recibo');
		$pdf->get_mpdf()->SetSubject('Recibo');
		$pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME);
		$pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME);
		
		$pdf->title = Helpers_Const::APPNAME.' - Recibo';
		$pdf->filename = Helpers_Const::APPNAME.' - recibo.pdf';
		
		$pdf->_id = $id;
		
		return $pdf;
	}
    
    public static function createVentaTotals($monthamount){
        $pdf = Helpers_Reportes::create('reports/ventatotals', 'A4-L');
        $stylesheet = file_get_contents('assets/css/pdfstyle.css');
        $pdf->get_mpdf()->WriteHTML($stylesheet, 1);
            
        $pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME.' - Totales de Venta');
        $pdf->get_mpdf()->SetSubject('Totales de Venta');
        $pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME);
        $pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME);
        
        $pdf->title = Helpers_Const::APPNAME.' - Totales de Venta';
        $pdf->filename = Helpers_Const::APPNAME.' - totalesventa.pdf';
        
        $res = array();
        $res = array_merge($res, Helpers_Venta::getTotals(Helpers_Const::FVCURRMONTH));
        $res = array_merge($res, Helpers_Venta::getTotals(Helpers_Const::FVLASTMONTHS, 12));
        $res = array_merge($res, Helpers_Venta::getTotals(Helpers_Const::FVCURRYEAR));
        $res = array_merge($res, Helpers_Venta::getTotals(Helpers_Const::FVYEAR, 2013));
        $pdf->_totals = $res;
        $res = array();
        $res = array_merge($res, Helpers_Venta::getByPreviousMonths($monthamount));
        $pdf->_sales = $res;
        $pdf->_months = $monthamount;
        
        return $pdf;
    }
	
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