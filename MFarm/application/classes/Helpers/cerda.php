<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Cerda {

	public static function exists($number){
		$cerda = ORM::factory('cerda')->where('Numero', '=', $number)->find();
		return $cerda->loaded();
	}
	
	public static function get($number = NULL){
		if($number != NULL){
			return ORM::factory('cerda')
				->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerda.IdEstado)'), 'Estado'))
				->where('Numero', '=', $number)->find();
		}
		else{
			return ORM::factory('cerda')
				->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerda.IdEstado)'), 'Estado'))
				->order_by('Created_On')
				->find_all();
		}
	}
	
	public static function getAltas(){
		return ORM::factory('cerda')
			->where(DB::expr('DATE(Created_On)'), '>=', DB::expr('DATE_SUB(NOW(), INTERVAL 365 DAY)'))
			->order_by('Created_On', 'DESC')->order_by('Id', 'DESC')
			->find_all();
	}
	
	public static function getServicios($id = NULL){
		if($id != NULL){
			return ORM::factory('servicio')->where('IdCerda', '=', $id)->order_by('FechaServicio', 'DESC')->order_by('Id', 'DESC')->find_all();
		}
		else{
			return ORM::factory('servicio')
				->join('cerdas')->on('cerdas.Id', '=', 'servicio.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE servicio.IdCerda=cerdas.id)'), 'Numero'))
				->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE_SUB(NOW(), INTERVAL 365 DAY)'))
				->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
				->find_all();	
		}
	}
	
	public static function getAudit($id){
		return ORM::factory('cerdaaudit')
			->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstado)'), 'Estado'))
			->where('IdCerda', '=', $id)
			->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')
			->find_all();
	}
	
	public static function getPartos($id = NULL){
		if($id != NULL){
			return ORM::factory('parto')->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')->find_all();
		}
		else{
			return ORM::factory('parto')
				->join('cerdas')->on('cerdas.Id', '=', 'parto.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE parto.IdCerda=cerdas.id)'), 'Numero'))
				->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE_SUB(NOW(), INTERVAL 365 DAY)'))
				->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
				->find_all();
		}
	}
	
	public static function getDestetes($id){
		return ORM::factory('destete')
			->select(DB::expr('ROUND(pesototal/lechones, 2) as PesoProm'))
			->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')->find_all();
	}
	
	public static function getLastModifications(){
		return ORM::factory('cerdaaudit')
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=cerdaaudit.IdCerda)'), 'Numero'))
			->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstado)'), 'Estado'))
			->order_by('cerdaaudit.fecha', 'DESC')->limit(5)->find_all();
	}
	
	public static function getMaxWeights(){
		return DB::select('IdCerda', 'Peso', 'Fecha', 'Numero')
			->from(DB::expr('(select ca.IdCerda, ca.peso, ca.fecha, c.numero from cerdaaudit ca, cerdas c where c.Id=ca.IdCerda order by ca.idcerda, ca.fecha desc) q'))
			->group_by('idcerda')->order_by('Peso', 'DESC')->limit(10)->execute();
	}
}