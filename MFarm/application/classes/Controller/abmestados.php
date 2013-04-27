<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMEstados extends Controller {

	public function action_new(){
		if(!isset($_POST['name'])){
			$view=View::factory('newestado');
			$view->title = Helpers_Const::APPNAME()." - ABM Estados";
			$view->menuid = 2;
			$view->estados = Helpers_DB::getEstados();
			$this->response->body($view->render());
		}
		else{
			if(!Helpers_DB::estadoExits($_POST['name'])){
				$estado = ORM::factory('estado');
				$estado->Nombre = $_POST['name'];
				$estado->CanDelete = 'Y';
				$estado->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmestados', 'action' => 'new',
					'msgtype' => 'msgsuccess', 'msgtext' => 'Estado creado con exito.')));
			}	
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmestados', 'action' => 'new',
					'msgtype' => 'msgerror', 'msgtext' => 'El estado ya existe.')));
			}
		}
	}
	
	public function action_delete(){
		$estado = ORM::factory('estado', $this->request->param('id'));
		$estado->delete();
		
		HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmestados', 'action' => 'new',
			'msgtype' => 'msgsuccess', 'msgtext' => 'Estado eliminado con exito.')));
	}
}
