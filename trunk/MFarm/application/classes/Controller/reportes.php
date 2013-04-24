<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_servicios(){
		$this->auto_render = FALSE;
		$html = 'Hello world!';
		$pdf = new Helpers_Pdf();
		/*$pdf->content($html);
		$pdf->save('test');	*/
	}
	
}
