<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMDestetes extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view = View::factory('newdestete');
			$view->title = Helpers_Const::APPNAME." - ABM Destetes";
			$view->menuid = Helpers_Const::MENUABMID;
			$this->response->body($view->render());
		}
		else{
			$destete = ORM::factory('destete');
			$destete->IdCerda = $_POST['IdCerda'];
			$destete->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$destete->Lechones = $_POST['lechones'];
			$destete->Dias = $_POST['days'];
			$destete->PesoTotal = $_POST['weight'];
			$destete->Observaciones = $_POST['obs'];
			$destete->create();
			
			$cerda = ORM::factory('cerda', $destete->IdCerda);
			$vaciaestado = Helpers_Const::ESTVACIA;
			$cerda->IdEstado = Helpers_Estado::get($vaciaestado)->Id;
			$cerda->Modified_On = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerda->Update();
		
			$cerdaaudit = ORM::factory('cerdaaudit');
			$cerdaaudit->IdCerda = $cerda->Id;
			$cerdaaudit->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerdaaudit->IdEstado = $cerda->IdEstado;
			$cerdaaudit->Peso = $cerda->Peso;
			$cerdaaudit->create();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmdestetes', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Destete agregado con exito.')));	
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('newdestete');
			$view->title = Helpers_Const::APPNAME." - ABM Destetes";
			$view->menuid = Helpers_Const::MENUABMID;
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->destetes = Helpers_Cerda::getDestetes($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmdestetes', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmdestetes', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}
}