<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Const {
	/******** APLICACION *********/
	const APPNAME = 'PorkMan';
	
	/******** MENU *********/
	const MENUINICIOID = '0';
	const MENUABMID = '1';
	const MENUCERDASID = '2';
	const MENUPRENAID = '3';
	const MENUPARTOSID = '4';
	const MENUDESTETESID = '5';
	const MENULACTANCIAID = '6';
	const MENUREPORTESID = '7';
	const MENUVENTASID = '8';
	
	/******** ESTADOS *********/
	const ESTCACHORRA = 'CACHORRA PREPARACION';
	const ESTGESTANTE = 'GESTANTE';
	const ESTLACTANCIA = 'LACTANCIA';
	const ESTVACA = 'VACIA';
	const ESTMUERTA = 'MUERTA';
	
	const ESTENCURSO = 'EN CURSO';
	const ESTFINALIZADO = 'FINALIZADO';
	
	/******** DATOS *********/
	const DATOMODIF = 'MODIFICACIONES';
	const DATOSERVICIOS = 'SERVICIOS';
	const DATOREPS = 'REPETICIONES DE CELO';
	const DATOPARTOS = 'PARTOS';
	const DATOLACTANCIAS = 'MODIFICACIONES EN LACTANCIA';
	const DATODESTETES = 'DESTETES';
	const DATOCOMPLETO = 'COMPLETO';
	
	public static function MODIFCOLNAMES() { return array('Numero', 'Fecha', 'Estado', 'Peso', 'Observaciones'); }
	public static function MODIFCOLTITLES() { return array('Numero de cerda', 'Fecha de modif', 'Estado', 'Peso', 'Observaciones'); }
	
	public static function SERVICIOSCOLNAMES() { return array('Numero', 'FechaServicio', 'Macho', 'ProbableFechaCelo21', 'ProbableFechaCelo42', 'ProbableFechaParto', 'Observaciones'); }
	public static function SERVICIOSCOLTITLES() { return array('Numero de cerda', 'Fecha de servicio', 'Macho', 'Probable fecha de celo 21', 'Probable fecha de celo 42', 'Probable fecha de parto', 'Observaciones'); }
	
	public static function REPSCOLNAMES() { return array('Numero', 'Fecha', 'FechaServicio', 'ProbableFechaCelo21', 'ProbableFechaCelo42', 'Observaciones'); }
	public static function REPSCOLTITLES() { return array('Numero de cerda', 'Fecha de repeticion de celo', 'Fecha de servicio', 'Probable fecha de celo 21', 'Probable fecha de celo 42', 'Probable fecha de parto'); }
	
	public static function PARTOSCOLNAMES() { return array('Numero', 'Fecha', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }
	public static function PARTOSCOLTITLES() { return array('Numero de cerda', 'Fecha de parto', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }
	
	public static function LACTANCIASCOLNAMES() { return array('Numero', 'Fecha', 'FechaParto', 'Adoptados', 'Muertos', 'Total', 'Observaciones'); }
	public static function LACTANCIASCOLTITLES() { return array('Numero de cerda', 'Fecha de modificacion', 'Fecha de parto', 'Adoptados', 'Muertos', 'Total', 'Observaciones'); }

	public static function DESTETESCOLNAMES() { return array('Numero', 'Fecha', 'Lechones', 'Dias', 'PesoTotal', 'PesoProm', 'Observaciones'); }
	public static function DESTETESCOLTITLES() { return array('Numero de cerda', 'Fecha de destete', 'Lechones', 'Dias', 'Peso Total', 'Peso promedio', 'Observaciones'); }

	public static function CERDAMODIFCOLNAMES() { return array('Fecha', 'Estado', 'Peso', 'Observaciones'); }
	public static function CERDAMODIFCOLTITLES() { return array('Fecha de modif', 'Estado', 'Peso', 'Observaciones'); }
	
	public static function CERDASERVICIOSCOLNAMES() { return array('FechaServicio', 'Macho', 'ProbableFechaCelo21', 'ProbableFechaCelo42', 'ProbableFechaParto', 'Observaciones'); }
	public static function CERDASERVICIOSCOLTITLES() { return array('Fecha de servicio', 'Macho', 'Probable fecha de celo 21', 'Probable fecha de celo 42', 'Probable fecha de parto', 'Observaciones'); }
	
	public static function CERDAREPSCOLNAMES() { return array('Fecha', 'FechaServicio', 'ProbableFechaCelo21', 'ProbableFechaCelo42', 'Observaciones'); }
	public static function CERDAREPSCOLTITLES() { return array('Fecha de repeticion de celo', 'Fecha de servicio', 'Probable fecha de celo 21', 'Probable fecha de celo 42', 'Observaciones'); }
	
	public static function CERDAPARTOSCOLNAMES() { return array('Fecha', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }
	public static function CERDAPARTOSCOLTITLES() { return array('Fecha de parto', 'Vivos', 'Muertos', 'Momificados', 'Observaciones'); }

	public static function CERDALACTANCIASCOLNAMES() { return array('Fecha', 'FechaParto', 'Adoptados', 'Muertos', 'Total', 'Observaciones'); }
	public static function CERDALACTANCIASCOLTITLES() { return array('Fecha de modificacion', 'Fecha de parto', 'Adoptados', 'Muertos', 'Total', 'Observaciones'); }

	public static function CERDADESTETESCOLNAMES() { return array('Fecha', 'Lechones', 'Dias', 'PesoTotal', 'PesoProm', 'Observaciones'); }
	public static function CERDADESTETESCOLTITLES() { return array('Fecha de destete', 'Lechones', 'Dias', 'Peso Total', 'Peso promedio', 'Observaciones'); }
	
	/************* TIPOS DE PAGOS ***************/
	const TPEFECTIVO = 'Efectivo';
	const TPCHEQUE = 'Cheque';
	const TPDEPOSITO = 'Deposito en cuenta';
	
	/************* USER PROFILE ***************/
	const UPADMIN = 'ADMIN';
	const UPVENTA = 'VENTA';
	const UPGRANJA = 'GRANJA';
	const UPESTADISTICO = 'ESTADISTICO';
}