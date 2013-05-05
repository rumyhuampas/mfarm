<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMCerdas extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view = View::factory('newcerda');
			$view->title = Helpers_Const::APPNAME()." - ABM Cerda";
			$view->menuid = 1;
			$view->estados = Helpers_Combos::getEstados();
			$view->cerdas = Helpers_Cerda::get();
			$this->response->body($view->render());
		}
		else{
			if(!Helpers_Cerda::exists($_POST['number'])){
				$cerda = ORM::factory('cerda');
				$cerda->Numero = $_POST['number'];
				$cerda->IdEstado = $_POST['estado'];
				$cerda->Peso = $_POST['weight'];
				$cerda->Modified_On = DB::expr('Now()');
				$cerda->Created_On = DB::expr('Now()');
				$cerda->create();
				
				$cerdaaudit = ORM::factory('cerdaaudit');
				$cerdaaudit->IdCerda = $cerda->Id;
				$cerdaaudit->Fecha = DB::expr('Now()');
				$cerdaaudit->IdEstado = $_POST['estado'];
				$cerdaaudit->Peso = $_POST['weight'];
				$cerdaaudit->Observaciones = $_POST['obs'];
				$cerdaaudit->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdas', 'action' => 'new',
					'msgtype' => 'msgsuccess', 'msgtext' => 'Cerda creada con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdas', 'action' => 'new',
					'msgtype' => 'msgerror', 'msgtext' => 'La cerda ya existe.')));
			}	
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('editcerda');
			$view->title = Helpers_Const::APPNAME()." - ABM Cerda";
			$view->menuid = 1;
			$view->estados = Helpers_Combos::getEstados();
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->audits = Helpers_Cerda::getAudit($cerda->Id);
				$view->servicios = Helpers_Cerda::getServicios($cerda->Id);
				$view->partos = Helpers_Cerda::getPartos($cerda->Id);
				$view->destetes = Helpers_Cerda::getDestetes($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdas', 'action' => 'edit',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdas', 'action' => 'edit',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}

	public function action_addevent(){		
		if ($this->request->is_ajax()) {
			$servicioColors = Helpers_Calendar::getServicioColors();
			$probCelo21Colors = Helpers_Calendar::getProbCelo21Colors();
			$probCelo42Colors = Helpers_Calendar::getProbCelo42Colors();
			$probFechaParto = Helpers_Calendar::getProbPartoColors();
			$modifColors = Helpers_Calendar::getModificationColors();
						
			$servicios = Helpers_Cerda::getServicios($_POST['IdCerda']);
			$jsonarray = array();
			$currentdate = null;
			$servicioarray = null;
			$celo21array = null;
			$celo42array = null;
			$partoarray = null;
			foreach($servicios as $servicio){
				if($currentdate != $servicio->FechaServicio){
					if($servicioarray != null){
						array_push($jsonarray, $servicioarray);
						array_push($jsonarray, $celo21array);
						array_push($jsonarray, $celo42array);
						array_push($jsonarray, $partoarray);
					}
					
					$currentdate = $servicio->FechaServicio;
					$servicioarray = array('title' => 'SERVICIO',
						'date' => $servicio->FechaServicio,
						'backgroundColor' => $servicioColors['backgroundColor'],
						'borderColor' => $servicioColors['borderColor'],
						'textColor' => $servicioColors['textColor']);
					$celo21array = array('title' => 'CELO 21',
						'date' => $servicio->ProbableFechaCelo21,
						'backgroundColor' => $probCelo21Colors['backgroundColor'],
						'borderColor' => $probCelo21Colors['borderColor'],
						'textColor' => $probCelo21Colors['textColor']);
					$celo42array = array('title' => 'CELO 42',
						'date' => $servicio->ProbableFechaCelo42,
						'backgroundColor' => $probCelo42Colors['backgroundColor'],
						'borderColor' => $probCelo42Colors['borderColor'],
						'textColor' => $probCelo42Colors['textColor']);
					$partoarray = array('title' => 'PARTO',
						'date' => $servicio->ProbableFechaParto,
						'backgroundColor' => $probFechaParto['backgroundColor'],
						'borderColor' => $probFechaParto['borderColor'],
						'textColor' => $probFechaParto['textColor']);
				}
				$servicioarray['title'] = $servicioarray['title'].'\nMacho: '.$servicio->Macho;
				$celo21array['title'] = $celo21array['title'].'\nMacho: '.$servicio->Macho;
				$celo42array['title'] = $celo42array['title'].'\nMacho: '.$servicio->Macho;
				$partoarray['title'] = $partoarray['title'].'\nMacho: '.$servicio->Macho;
			}
			if($servicioarray != null){
				array_push($jsonarray, $servicioarray);
				array_push($jsonarray, $celo21array);
				array_push($jsonarray, $celo42array);
				array_push($jsonarray, $partoarray);
			}
			
			$audits = Helpers_Cerda::getAudit($_POST['IdCerda']);
			$currentdate = null;
			$modificationarray = null;
			foreach($audits as $audit){
				if($currentdate != $audit->Fecha){
					if($modificationarray != null){
						array_push($jsonarray, $modificationarray);
					}
					
					$currentdate = $audit->Fecha;
					$modificationarray = array('title' => 'MODIFICACION',
						'date' => $audit->Fecha,
						'backgroundColor' => $modifColors['backgroundColor'],
						'borderColor' => $modifColors['borderColor'],
						'textColor' => $modifColors['textColor']);
				}
				$modificationarray['title'] = $modificationarray['title'].'\nEstado: '.$audit->Estado.'\nPeso: '.$audit->Peso;
			}
			if($modificationarray != null){
				array_push($jsonarray, $modificationarray);
			}
			
			echo json_encode($jsonarray);
		}
	}

	public function action_getcerdachartdata(){
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getCerdaPesoData($_POST['IdCerda']);
			echo json_encode($jsonarray);
		}
	}

	public function action_edit(){
		if(!isset($_POST['number'])){
			$view=View::factory('editcerda');
			$view->title = Helpers_Const::APPNAME()." - ABM Cerda";
			$view->menuid = 1;
			$view->estados = Helpers_Combos::getEstados();
			$this->response->body($view->render());
		}
		else{
			$cerda = Helpers_Cerda::get($_POST['number']);
			$cerda->IdEstado = $_POST['estado'];
			$cerda->Peso = $_POST['weight'];
			$cerda->Modified_On = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerda->Update();
		
			$cerdaaudit = ORM::factory('cerdaaudit');
			$cerdaaudit->IdCerda = $cerda->Id;
			$cerdaaudit->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerdaaudit->IdEstado = $_POST['estado'];
			$cerdaaudit->Peso = $_POST['weight'];
			$cerdaaudit->Observaciones = $_POST['obs'];
			$cerdaaudit->create();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdas', 'action' => 'edit',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Cerda modificada con exito.')));	
		}
	}
	
	public function action_revivir(){
		$IdCerda = $this->request->param('id');
		$cerda = ORM::factory('cerda', $IdCerda);
		$vacia = Helpers_Const::VACIA();
		$cerda->IdEstado = Helpers_Estado::get($vacia)->Id;
		$cerda->Modified_On = DB::expr('Now()');
		$cerda->Update();
	
		$cerdaaudit = ORM::factory('cerdaaudit');
		$cerdaaudit->IdCerda = $cerda->Id;
		$cerdaaudit->Fecha = DB::expr('Now()');
		$cerdaaudit->IdEstado = $cerda->IdEstado;
		$cerdaaudit->Peso = $cerda->Peso;
		$cerdaaudit->Observaciones = 'CERDA REVIVIDA';
		$cerdaaudit->create();
		
		HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdas', 'action' => 'edit',
			'msgtype' => 'msgsuccess', 'msgtext' => 'Cerda modificada con exito.')));	
	}
}
