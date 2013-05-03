<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMCerdas extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view=View::factory('newcerda');
			$view->title = Helpers_Const::APPNAME()." - ABM Cerda";
			$view->menuid = 1;
			$view->estados = Helpers_DB::getComboEstados();
			$view->cerdas = Helpers_DB::getCerdas();
			$this->response->body($view->render());
		}
		else{
			if(!Helpers_DB::cerdaExists($_POST['number'])){
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
			$view=View::factory('editcerda');
			$view->title = Helpers_Const::APPNAME()." - ABM Cerda";
			$view->menuid = 1;
			$view->estados = Helpers_DB::getComboEstados();
			$cerda = Helpers_DB::getCerda($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->audits = Helpers_DB::getCerdaAudit($cerda->Id);
				$view->servicios = Helpers_DB::getCerdaServicios($cerda->Id);
				$view->partos = Helpers_DB::getCerdaPartos($cerda->Id);
				$view->destetes = Helpers_DB::getCerdaDestetes($cerda->Id);
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
						
			$servicios = Helpers_DB::getCerdaServicios($_POST['IdCerda']);
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
				$servicioarray['title'] = $servicioarray['title'].' - Macho: '.$servicio->Macho;
				$celo21array['title'] = $celo21array['title'].' - Macho: '.$servicio->Macho;
				$celo42array['title'] = $celo42array['title'].' - Macho: '.$servicio->Macho;
				$partoarray['title'] = $partoarray['title'].' - Macho: '.$servicio->Macho;
			}
			if($servicioarray != null){
				array_push($jsonarray, $servicioarray);
				array_push($jsonarray, $celo21array);
				array_push($jsonarray, $celo42array);
				array_push($jsonarray, $partoarray);
			}
			
			$audits = Helpers_DB::getCerdaAudit($_POST['IdCerda']);
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
				$modificationarray['title'] = $modificationarray['title'].' - Estado: '.$audit->Estado.' - Peso: '.$audit->Peso;
			}
			if($modificationarray != null){
				array_push($jsonarray, $modificationarray);
			}
			
			echo json_encode($jsonarray);
		}
	}

	public function action_getcerdachartdata(){
		if ($this->request->is_ajax()) {
			//$mindate = DB::select ('Fecha')->from('cerdaaudit')->where('IdCerda', '=', $_POST['IdCerda'])->order_by('Fecha')->limit(1)->execute();
			/*$data = DB::select ('Peso', DB::expr('DATEDIFF(Fecha, 
				(select fecha from cerdaaudit where IdCerda='.$_POST['IdCerda'].' order by fecha limit 1)) AS Fecha'))
				->from('cerdaaudit')->where('IdCerda', '=', $_POST['IdCerda'])->order_by('Fecha')->execute();*/
			$data = DB::select('Fecha', 'Peso')->from('cerdaaudit')->where('IdCerda', '=', $_POST['IdCerda'])->order_by('Fecha')->limit(20)->execute();
			$jsonarray = array();
			for($i=0; $i<count($data); $i++){
				array_push($jsonarray, array(date('Y-m-d', strtotime($data[$i]['Fecha'])), (int)$data[$i]['Peso']));
			}
			echo json_encode($jsonarray);
		}
	}

	public function action_edit(){
		if(!isset($_POST['number'])){
			$view=View::factory('editcerda');
			$view->title = Helpers_Const::APPNAME()." - ABM Cerda";
			$view->menuid = 1;
			$view->estados = Helpers_DB::getComboEstados();
			$this->response->body($view->render());
		}
		else{
			$cerda = ORM::factory('cerda')->where('Numero', '=', $_POST['number'])->find();
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
		$cerda->IdEstado = Helpers_DB::getEstadoId($vacia);
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
