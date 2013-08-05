<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Config extends Controller {

	public function action_index(){
			$view = View::factory('config');
			$view->title = Helpers_Const::APPNAME." - Configuracion";
			$view->menuid = Helpers_Const::MENUINICIOID;
			$view->config = Helpers_Config::get();
			$this->response->body($view->render());
	}

	public function action_save(){
		$config = Helpers_Config::get();	
		foreach($config as $c){
			$c->Value = $_POST[$c->Name];
			$c->update();
		}
		
		HTTP::redirect(Route::get('msg')->uri(array('controller' => 'config', 'action' => 'index',
			'msgtype' => 'msgsuccess', 'msgtext' => 'Configuracion modificada con exito.')));	
	}
}
