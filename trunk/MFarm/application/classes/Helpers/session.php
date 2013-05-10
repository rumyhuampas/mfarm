<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Session {
		
	public static function registerEndStatusId(){
		$estado = ORM::factory('estado')->where('Nombre', '=', Helpers_Const::ESTMUERTA)->find();
		$session = $session = Session::instance();
		$session->set('endstatusid', $estado->Id);
	}
	
	public static function clearSession(){
		$session = Session::instance();
		$session->delete('currentuser');
		$session->delete('currentuserid');
		$session->delete('endstatusid');
	}
}
	