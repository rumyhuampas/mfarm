<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMPrenas extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view = View::factory('newprena');
			$view->title = Helpers_Const::APPNAME." - ABM Prena";
			$view->menuid = Helpers_Const::MENUPRENAID;
			$this->response->body($view->render());
		}
		else{
			$prena = ORM::factory('prena');
			$prena->IdCerda = $_POST['IdCerda'];
			$prena->ProbFechaCelo21 = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::get21daysperiod());
			$prena->ProbFechaCelo42 = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::get42daysperiod());
			$prena->ProbFechaParto = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::getbirthperiod());
			$prena->create();
			
			$servicio = ORM::factory('servicio');
			$servicio->IdPrena = $prena->Id;
			$servicio->FechaServicio = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$servicio->Macho = $_POST['male'];
			$servicio->Observaciones = $_POST['obs'];
			$servicio->create();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmprenas', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Prena agregada con exito.')));	
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('newprena');
			$view->title = Helpers_Const::APPNAME." - ABM Prena";
			$view->menuid = Helpers_Const::MENUPRENAID;
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				//$view->servicios = Helpers_Cerda::getServicios($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmprenas', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmprenas', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}
	
	public function action_edit(){
		if(!isset($_POST['number'])){
			$view = View::factory('editservicio');
			$view->title = Helpers_Const::APPNAME." - ABM Servicio";
			$view->menuid = Helpers_Const::MENUPRENAID;
			$view->servicio = Helpers_Servicio::get($this->request->param('id'));
			$this->response->body($view->render());
		}
		else{
			$servicio = ORM::factory('servicio', $_POST['IdServicio']);
			$servicio->FechaServicio = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$servicio->Macho = $_POST['male'];
			$servicio->ProbableFechaCelo21 = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::get21daysperiod());
			$servicio->ProbableFechaCelo42 = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::get42daysperiod());
			$servicio->ProbableFechaParto = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::getbirthperiod());
			$servicio->Observaciones = $_POST['obs'];
			$servicio->update();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmservicios', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Servicio modificado con exito.')));	
		}
	}
}