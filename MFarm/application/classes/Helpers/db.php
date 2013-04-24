<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_DB {
	/******** LOGIN *********/
	public static function getUser($user, $pass){
		return ORM::factory('user')->where('username', '=', $user)->and_where('password', '=', $pass)->find();
	}
	
	public static function getUsers(){
		return ORM::factory('user')->order_by('UserName', 'ASC')->find_all();
	}
	
	public static function isAnyUser(){
		return ORM::factory('user')->count_all();
	}
	
	public static function usernameExists($username){
		$user = ORM::factory('user')->where('username', '=', $username)->find();
		return $user->loaded();
	}
	
	public static function registerEndStatusId(){
		$estado = ORM::factory('estado')->where('Nombre', '=', Helpers_Const::MUERTA())->find();
		$session = $session = Session::instance();
		$session->set('endstatusid', $estado->Id);
	}
	
	public static function getEndStatusId(){
		$session = $session = Session::instance();
		return $session->get('endstatusid');
	}
	
	public static function clearSession(){
		$session = $session = Session::instance();
		$session->delete('currentuser');
		$session->delete('currentuserid');
		$session->delete('endstatusid');
	}
	
	/******** HOME *********/
	public static function getHomeServicios(){
		return ORM::factory('servicio')
			->join('cerdas')->on('cerdas.Id', '=', 'servicio.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_DB::getEndStatusId())
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE servicio.IdCerda=cerdas.id)'), 'Numero'))
			->where(DB::expr('YEAR(FechaServicio)'), '>=', DB::expr('YEAR(Now())'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->find_all();
	}
	
	public static function getHomePartos(){
		return ORM::factory('parto')
			->join('cerdas')->on('cerdas.Id', '=', 'parto.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_DB::getEndStatusId())
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE parto.IdCerda=cerdas.id)'), 'Numero'))
			->where(DB::expr('YEAR(Fecha)'), '>=', DB::expr('YEAR(Now())'))
			->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
			->find_all();
	}
	
	public static function getLastModifications(){
		return ORM::factory('cerdaaudit')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=cerdaaudit.IdCerda)'), 'Numero'))
			->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstado)'), 'NombreEstado'))
			->order_by('cerdaaudit.fecha', 'DESC')->limit(5)->find_all();
	}
	
	public static function getMaxWeights(){
		return DB::select('IdCerda', 'Peso', 'Fecha', 'Numero')
			->from(DB::expr('(select ca.IdCerda, ca.peso, ca.fecha, c.numero from cerdaaudit ca, cerdas c where c.Id=ca.IdCerda order by ca.idcerda, ca.fecha desc) q'))
			->group_by('idcerda')->order_by('Peso', 'DESC')->limit(10)->execute();
	}
	
	public static function getLastBirthsData($amount){
		return ORM::factory('parto')->order_by('Fecha', 'ASC')->limit($amount)->find_all();	
	}
	
	/******** ESTADOS *********/
	public static function getEstados(){
		return ORM::factory('estado')->order_by('Nombre', 'ASC')->find_all();
	}
	
	public static function getComboEstados(){
		return DB::select('id', 'nombre')->from('estados')->order_by('Nombre', 'ASC')->execute()->as_array('id', 'nombre');
	}
	
	public static function estadoExists($name){
		$estado = ORM::factory('estado')->where('nombre', '=', $name)->find();
		return $estado->loaded();
	}
	
	/******** CERDAS *********/
	public static function cerdaExists($number){
		$cerda = ORM::factory('cerda')->where('Numero', '=', $number)->find();
		return $cerda->loaded();
	}
	
	public static function getCerda($number){
		return ORM::factory('cerda')->where('Numero', '=', $number)->find();
	}

	public static function getCerdas(){
		return ORM::factory('cerda')
			->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerda.IdEstado)'), 'Estado'))
			->order_by('Created_On')
			->find_all();
	}
	
	public static function getCerdaServicios($IdCerda){
		return ORM::factory('servicio')->where('IdCerda', '=', $IdCerda)->order_by('FechaServicio', 'DESC')->order_by('Id', 'DESC')->find_all();
	}
	
	public static function getCerdaAudit($IdCerda){
		return ORM::factory('cerdaaudit')
			->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstado)'), 'Estado'))
			->where('IdCerda', '=', $IdCerda)
			->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')
			->find_all();
	}
	
	public static function getCerdaPartos($IdCerda){
		return ORM::factory('parto')->where('IdCerda', '=', $IdCerda)->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')->find_all();
	}
	
	public static function getCerdaDestetes($IdCerda){
		return ORM::factory('destete')->where('IdCerda', '=', $IdCerda)->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')->find_all();
	}
	
	/*********** ESTADOS **********/
	public static function getEstadoId($nombre){
		$result = DB::select('Id')->from('estados')->where('Nombre', '=', $nombre)->execute();
		return $result[0]['Id'];
		//return ORM::factory('estado')->where('Nombre', '=', $nombre)->find()->Id;	
	}

	/*********** HEADERBAR *********/
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
	}
	
	public static function getTodayEventsCount(){
		$servicios = ORM::factory('servicio')->where(DB::expr('DATE(FechaServicio)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
		$partos = ORM::factory('parto')->where(DB::expr('DATE(Fecha)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
		$destetes = ORM::factory('destete')->where(DB::expr('DATE(Fecha)'), '=', DB::expr('DATE(NOW())'))->order_by('Id', 'DESC')->count_all();
		return $servicios + $partos + $destetes;
	}
}
	