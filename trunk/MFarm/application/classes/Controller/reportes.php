<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_servicios(){
		//$this->auto_render = FALSE;
		$this->request->headers['Content-Type'] = 'application/pdf';
		$this->response->headers(array(
			'Content-Type' => 'application/pdf',
			'Cache-Control' => 'public, must-revalidate, max-age=0',
			'Pragma' => 'public',
			'Expires' => 'Sat, 26 Jul 1997 05:00:00 GMT',
			'Last-Modified' => gmdate('D, d M Y H:i:s').' GMT',
			'Content-Transfer-Encoding' => 'binary',
			'Content-disposition', 'inline; filename="test.pdf"'
			)
		);
		$pdf = new Helpers_Pdf();
		$this->response->send_headers();
		//echo $pdf;
		//$this->request->send_headers();
	}
}
