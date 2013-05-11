<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Lactancia {
	
	public static function get($idCerda = NULL){
		if($idCerda != NULL){
			return ORM::factory('lactanciaaudit')->where('IdCerda', '=', $idCerda);
		}
		else{
			return ORM::factory('lactanciaaudit')->order_by('Fecha', 'ASC')->find_all();
		}
	}
	
	public static function getLast($IdCerda){
		return ORM::factory('lactanciaaudit')->where('IdCerda', '=', $IdCerda)->order_by('Fecha', 'DESC')->limit(1)->find();
	}
}