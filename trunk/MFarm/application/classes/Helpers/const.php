<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Const {
	/******** ESTADOS *********/
	public static function CELO(){ return 'CELO'; }
	public static function MUERTA(){ return 'MUERTA'; }	
	public static function VACIA(){ return 'VACIA'; }	
	public static function PREÑADA(){ return 'PRENADA'; }
	public static function POSTPARTO(){ return 'POSTPARTO'; }
	
	public static function DATOSERVICIOS(){ return 'SERVICIOS'; }
	public static function DATOPARTOS(){ return 'PARTOS'; }
	public static function DATODESTETES(){ return 'DESTETES'; }
	
	public static function SERVICIOSCOLNAMES(){ return array('Numero', 'FechaServicio', 'Macho', 'ProbableFechaCelo21', 'ProbableFechaCelo42', 'ProbableFechaParto', 'Observaciones'); }
	public static function SERVICIOSCOLTITLES(){ return array('Numero de cerda', 'Fecha de servicio', 'Macho', 'Probable fecha de celo 21', 'Probable fecha de celo 42', 'Probable fecha de parto', 'Observaciones'); }
}