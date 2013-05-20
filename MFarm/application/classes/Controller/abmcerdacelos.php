<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMCerdaCelos extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view=View::factory('newcelo');
			$view->title = Helpers_Const::APPNAME." - ABM Celos";
			$view->menuid = Helpers_Const::MENUCERDASID;
			$this->response->body($view->render());
		}
		else{
			$rep = ORM::factory('cerdacelo');
			$rep->IdServicio = $_POST['IdServicio'];
			$rep->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$rep->Observaciones = $_POST['obs'];
			$rep->create();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdacelos', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Registro agregado con exito.')));
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('newcelo');
			$view->title = Helpers_Const::APPNAME." - ABM Celos";
			$view->menuid = Helpers_Const::MENUCERDASID;
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$EstadoCelo = Helpers_Const::ESTCELO;
				$IdEstadoCelo = Helpers_Estado::get($EstadoCelo)->Id;
				if($cerda->IdEstado == $IdEstadoCelo){
					$audit = Helpers_Cerda::getAudit($cerda->Id);
					if(count($audit)>0){
						$firstcelo = $audit[0];
						for($i=0;$i<count($audit);$i++){
							if($audit[$i]->IdEstado == $IdEstadoCelo){
								$firstcelo = $audit[$i];
							}
							else{
								break;
							}
						}
						$view->lastserv = Helpers_Servicio::getLast($cerda->Id, $firstcelo->Fecha);
					}
				}
				$view->reps = Helpers_Cerda::getRepeticiones($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdacelos', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdacelos', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}
	
	public function action_getpartochartdata(){
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getPartoData($_POST['IdCerda']);
			echo json_encode($jsonarray);
		}
	}
	
	public function action_edit(){
		if(!isset($_POST['number'])){
			$view = View::factory('editcelo');
			$view->title = Helpers_Const::APPNAME." - ABM Celos";
			$view->menuid = Helpers_Const::MENUCERDASID;
			$view->celo = Helpers_Celo::get($this->request->param('id'));
			$this->response->body($view->render());
		}
		else{
			$celo = ORM::factory('cerdacelo', $_POST['IdCelo']);
			$celo->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$celo->Observaciones = $_POST['obs'];
			$celo->update();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdacelos', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Repeticion de celo modificada con exito.')));	
		}
	}
}