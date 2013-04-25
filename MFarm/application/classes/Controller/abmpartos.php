<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMPartos extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view=View::factory('newparto');
			$view->title = "MFarm - ABM Parto";
			$view->menuid = 2;
			$this->response->body($view->render());
		}
		else{
			$parto = ORM::factory('parto');
			$parto->IdCerda = $_POST['IdCerda'];
			$parto->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$parto->Vivos = $_POST['alive'];
			$parto->Muertos = $_POST['dead'];
			$parto->Momificados = $_POST['momif'];
			$parto->Observaciones = $_POST['obs'];
			$parto->create();
			
			$cerda = ORM::factory('cerda', $parto->IdCerda);
			$postpartoestado = Helpers_Const::POSTPARTO();
			$cerda->IdEstado = Helpers_DB::getEstadoId($postpartoestado);
			$cerda->Modified_On = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerda->Update();
		
			$cerdaaudit = ORM::factory('cerdaaudit');
			$cerdaaudit->IdCerda = $cerda->Id;
			$cerdaaudit->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerdaaudit->IdEstado = $cerda->IdEstado;
			$cerdaaudit->Peso = $cerda->Peso;
			$cerdaaudit->create();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Parto agregado con exito.')));	
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view=View::factory('newparto');
			$view->title = "MFarm - ABM Parto";
			$view->menuid = 2;
			$cerda = Helpers_DB::getCerda($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->partos = Helpers_DB::getCerdaPartos($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}
}