<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_reportesporfecha(){
		if(!isset($_POST['desde'])){
			$view = View::factory('reportesporfecha');
			$view->title = Helpers_Const::APPNAME()." - Reportes";
			$view->menuid = 3;
			$view->datos = array(Helpers_Const::DATOMODIF(), Helpers_Const::DATOSERVICIOS(), Helpers_Const::DATOPARTOS(), Helpers_Const::DATODESTETES());
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
					25,		// margin top
 					15,		// margin bottom
 					9,		// margin header
	 				9,		// margin footer
	 				'L'));  // L - landscape, P - portrait
	 		$stylesheet = file_get_contents('assets/css/pdfstyle.css');
			$pdf->get_mpdf()->WriteHTML($stylesheet, 1);
			$pdfheader = file_get_contents('application/views/reports/_pdfheader.php');
			$pdf->get_mpdf()->SetHTMLHeader($pdfheader);
			$pdffooter = file_get_contents('application/views/reports/_pdffooter.php');
			$pdf->get_mpdf()->SetHTMLFooter($pdffooter);
			

			$this->response->headers(array('Content-Type' => 'application/pdf'));
			$pdf->title = Helpers_Const::APPNAME().' - Reportes por Fecha';
			$pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME().' - Reportes por Fecha');
			$pdf->get_mpdf()->SetSubject('Reportes por Fecha');
			$pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME());
			$pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME());
			
			if($_POST['datos'] == 0){
				$pdf->pdftitle = Helpers_Const::DATOMODIF().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::MODIFCOLTITLES();
				$pdf->colNames = Helpers_Const::MODIFCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getModificaciones($desde, $hasta);
			}
			if($_POST['datos'] == 1){
				$pdf->pdftitle = Helpers_Const::DATOSERVICIOS().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::SERVICIOSCOLTITLES();
				$pdf->colNames = Helpers_Const::SERVICIOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getServicios($desde, $hasta);
			}
			if($_POST['datos'] == 2){
				$pdf->pdftitle = Helpers_Const::DATOPARTOS().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::PARTOSCOLTITLES();
				$pdf->colNames = Helpers_Const::PARTOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getPartos($desde, $hasta);
			}
			if($_POST['datos'] == 3){
				$pdf->pdftitle = Helpers_Const::DATODESTETES().' - Desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::DESTETESCOLTITLES();
				$pdf->colNames = Helpers_Const::DESTETESCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getDestetes($desde, $hasta);
			}
			$pdf->inline(Helpers_Const::APPNAME().' - Reporte por fecha.pdf');
		}

	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('reportesporcerda');
			$view->title = Helpers_Const::APPNAME()." - Reportes";
			$view->menuid = 3;
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->datos = array(Helpers_Const::DATOMODIF(), Helpers_Const::DATOSERVICIOS(), Helpers_Const::DATOPARTOS(), Helpers_Const::DATODESTETES(), Helpers_Const::DATOCOMPLETO());
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'reportes', 'action' => 'reportesporcerda',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'reportes', 'action' => 'reportesporcerda',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}

	public function action_reportesporcerda(){
		if(!isset($_POST['number'])){
			$view=View::factory('reportesporcerda');
			$view->title = Helpers_Const::APPNAME()." - Reportes";
			$view->menuid = 3;
			$view->datos = array(Helpers_Const::DATOMODIF(), Helpers_Const::DATOSERVICIOS(), Helpers_Const::DATOPARTOS(), Helpers_Const::DATODESTETES(), Helpers_Const::DATOCOMPLETO());
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
					25,		// margin top
 					15,		// margin bottom
 					9,		// margin header
	 				9,		// margin footer
	 				'L'));  // L - landscape, P - portrait
	 		$stylesheet = file_get_contents('assets/css/pdfstyle.css');
			$pdf->get_mpdf()->WriteHTML($stylesheet, 1);
			$pdfheader = file_get_contents('application/views/reports/_pdfheader.php');
			$pdf->get_mpdf()->SetHTMLHeader($pdfheader);
			$pdffooter = file_get_contents('application/views/reports/_pdffooter.php');
			$pdf->get_mpdf()->SetHTMLFooter($pdffooter);
			
			$this->response->headers(array('Content-Type' => 'application/pdf'));
			$pdf->title = Helpers_Const::APPNAME().' - Reportes por Cerda';
			$pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME().' - Reportes por Cerda');
			$pdf->get_mpdf()->SetSubject('Reportes por Cerda');
			$pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME());
			$pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME());
			
			if($_POST['datos'] == 0){
				$pdf->pdftitle = Helpers_Const::DATOMODIF().' - Cerda: '.$_POST['number'].' - desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::MODIFCOLTITLES();
				$pdf->colNames = Helpers_Const::MODIFCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getModificaciones($desde, $hasta, $_POST['IdCerda']);
			}
			if($_POST['datos'] == 1){
				$pdf->pdftitle = Helpers_Const::DATOSERVICIOS().' - Cerda: '.$_POST['number'].' - desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::CERDASERVICIOSCOLTITLES();
				$pdf->colNames = Helpers_Const::CERDASERVICIOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getServicios($desde, $hasta, $_POST['IdCerda']);
			}
			if($_POST['datos'] == 2){
				$pdf->pdftitle = Helpers_Const::DATOPARTOS().' - Cerda: '.$_POST['number'].' - desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::CERDAPARTOSCOLTITLES();
				$pdf->colNames = Helpers_Const::CERDAPARTOSCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getPartos($desde, $hasta, $_POST['IdCerda']);
			}
			if($_POST['datos'] == 3){
				$pdf->pdftitle = Helpers_Const::DATODESTETES().' - Cerda: '.$_POST['number'].' - desde: '.$_POST['desde']. ' - hasta: '.$_POST['hasta'];
				$pdf->colTitles = Helpers_Const::CERDADESTETESCOLTITLES();
				$pdf->colNames = Helpers_Const::CERDADESTETESCOLNAMES();
				$desde = date('Y-m-d H:i:s', strtotime($_POST['desde']));
				$hasta = date('Y-m-d H:i:s', strtotime($_POST['hasta']));
				$pdf->rows = Helpers_DB::getDestetes($desde, $hasta, $_POST['IdCerda']);
			}
			$pdf->inline(Helpers_Const::APPNAME().' - Reporte cerda-'.$_POST['number'].'.pdf');
		}
	}
}
