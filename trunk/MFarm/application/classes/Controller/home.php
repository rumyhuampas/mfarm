<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$view=View::factory('home');
		$view->title = Helpers_Const::APPNAME().' - Home';
		$view->menuid = 0;
		$view->lastmodif = Helpers_DB::getLastModifications();
		$view->maxweights = Helpers_DB::getMaxWeights();
		$this->response->body($view->render());
	}

	public function action_addevent(){		
		if ($this->request->is_ajax()) {
			$servicioColors = Helpers_Calendar::getServicioColors();
			$probCelo21Colors = Helpers_Calendar::getProbCelo21Colors();
			$probCelo42Colors = Helpers_Calendar::getProbCelo42Colors();
			$probFechaPartoColors = Helpers_Calendar::getProbPartoColors();
			$partoColors = Helpers_Calendar::getPartoColors();
			$newcerdaColors = Helpers_Calendar::getNewCerdaColors();
						
			$servicios = Helpers_DB::getHomeServicios();
			
			$jsonarray = array();
			$currentdate = null;
			$currentcerda = null;
			$servicioarray = null;
			$celo21array = null;
			$celo42array = null;
			$probpartoarray = null;
			foreach($servicios as $servicio){
				$servicio->FechaServicio = date('Y-m-d', strtotime($servicio->FechaServicio));
				if($currentdate != $servicio->FechaServicio || $currentcerda != $servicio->Numero){
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
					}
					
					$currentdate = $servicio->FechaServicio;
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
					}
				}
				if($_POST['servicio'] == 'true'){
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
			}
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
			}
			
			if($_POST['parto'] == 'true'){
				$partos = Helpers_DB::getHomePartos();
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
				$newcerdas = Helpers_DB::getHomeNewCerdas();
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
				/*if($newcerdasarray != null){
					array_push($jsonarray, $newcerdasarray);
				}*/
			}
			
			echo json_encode($jsonarray);
		}	
	}

	public function action_getlastbirthspercentage(){	
		if ($this->request->is_ajax()) {
			$data = Helpers_DB::getLastBirthsData($_POST['amount']);
			$jsonarray = array();
			$i=0;
			foreach($data as $d){
				$vivos = (int)$d->Vivos;
				$muertos = (int)$d->Muertos;
				$momif = (int)$d->Momificados;
				$porc = (int)(($vivos * 100) / ($vivos+$muertos+$momif));
				array_push($jsonarray, array((int)$i, $porc));
				$i++;
			}
			echo json_encode($jsonarray);
		}
	}
	
	public function action_getlastbirthsdata(){
		if ($this->request->is_ajax()) {
			$data = Helpers_DB::getLastBirthsData($_POST['amount']);
			$vivos = 0;
			$muertos = 0;
			$momif = 0;
			foreach($data as $d){
				$vivos = $vivos + (int)$d->Vivos;
				$muertos = $muertos + (int)$d->Muertos;
				$momif = $momif + (int)$d->Momificados;
			}
			$jsonarray = array('vivos' => $vivos, 'muertos' => $muertos, 'momif' => $momif);
			
			echo json_encode($jsonarray);
		}
	}
	
	public function action_getMaxMachoServicios(){	
		if ($this->request->is_ajax()) {
			$data = Helpers_DB::getMaxMachoServicios();
			$jsonarray = array();
			$total=0;
			foreach($data as $d){
				$total = $total + (int)$d['cnt'];
			}
			foreach($data as $d){
				$macho = $d['Macho'];
				$cnt = (int)$d['cnt'];
				$porc = (int)(($cnt * 100) / $total);
				array_push($jsonarray, array($macho, $porc));
			}
			echo json_encode($jsonarray);
		}
	}
	
	public function action_getLastDestetes(){	
		if ($this->request->is_ajax()) {
			$data = Helpers_DB::getLastDestetes($_POST['amount']);
			$jsonarray = array();
			$i=0;
			foreach($data as $d){
				array_push($jsonarray, array((int)$i, (int)$d->Lechones));
				$i++;
			}
			echo json_encode($jsonarray);
		}
	}
}
