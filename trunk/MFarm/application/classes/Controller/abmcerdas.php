<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMCerdas extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view = View::factory('newcerda');
			$view->title = Helpers_Const::APPNAME." - ABM Cerda";
			$view->menuid = Helpers_Const::MENUCERDASID;
			//$view->estados = Helpers_Combos::getEstados();
			$view->cerdas = Helpers_Cerda::get();
			$this->response->body($view->render());
		}
		else{
			if(!Helpers_Cerda::exists($_POST['number'])){
				$cerda = ORM::factory('cerda');
				$cerda->Numero = $_POST['number'];
				$cerda->IdEstado = Helpers_Estado::get(Helpers_Const::ESTCACHORRA)->Id;
				$cerda->Peso = $_POST['weight'];
				$cerda->Modified_On = DB::expr('Now()');
				$cerda->Created_On = DB::expr('Now()');
				$cerda->create();
				
				$cerdaaudit = ORM::factory('cerdaaudit');
				$cerdaaudit->IdCerda = $cerda->Id;
				$cerdaaudit->Fecha = DB::expr('Now()');
				$cerdaaudit->IdEstado = Helpers_Estado::get(Helpers_Const::ESTCACHORRA)->Id;
				$cerdaaudit->Peso = $_POST['weight'];
				$cerdaaudit->Observaciones = $_POST['obs'];
				$cerdaaudit->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmcerdas', 'action' => 'new',
					'msgtype' => 'msgsuccess', 'msgtext' => 'Cerda agregada con exito.')));
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
			$view->title = Helpers_Const::APPNAME." - ABM Cerda";
			$view->menuid = Helpers_Const::MENUCERDASID;
			//$view->estados = Helpers_Combos::getEstados();
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->audits = Helpers_Cerda::getAudit($cerda->Id);
				//$view->servicios = Helpers_Cerda::getServicios($cerda->Id);
				//$view->reps = Helpers_Cerda::getRepeticiones($cerda->Id);
				$view->partos = Helpers_Cerda::getPartos($cerda->Id);
				$view->lactancias = Helpers_Cerda::getLactancias($cerda->Id);
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
			echo json_encode(Helpers_Charts::getCalendarData($_POST['IdCerda'], 'false'));
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
			$view->title = Helpers_Const::APPNAME." - ABM Cerda";
			$view->menuid = Helpers_Const::MENUCERDASID;
			//$view->estados = Helpers_Combos::getEstados();
			$this->response->body($view->render());
		}
		else{
			$cerda = Helpers_Cerda::get($_POST['number']);
			//$cerda->IdEstado = $_POST['estado'];
			$cerda->Peso = $_POST['weight'];
			$cerda->Modified_On = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerda->Update();
		
			$cerdaaudit = ORM::factory('cerdaaudit');
			$cerdaaudit->IdCerda = $cerda->Id;
			$cerdaaudit->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			//$cerdaaudit->IdEstado = $_POST['estado'];
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
		$vacia = Helpers_Const::ESTVACIA;
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
