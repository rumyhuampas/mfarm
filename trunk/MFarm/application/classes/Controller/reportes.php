<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_reportesporfecha(){
		if(!isset($_POST['desde'])){
			$view=View::factory('reportesporfecha');
			$view->title = Helpers_Const::APPNAME()." - Reportes";
			$view->menuid = 3;
			$view->datos = array(Helpers_Const::DATOSERVICIOS(), Helpers_Const::DATOPARTOS(), Helpers_Const::DATODESTETES());
			$this->response->body($view->render());
		}
		else{
			$pdf = View_MPDF::factory('reports/reporte', NULL,
				array('',	// mode - default ''
 					'A4-L',	// format - A4, for example, default ''
 					0,		// font size - default 0
 					'',		// default font family
 					8,		// margin_left
 					8,		// margin right
					8,		// margin top
 					8,		// margin bottom
 					9,		// margin header
	 				9,		// margin footer
	 				'L'));  // L - landscape, P - portrait
	 		$stylesheet = file_get_contents('assets/css/pdfstyle.css');
			$pdf->get_mpdf()->WriteHTML($stylesheet, 1);

			$this->response->headers(array('Content-Type' => 'application/pdf'));
			$pdf->title = Helpers_Const::APPNAME().' - Reportes por Fecha';
			$pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME().' - Reportes por Fecha');
			$pdf->get_mpdf()->SetSubject('Reportes por Fecha');
			$pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME());
			$pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME());
			
			if($_POST['datos'] == 0){
				$pdf->dato = Helpers_Const::DATOSERVICIOS();
				$pdf->colTitles = Helpers_Const::SERVICIOSCOLTITLES();
				$pdf->colNames = Helpers_Const::SERVICIOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getServicios($desde, $hasta);
			}
			if($_POST['datos'] == 1){
				$pdf->dato = Helpers_Const::DATOPARTOS();
				$pdf->colTitles = Helpers_Const::PARTOSCOLTITLES();
				$pdf->colNames = Helpers_Const::PARTOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getPartos($desde, $hasta);
			}
			if($_POST['datos'] == 2){
				$pdf->dato = Helpers_Const::DATODESTETES();
				$pdf->colTitles = Helpers_Const::DESTETESCOLTITLES();
				$pdf->colNames = Helpers_Const::DESTETESCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getDestetes($desde, $hasta);
			}
			$pdf->inline(Helpers_Const::APPNAME().' - Reporte por fecha.pdf');
		}

	}

	public function action_reportesporcerda(){
		if(!isset($_POST['desde'])){
			$view=View::factory('reportesporcerda');
			$view->title = Helpers_Const::APPNAME()." - Reportes";
			$view->menuid = 3;
			$view->datos = array(Helpers_Const::DATOSERVICIOS(), Helpers_Const::DATOPARTOS(), Helpers_Const::DATODESTETES());
			$this->response->body($view->render());
		}
		else{
			$pdf = View_MPDF::factory('reports/reporte', NULL,
				array('',	// mode - default ''
 					'A4-L',	// format - A4, for example, default ''
 					0,		// font size - default 0
 					'',		// default font family
 					8,		// margin_left
 					8,		// margin right
					8,		// margin top
 					8,		// margin bottom
 					9,		// margin header
	 				9,		// margin footer
	 				'L'));  // L - landscape, P - portrait
			$this->response->headers(array('Content-Type' => 'application/pdf'));
			$pdf->title = Helpers_Const::APPNAME().' - Reportes por Fecha';
			$pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME().' - Reportes por Fecha');
			$pdf->get_mpdf()->SetSubject('Reportes por Fecha');
			$pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME());
			$pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME());
			
			if($_POST['datos'] == 0){
				$pdf->dato = Helpers_Const::DATOSERVICIOS();
				$pdf->colTitles = Helpers_Const::SERVICIOSCOLTITLES();
				$pdf->colNames = Helpers_Const::SERVICIOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getServicios($desde, $hasta);
			}
			if($_POST['datos'] == 1){
				$pdf->dato = Helpers_Const::DATOPARTOS();
				$pdf->colTitles = Helpers_Const::PARTOSCOLTITLES();
				$pdf->colNames = Helpers_Const::PARTOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getPartos($desde, $hasta);
			}
			if($_POST['datos'] == 2){
				$pdf->dato = Helpers_Const::DATODESTETES();
				$pdf->colTitles = Helpers_Const::DESTETESCOLTITLES();
				$pdf->colNames = Helpers_Const::DESTETESCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getDestetes($desde, $hasta);
			}
			$pdf->inline(Helpers_Const::APPNAME().' - Reporte por fecha.pdf');
		}
	}
}
