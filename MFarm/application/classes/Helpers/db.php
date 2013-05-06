<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_DB {
		
	public static function registerEndStatusId(){
		$estado = ORM::factory('estado')->where('Nombre', '=', Helpers_Const::MUERTA())->find();
		$session = $session = Session::instance();
		$session->set('endstatusid', $estado->Id);
	}
	
	public static function clearSession(){
		$session = Session::instance();
		$session->delete('currentuser');
		$session->delete('currentuserid');
		$session->delete('endstatusid');
	}
	
	/*********** HEADERBAR *********/
	/*public static function getTodayNewCerdas(){
		return ORM::factory('cerda')
			->where(DB::expr('DATE(Created_On)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->find_all();	
	}
	
	public static function getTodayServicios(){
		return ORM::factory('servicio')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
			->where(DB::expr('DATE(FechaServicio)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->find_all();	
	}
	
	public static function getTodayPartos(){
		return ORM::factory('parto')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=parto.IdCerda)'), 'Numero'))
			->where(DB::expr('DATE(Fecha)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->find_all();	
	}
	
	public static function getTodayDestetes(){
		return ORM::factory('destete')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=destete.IdCerda)'), 'Numero'))
			->where(DB::expr('DATE(Fecha)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->find_all();	
	}*/
	
	/*public static function getTodayCelo21(){
		return ORM::factory('servicio')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
			->where(DB::expr('DATE(ProbableFechaCelo21)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->find_all();	
	}
	
	public static function getTodayCelo42(){
		return ORM::factory('servicio')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
			->where(DB::expr('DATE(ProbableFechaCelo42)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->find_all();	
	}
	
	public static function getTodayProbParto(){
		return ORM::factory('servicio')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
			->where(DB::expr('DATE(ProbableFechaParto)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->find_all();	
	}*/
	
	/*public static function getTodayNewCerdasCount(){
		return ORM::factory('cerda')->where(DB::expr('DATE(Created_On)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
	}

	public static function getTodayServiciosCount(){
		return ORM::factory('servicio')->where(DB::expr('DATE(FechaServicio)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
	}
	
	public static function getTodayPartosCount(){
		return ORM::factory('parto')->where(DB::expr('DATE(Fecha)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
	}
	
	public static function getTodayDestetesCount(){
		return ORM::factory('destete')->where(DB::expr('DATE(Fecha)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
	}*/
	
	/*public static function getTodayCelosCount(){
		return ORM::factory('servicio')
		->where(DB::expr('DATE(ProbableFechaCelo21)'), '=', DB::expr('DATE(NOW())'))
		->or_where(DB::expr('DATE(ProbableFechaCelo42)'), '=', DB::expr('DATE(NOW())'))
		->order_by('Id', 'DESC')->count_all();
	}
	
	public static function getTodayProbPartoCount(){
		return ORM::factory('servicio')->where(DB::expr('DATE(ProbableFechaParto)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
	}*/
	
	/*********** REPORTES *********/
	public static function getModificaciones($desde, $hasta, $IdCerda = NULL){
		if($IdCerda == NULL){
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=cerdaaudit.IdCerda) AS Numero'),
				DB::expr('(SELECT Nombre FROM estados WHERE estados.id=cerdaaudit.IdEstado) AS Estado'))
				->from('cerdaaudit')
				->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->order_by('Fecha', 'ASC')->execute()->as_array();
		}
		else{
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=cerdaaudit.IdCerda) AS Numero'),
				DB::expr('(SELECT Nombre FROM estados WHERE estados.id=cerdaaudit.IdEstado) AS Estado'))
				->from('cerdaaudit')
				->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->and_where('IdCerda', '=', $IdCerda)
				->order_by('Fecha', 'ASC')->execute()->as_array();
		}
	}
	
	public static function getServicios($desde, $hasta, $IdCerda = NULL){
		if($IdCerda == NULL){
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS Numero'))
				->from('servicios')
				->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(FechaServicio)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->order_by('FechaServicio', 'ASC')->execute()->as_array();
		}
		else{
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS Numero'))
				->from('servicios')
				->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(FechaServicio)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->and_where('IdCerda', '=', $IdCerda)
				->order_by('FechaServicio', 'ASC')->execute()->as_array();
		}
	}
	
	public static function getPartos($desde, $hasta, $cerdaNumber = NULL){
		if($IdCerda == NULL){
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=partos.IdCerda) AS Numero'))
				->from('partos')
				->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->order_by('Fecha', 'ASC')->execute()->as_array();
		}
		else{
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=partos.IdCerda) AS Numero'))
				->from('partos')
				->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->and_where('IdCerda', '=', $IdCerda)
				->order_by('Fecha', 'ASC')->execute()->as_array();
		}
	}
	
	public static function getDestetes($desde, $hasta, $cerdaNumber = NULL){
		if($IdCerda == NULL){
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=destetes.IdCerda) AS Numero'), 
				DB::expr('ROUND(pesototal/lechones, 2) as PesoProm'))
				->from('destetes')
				->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->order_by('Fecha', 'ASC')->execute()->as_array();
		}
		else{
			return DB::select('*', DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=destetes.IdCerda) AS Numero'), 
				DB::expr('ROUND(pesototal/lechones, 2) as PesoProm'))
				->from('destetes')
				->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE("'.$desde.'")'))
				->and_where(DB::expr('DATE(Fecha)'), '<=', DB::expr('DATE("'.$hasta.'")'))
				->and_where('IdCerda', '=', $IdCerda)
				->order_by('Fecha', 'ASC')->execute()->as_array();
		}
	}
}
	