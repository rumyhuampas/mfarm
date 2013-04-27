<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMServicios extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view=View::factory('newservicio');
			$view->title = Helpers_Const::APPNAME()." - ABM Servicio";
			$view->menuid = 2;
			$this->response->body($view->render());
		}
		else{
			$servicio = ORM::factory('servicio');
			$servicio->IdCerda = $_POST['IdCerda'];
			$servicio->FechaServicio = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$servicio->Macho = $_POST['male'];
			$servicio->ProbableFechaCelo21 = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::get21daysperiod());
			$servicio->ProbableFechaCelo42 = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::get42daysperiod());
			$servicio->ProbableFechaParto = date('Y-m-d H:i:s', strtotime($_POST['date']) + Helpers_Calendar::getbirthperiod());
			$servicio->Observaciones = $_POST['obs'];
			$servicio->create();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmservicios', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Servicio agregado con exito.')));	
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view=View::factory('newservicio');
			$view->title = Helpers_Const::APPNAME()." - ABM Servicio";
			$view->menuid = 2;
			$cerda = Helpers_DB::getCerda($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->servicios = Helpers_DB::getCerdaServicios($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmservicios', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmservicios', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}
}