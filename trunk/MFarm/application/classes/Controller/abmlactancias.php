<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMLactancias extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view=View::factory('newlactancia');
			$view->title = Helpers_Const::APPNAME." - ABM Lactancia";
			$view->menuid = Helpers_Const::MENULACTANCIAID;
			$this->response->body($view->render());
		}
		else{
			if($_POST['adopt'] != 0 || $_POST['dead'] != 0){
				$totalactual = Helpers_Lactancia::getLastByCerda($_POST['IdCerda'])->Total;
				$adopt = $_POST['adopt'];
				$dead = $_POST['dead'];
				$total = $totalactual + $adopt - $dead;
				if($total >= 0){
					$registro = ORM::factory('lactanciaaudit');
					$registro->IdCerda = $_POST['IdCerda'];
					$registro->IdParto = $_POST['IdParto'];
					$registro->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
					$registro->Adoptados = $adopt;
					$registro->Muertos = $dead;
					$registro->Total = $total;  
					$registro->Observaciones = $_POST['obs'];
					$registro->create();
					
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmlactancias', 'action' => 'new',
						'msgtype' => 'msgsuccess', 'msgtext' => 'Registro agregado con exito.')));
				}
				else{
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmlactancias', 'action' => 'new',
						'msgtype' => 'msgerror',
						'msgtext' => 'El total de lechones no puede ser negativo - Lechones ('.$totalactual.') + Adoptados ('.$adopt.') - Muertos ('.$dead.') = Nuevo Total ('.$total.')')));
				}
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmlactancias', 'action' => 'new',
					'msgtype' => 'msgerror', 'msgtext' => 'Al menos uno de los campos debe ser mayor que 0')));
			}	
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('newlactancia');
			$view->title = Helpers_Const::APPNAME." - ABM Lactancia";
			$view->menuid = Helpers_Const::MENULACTANCIAID;
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$lastparto = Helpers_Parto::getLast($cerda->Id);
				$view->lastparto = $lastparto;
				$view->registros = Helpers_Cerda::getLactancias($cerda->Id, $lastparto);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmlactancias', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmlactancias', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}

	public function action_getlactanciachartdata(){
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getLactanciaData($_POST['IdCerda'], $_POST['IdParto']);
			echo json_encode($jsonarray);
		}
	}
}