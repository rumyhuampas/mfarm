<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMClientes extends Controller {

	public function action_list(){
		$view = View::factory('listcliente');
			$view->title = Helpers_Const::APPNAME." - ABM Cliente";
			$view->menuid = Helpers_Const::MENUABMID;
			$view->clientes = Helpers_Cliente::get();
			$this->response->body($view->render());
	}
	
	public function action_new(){
		if(!isset($_POST['cuil'])){
			$view = View::factory('newcliente');
			$view->title = Helpers_Const::APPNAME." - ABM Cliente";
			$view->menuid = Helpers_Const::MENUABMID;
			$view->clientes = Helpers_Cliente::get();
			$this->response->body($view->render());
		}
		else{
			if(!Helpers_Cliente::exists($_POST['cuil'])){
				$cliente = ORM::factory('cliente');
				$cliente->CUIL = $_POST['cuil'];
				$cliente->DNI = $_POST['dni'];
				$cliente->Nombre = $_POST['name'];
				$cliente->Direccion = $_POST['address'];
				$cliente->Telefono = $_POST['phone'];
				$cliente->Observaciones = $_POST['obs'];
				$cliente->Modified_On = DB::expr('Now()');
				$cliente->Created_On = DB::expr('Now()');
				$cliente->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmclientes', 'action' => 'new',
					'msgtype' => 'msgsuccess', 'msgtext' => 'Cliente agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmclientes', 'action' => 'new',
					'msgtype' => 'msgerror', 'msgtext' => 'El cliente ya existe.')));
			}	
		}
	}

	public function action_search(){
		if(isset($_POST['cuildnisearch']) && $_POST['cuildnisearch'] != ''){
			$view = View::factory('editcliente');
			$view->title = Helpers_Const::APPNAME." - ABM Cliente";
			$view->menuid = Helpers_Const::MENUABMID;
			$cliente = Helpers_Cliente::get($_POST['cuildnisearch']);
			$view->cliente = $cliente;
			if($cliente->loaded()){
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmclientes', 'action' => 'edit',
					'msgtype' => 'msgalert', 'msgtext' => 'El cliente no existe.')));
			}
		}
		else{
			if(isset($_POST['namesearch']) && $_POST['namesearch'] != ''){
				$view = View::factory('editcliente');
				$view->title = Helpers_Const::APPNAME." - ABM Cliente";
				$view->menuid = Helpers_Const::MENUABMID;
				$clientes = Helpers_Cliente::getByName($_POST['namesearch']);
				$view->clientes = $clientes;
				if(count($clientes) > 0){
					$this->response->body($view->render());
				}
				else{
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmclientes', 'action' => 'edit',
						'msgtype' => 'msgalert', 'msgtext' => 'El cliente no existe.')));
				}
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmclientes', 'action' => 'edit',
					'msgtype' => 'msgalert', 'msgtext' => 'El cliente no existe.')));	
			}
		}
	}

	public function action_edit(){
		if(!isset($_POST['cuil'])){
			$view=View::factory('editcliente');
			$view->title = Helpers_Const::APPNAME." - ABM Cliente";
			$view->menuid = Helpers_Const::MENUABMID;
			$this->response->body($view->render());
		}
		else{
			$cliente = Helpers_Cliente::get($_POST['cuil']);
			$cliente->CUIL = $_POST['dni'];
			$cliente->Nombre = $_POST['name'];
			$cliente->Direccion = $_POST['address'];
			$cliente->Telefono = $_POST['phone'];
			$cliente->Observaciones = $_POST['obs'];
			$cliente->Modified_On = DB::expr('Now()');
			$cliente->Update();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmclientes', 'action' => 'edit',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Cliente modificado con exito.')));	
		}
	}
}
