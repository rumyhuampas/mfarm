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
	
	public static function getAltas($desde = NULL){
		if($desde == NULL){
			$desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)';
		}
		return ORM::factory('cerda')
			->where(DB::expr('DATE(Created_On)'), '>=', DB::expr('DATE('.$desde.')'))
			->order_by('Created_On', 'DESC')->order_by('Id', 'DESC')
			->find_all();
	}
	
	public static function getServicios($id = NULL, $desde = NULL, $hasta = NULL){
		if($id != NULL){
			return ORM::factory('servicio')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
				->where('IdCerda', '=', $id)->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')->find_all();
		}
		else{
			if($desde == NULL){
				$desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)';
			}
			if($hasta == NULL){
				$hasta = 'Now()';	
			}
			return ORM::factory('servicio')
				->join('cerdas')->on('cerdas.Id', '=', 'servicio.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE servicio.IdCerda=cerdas.id)'), 'Numero'))
				->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
				->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
				->find_all();
		}
	}
	
	public static function getAudit($id){
		return ORM::factory('cerdaaudit')
			->select(array(DB::expr('(SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstado)'), 'Estado'))
			->where('IdCerda', '=', $id)
			->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
			->find_all();
	}
	
	public static function getPartos($id = NULL, $desde = NULL, $hasta = NULL){
		if($id != NULL){
			return ORM::factory('parto')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=parto.IdCerda)'), 'Numero'))
				->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')->find_all();
		}
		else{
			if($desde == NULL){
				$desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)';	
			}
			if($hasta == NULL){
				$hasta = 'Now()';	
			}
			return ORM::factory('parto')
				->join('cerdas')->on('cerdas.Id', '=', 'parto.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE parto.IdCerda=cerdas.id)'), 'Numero'))
				->where(DB::expr('DATE(Fecha)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
				->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
				->find_all();
		}
	}

	public static function getLactancias($id = NULL, $idparto = NULL, $desde = NULL, $hasta = NULL){
		if($id != NULL){
			if($idparto != NULL){
				return ORM::factory('lactanciaaudit')
					->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=lactanciaaudit.IdCerda)'), 'Numero'))
					->where('IdCerda', '=', $id)->and_where('IdParto', '=', $idparto)
					->order_by('Fecha', 'ASC')->order_by('IdCerda', 'DESC')->find_all();
			}
			else{
				return ORM::factory('lactanciaaudit')
					->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=lactanciaaudit.IdCerda)'), 'Numero'))
					->where('IdCerda', '=', $id)->order_by('Fecha', 'ASC')->order_by('IdCerda', 'DESC')->find_all();
			}
		}
		else{
			if($desde == NULL){
				$desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)';	
			}
			if($hasta == NULL){
				$hasta = 'Now()';	
			}
			return ORM::factory('lactanciaaudit')
				->join('cerdas')->on('cerdas.Id', '=', 'lactanciaaudit.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE lactanciaaudit.IdCerda=cerdas.id)'), 'Numero'))
				->where(DB::expr('DATE(Fecha)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
				->order_by('Fecha', 'DESC')->order_by('IdCerda', 'ASC')
				->find_all();
		}
	}
	
	public static function getDestetes($id = NULL, $desde = NULL, $hasta = NULL){
		if($id != NULL){
			return ORM::factory('destete')
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=destete.IdCerda)'), 'Numero'))
				->select(DB::expr('ROUND(pesototal/lechones, 2) as PesoProm'))
				->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')->find_all();
		}
		else{
			if($desde == NULL){
				$desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)';	
			}
			if($hasta == NULL){
				$hasta = 'Now()';	
			}
			return ORM::factory('destete')
				->join('cerdas')->on('cerdas.Id', '=', 'destete.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
				->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE destete.IdCerda=cerdas.id)'), 'Numero'))
				->select(DB::expr('ROUND(pesototal/lechones, 2) as PesoProm'))
				->where(DB::expr('DATE(Fecha)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
				->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
				->find_all();
		}
	}

	public static function getCelos($desde = NULL, $hasta = NULL, $celo21 = NULL, $celo42 = NULL){
		$qry = 	ORM::factory('servicio')
			->join('cerdas')->on('cerdas.Id', '=', 'servicio.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'));
		
		if($hasta == NULL){
			$hasta = 'Now()';	
		}
		if($desde == NULL){
			$desde = 'Now()';	
		}
		if($celo21 != NULL && $celo42 != NULL){
			$qry->where(DB::expr('DATE(ProbableFechaCelo21)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
				->or_where(DB::expr('DATE(ProbableFechaCelo42)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'));
		}
		else{
			if($celo21 != NULL && $celo42 == NULL){
				$qry->where(DB::expr('DATE(ProbableFechaCelo21)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'));
			}
			else{
				if($celo21 == NULL && $celo42 != NULL){
					$qry->where(DB::expr('DATE(ProbableFechaCelo42)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'));
				}	
			}
		}
		$qry->order_by('IdCerda', 'DESC');
		return $qry->find_all();
	}
	
	public static function getProbPartos($desde = NULL, $hasta = NULL){
		if($desde == NULL){
			$desde = 'Now()';	
		}
		if($hasta == NULL){
			$hasta = 'Now()';	
		}
		return ORM::factory('servicio')
			->join('cerdas')->on('cerdas.Id', '=', 'servicio.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->select(array(DB::expr('(SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda)'), 'Numero'))
			->where(DB::expr('DATE(ProbableFechaParto)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('IdCerda', 'DESC')->find_all();
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