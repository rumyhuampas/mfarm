<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMClientes extends Controller {

	public function action_new(){
		if(!isset($_POST['dni'])){
			$view = View::factory('newcliente');
			$view->title = Helpers_Const::APPNAME." - ABM Cliente";
			$view->menuid = Helpers_Const::MENUABMID;
			$view->clientes = Helpers_Cliente::get();
			$this->response->body($view->render());
		}
		else{
			if(!Helpers_Cliente::exists($_POST['dni'])){
				$cliente = ORM::factory('cliente');
				$cliente->DNI = $_POST['dni'];
				$cliente->CUIL = $_POST['cuil'];
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
		if(isset($_POST['dnisearch'])){
			$view = View::factory('editcliente');
			$view->title = Helpers_Const::APPNAME." - ABM Cliente";
			$view->menuid = Helpers_Const::MENUABMID;
			$cliente = Helpers_Cliente::get($_POST['dnisearch']);
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
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmclientes', 'action' => 'edit',
				'msgtype' => 'msgalert', 'msgtext' => 'El cliente no existe.')));
		}
	}

	public function action_edit(){
		if(!isset($_POST['dni'])){
			$view=View::factory('editcliente');
			$view->title = Helpers_Const::APPNAME." - ABM Cliente";
			$view->menuid = Helpers_Const::MENUABMID;
			$this->response->body($view->render());
		}
		else{
			$cliente = Helpers_Cliente::get($_POST['dni']);
			$cliente->CUIL = $_POST['cuil'];
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