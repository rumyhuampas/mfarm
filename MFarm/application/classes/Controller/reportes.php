<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_listarporfecha(){
		if(!isset($_POST['desde'])){
			$view=View::factory('reportes');
			$view->title = "MFarm - Reportes";
			$view->menuid = 3;
			$view->datos = array(1 => 'SERVICIOS', 2 => 'PARTOS', 3 => 'DESTETES');
			/*$view->cerdas = Helpers_DB::getCerdas();*/
			$this->response->body($view->render());
		}
		else{
			$pdf = View_MPDF::factory('reports/listado');
			$this->response->headers(array('Content-Type' => 'application/pdf'));
			$pdf->title = "MFarm - Listados";
			
			$this->response->body($pdf);
		}
	}
}
