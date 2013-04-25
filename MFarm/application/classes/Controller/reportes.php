<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_servicios(){
		$pdf = View_MPDF::factory('reports/servicios');
		$this->response->headers(array(
			'Content-Type' => 'application/pdf'));
		$this->response->body($pdf);
	}
}
