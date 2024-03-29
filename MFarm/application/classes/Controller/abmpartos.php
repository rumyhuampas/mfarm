<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMPartos extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view=View::factory('newparto');
			$view->title = Helpers_Const::APPNAME." - ABM Parto";
			$view->menuid = Helpers_Const::MENUPARTOSID;
			$this->response->body($view->render());
		}
		else{
			if($_POST['alive'] != 0 || $_POST['dead'] != 0 || $_POST['momif'] != 0){
				$parto = ORM::factory('parto');
				$parto->IdCerda = $_POST['IdCerda'];
				$parto->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$parto->Vivos = $_POST['alive'];
				$parto->Muertos = $_POST['dead'];
				$parto->Momificados = $_POST['momif'];
				$parto->Observaciones = $_POST['obs'];
				$parto->create();
				
				$registro = ORM::factory('lactanciaaudit');
				$registro->IdCerda = $_POST['IdCerda'];
				$registro->IdParto = $parto->Id;
				$registro->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$registro->Adoptados = 0;
				$registro->Muertos = 0;
				$registro->Total = $parto->Vivos - $parto->Muertos - $parto->Momificados;  
				$registro->Observaciones = 'PARTO';
				$registro->create();
				
				$cerda = ORM::factory('cerda', $parto->IdCerda);
				$postpartoestado = Helpers_Const::ESTPOSTPARTO;
				$cerda->IdEstado = Helpers_Estado::get($postpartoestado)->Id;
				$cerda->Modified_On = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$cerda->Update();
			
				$cerdaaudit = ORM::factory('cerdaaudit');
				$cerdaaudit->IdCerda = $cerda->Id;
				$cerdaaudit->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$cerdaaudit->IdEstado = $cerda->IdEstado;
				$cerdaaudit->Peso = $cerda->Peso;
				$cerdaaudit->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
					'msgtype' => 'msgsuccess', 'msgtext' => 'Parto agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
					'msgtype' => 'msgerror', 'msgtext' => 'Al menos uno de los campos debe ser mayor que 0')));
			}	
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('newparto');
			$view->title = Helpers_Const::APPNAME." - ABM Parto";
			$view->menuid = Helpers_Const::MENUPARTOSID;
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->partos = Helpers_Cerda::getPartos($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}
	
	public function action_getpartochartdata(){
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getPartoData($_POST['IdCerda']);
			echo json_encode($jsonarray);
		}
	}
	
	public function action_edit(){
		if(!isset($_POST['number'])){
			$view = View::factory('editparto');
			$view->title = Helpers_Const::APPNAME." - ABM Parto";
			$view->menuid = Helpers_Const::MENUCERDASID;
			$view->parto = Helpers_Parto::get($this->request->param('id'));
			$view->registros = Helpers_Lactancia::getByParto($this->request->param('id'));
			$this->response->body($view->render());
		}
		else{
			$parto = ORM::factory('parto', $_POST['IdParto']);
			
			$cerdaaudit = ORM::factory('cerdaaudit')
				->where('IdCerda', '=', $parto->IdCerda)
				->and_where('Fecha', '=', $parto->Fecha)
				->and_where('IdEstado', '=', Helpers_Estado::get(Helpers_Const::ESTPOSTPARTO)->Id)->find();
			$cerdaaudit->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cerdaaudit->update();
			
			if(Helpers_CerdaAudit::IsLast($cerdaaudit->Id)){
				$cerda = ORM::factory('cerda', $parto->IdCerda);
				$cerda->Modified_On = $cerdaaudit->Fecha;
				$cerda->update();
			}
			
			$registro = ORM::factory('lactanciaaudit')
				->where('IdCerda', '=', $parto->IdCerda)
				->and_where('IdParto', '=', $parto->Id)
				->and_where('Fecha', '=', $parto->Fecha)->find();
			$registro->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$registro->Total = $_POST['alive'] - $_POST['dead'] - $_POST['momif'];
			$registro->update();
			
			$parto->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$parto->Vivos = $_POST['alive'];
			$parto->Muertos = $_POST['dead'];
			$parto->Momificados = $_POST['momif'];
			$parto->Observaciones = $_POST['obs'];
			$parto->update();
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmpartos', 'action' => 'new',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Parto modificado con exito.')));	
		}
	}
}