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
	
	/*$servicioColors = Helpers_Calendar::getServicioColors();
			$probCelo21Colors = Helpers_Calendar::getProbCelo21Colors();
			$probCelo42Colors = Helpers_Calendar::getProbCelo42Colors();
			$probFechaPartoColors = Helpers_Calendar::getProbPartoColors();
			$partoColors = Helpers_Calendar::getPartoColors();
			$newcerdaColors = Helpers_Calendar::getNewCerdaColors();
						
			//$servicios = Helpers_Cerda::getServicios();
			
			$jsonarray = array();
			$currentdate = null;
			$currentcerda = null;
			$servicioarray = null;
			$celo21array = null;
			$celo42array = null;
			$probpartoarray = null;*/
			//foreach($servicios as $servicio){
				//$servicio->FechaServicio = date('Y-m-d', strtotime($servicio->FechaServicio));
				/*if($currentdate != $servicio->FechaServicio || $currentcerda != $servicio->Numero){
					if($_POST['servicio'] == 'true'){
						if($servicioarray != null){
							array_push($jsonarray, $servicioarray);
						}
					}
					if($_POST['celo21'] == 'true'){
						if($celo21array != null){
							array_push($jsonarray, $celo21array);
						}
					}
					if($_POST['celo42'] == 'true'){
						if($celo42array != null){
							array_push($jsonarray, $celo42array);
						}
					}
					if($_POST['probparto'] == 'true'){
						if($probpartoarray != null){
							array_push($jsonarray, $probpartoarray);
						}
					}*/
					
					/*$currentdate = $servicio->FechaServicio;
					$currentcerda = $servicio->Numero;
					if($_POST['servicio'] == 'true'){
						$servicioarray = array('title' => 'Cerda: '.$servicio->Numero,
							'date' => $servicio->FechaServicio,
							'backgroundColor' => $servicioColors['backgroundColor'],
							'borderColor' => $servicioColors['borderColor'],
							'textColor' => $servicioColors['textColor']);
					}
					if($_POST['celo21'] == 'true'){
						$celo21array = array('title' => 'Cerda: '.$servicio->Numero,
							'date' => $servicio->ProbableFechaCelo21,
							'backgroundColor' => $probCelo21Colors['backgroundColor'],
							'borderColor' => $probCelo21Colors['borderColor'],
							'textColor' => $probCelo21Colors['textColor']);
					}
					if($_POST['celo42'] == 'true'){
						$celo42array = array('title' => 'Cerda: '.$servicio->Numero,
							'date' => $servicio->ProbableFechaCelo42,
							'backgroundColor' => $probCelo42Colors['backgroundColor'],
							'borderColor' => $probCelo42Colors['borderColor'],
							'textColor' => $probCelo42Colors['textColor']);
					}
					if($_POST['probparto'] == 'true'){
						$probpartoarray = array('title' => 'Cerda: '.$servicio->Numero,
							'date' => $servicio->ProbableFechaParto,
							'backgroundColor' => $probFechaPartoColors['backgroundColor'],
							'borderColor' => $probFechaPartoColors['borderColor'],
							'textColor' => $probFechaPartoColors['textColor']);
					}*/
				//}
				/*if($_POST['servicio'] == 'true'){
					$servicioarray['title'] = $servicioarray['title'].'\nMacho: '.$servicio->Macho;
				}
				if($_POST['celo21'] == 'true'){
					$celo21array['title'] = $celo21array['title'].'\nMacho: '.$servicio->Macho;
				}
				if($_POST['celo42'] == 'true'){
					$celo42array['title'] = $celo42array['title'].'\nMacho: '.$servicio->Macho;
				}
				if($_POST['probparto'] == 'true'){
					$probpartoarray['title'] = $probpartoarray['title'].'\nMacho: '.$servicio->Macho;
				}

				//added to fix
				if($_POST['servicio'] == 'true'){
					if($servicioarray != null){
						array_push($jsonarray, $servicioarray);
					}
				}
				if($_POST['celo21'] == 'true'){
					if($celo21array != null){
						array_push($jsonarray, $celo21array);
					}
				}
				if($_POST['celo42'] == 'true'){
					if($celo42array != null){
						array_push($jsonarray, $celo42array);
					}
				}
				if($_POST['probparto'] == 'true'){
					if($probpartoarray != null){
						array_push($jsonarray, $probpartoarray);
					}
				}*/
			//}
			/*if($_POST['servicio'] == 'true'){
				if($servicioarray != null){
					array_push($jsonarray, $servicioarray);
				}
			}
			if($_POST['celo21'] == 'true'){
				if($celo21array != null){
					array_push($jsonarray, $celo21array);
				}
			}
			if($_POST['celo42'] == 'true'){
				if($celo42array != null){
					array_push($jsonarray, $celo42array);
				}
			}
			if($_POST['probparto'] == 'true'){
				if($probpartoarray != null){
					array_push($jsonarray, $probpartoarray);
				}
			}*/
			
			/*if($_POST['parto'] == 'true'){
				$partos = Helpers_Cerda::getPartos();
				$currentdate = null;
				$currentcerda = null;
				$partoarray = null;
				foreach($partos as $parto){
					$parto->Fecha = date('Y-m-d', strtotime($parto->Fecha));
					if($currentdate != $parto->Fecha || $currentcerda != $parto->Numero){
						if($partoarray != null){
							array_push($jsonarray, $partoarray);
						}
						
						$currentdate = $parto->Fecha;
						$partoarray = array('title' => 'Cerda: '.$parto->Numero,
							'date' => $parto->Fecha,
							'backgroundColor' => $partoColors['backgroundColor'],
							'borderColor' => $partoColors['borderColor'],
							'textColor' => $partoColors['textColor']);
					}
					$partoarray['title'] = $partoarray['title'].'\nVivos: '.$parto->Vivos.'\nMuertos: '.$parto->Muertos.'\nMomificados: '.$parto->Momificados;
				}
				if($partoarray != null){
					array_push($jsonarray, $partoarray);
				}
			}
			
			if($_POST['newcerda'] == 'true'){
				$newcerdas = Helpers_Cerda::getAltas();
				$newcerdasarray = null;
				foreach($newcerdas as $newcerda){
					//$newcerda->Created_On = date('Y-m-d', strtotime($newcerda->Created_On));
					$newcerdasarray = array('title' => 'Cerda: '.$newcerda->Numero.'\nPeso: '.$newcerda->Peso,
						'date' => $newcerda->Created_On,
						'backgroundColor' => $newcerdaColors['backgroundColor'],
						'borderColor' => $newcerdaColors['borderColor'],
						'textColor' => $newcerdaColors['textColor']);
						
					array_push($jsonarray, $newcerdasarray);
				}
			}*/
}
	