<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Const {
	/******** APLICACION *********/
	public static function APPNAME(){ return 'MFarm'; }
	
	/******** ESTADOS *********/
	public static function CELO(){ return 'CELO'; }
	public static function MUERTA(){ return 'MUERTA'; }	
	public static function VACIA(){ return 'VACIA'; }	
	public static function PRE�ADA(){ return 'PRENADA'; }
	public static function POSTPARTO(){ return 'POSTPARTO'; }
	
	/******** DATOS *********/
	public static function DATOMODIF(){ return 'MODIFICACIONES'; }
	public static function DATOSERVICIOS(){ return 'SERVICIOS'; }
	public static function DATOPARTOS(){ return 'PARTOS'; }
	public static function DATODESTETES(){ return 'DESTETES'; }
	public static function DATOCOMPLETO(){ return 'COMPLETO'; }
	
	public static function MODIFCOLNAMES(){ return array('Numero', 'Fecha', 'Estado', 'Peso', 'Observaciones'); }
	public static function MODIFCOLTITLES(){ return array('Numero de cerda', 'Fecha de modif', 'Estado', 'Peso', 'Observaciones'); }
	
	public static function SERVICIOSCOLNAMES(){ return array('Numero', 'FechaServicio', 'Macho', 'ProbableFechaCelo21', 'ProbableFechaCelo42', 'ProbableFechaParto', 'Observaciones'); }
	public static function SERVICIOSCOLTITLES(){ return array('Numero de cerda', 'Fecha de servicio', 'Macho', 'Probable fecha de celo 21', 'Probable fecha de celo 42', 'Probable fecha de parto', 'Observaciones'); }
	
	public static function PARTOSCOLNAMES(){ return array('Numero', 'Fecha', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }
	public static function PARTOSCOLTITLES(){ return array('Numero de cerda', 'Fecha de parto', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }

	public static function DESTETESCOLNAMES(){ return array('Numero', 'Fecha', 'Lechones', 'Dias', 'PesoTotal', 'PesoProm', 'Observaciones'); }
	public static function DESTETESCOLTITLES(){ return array('Numero de cerda', 'Fecha de destete', 'Lechones', 'Dias', 'Peso Total', 'Peso promedio', 'Observaciones'); }

	public static function CERDAMODIFCOLNAMES(){ return array('Fecha', 'Estado', 'Peso', 'Observaciones'); }
	public static function CERDAMODIFCOLTITLES(){ return array('Fecha de modif', 'Estado', 'Peso', 'Observaciones'); }
	
	public static function CERDASERVICIOSCOLNAMES(){ return array('FechaServicio', 'Macho', 'ProbableFechaCelo21', 'ProbableFechaCelo42', 'ProbableFechaParto', 'Observaciones'); }
	public static function CERDASERVICIOSCOLTITLES(){ return array('Fecha de servicio', 'Macho', 'Probable fecha de celo 21', 'Probable fecha de celo 42', 'Probable fecha de parto', 'Observaciones'); }
	
	public static function CERDAPARTOSCOLNAMES(){ return array('Fecha', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }
	public static function CERDAPARTOSCOLTITLES(){ return array('Fecha de parto', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }

	public static function CERDADESTETESCOLNAMES(){ return array('Fecha', 'Lechones', 'Dias', 'PesoTotal', 'PesoProm', 'Observaciones'); }
	public static function CERDADESTETESCOLTITLES(){ return array('Fecha de destete', 'Lechones', 'Dias', 'Peso Total', 'Peso promedio', 'Observaciones'); }
}