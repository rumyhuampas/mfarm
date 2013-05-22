<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_CerdaAudit {
	
	public static function IsLast($id = NULL){
		if($id != NULL){
			$audit = ORM::factory('cerdaaudit')->order_by('Fecha', 'DESC')->limit(1)->find();
			if($audit->Id == $id){
				return true;
			}
			else{
				return false;
			}
		}
		return false;
	}
}