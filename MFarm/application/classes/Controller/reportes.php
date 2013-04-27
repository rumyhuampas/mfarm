<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_listarporfecha(){
		if(!isset($_POST['desde'])){
			$view=View::factory('reportes');
			$view->title = "MFarm - Reportes";
			$view->menuid = 3;
			$view->datos = array(Helpers_Const::DATOSERVICIOS(), Helpers_Const::DATOPARTOS(), Helpers_Const::DATODESTETES());
			$this->response->body($view->render());
		}
		else{
			$pdf = View_MPDF::factory('reports/listado');
			$this->response->headers(array('Content-Type' => 'application/pdf'));
			$pdf->title = "MFarm - Listados";
			
			if($_POST['datos'] == 0){
				$pdf->dato = Helpers_Const::DATOSERVICIOS();
				$pdf->colTitles = Helpers_Const::SERVICIOSCOLTITLES();
				$pdf->colNames = Helpers_Const::SERVICIOSCOLNAMES();
				$pdf->rows = Helpers_DB::getServicios($_POST['desde'], $_POST['hasta']);
			}
			$this->response->body($pdf);
		}
	}
}
