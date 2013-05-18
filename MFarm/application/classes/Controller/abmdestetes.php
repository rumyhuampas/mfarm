<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ABMDestetes extends Controller {

	public function action_new(){
		if(!isset($_POST['number'])){
			$view = View::factory('newdestete');
			$view->title = Helpers_Const::APPNAME." - ABM Destetes";
			$view->menuid = Helpers_Const::MENUDESTETESID;
			$this->response->body($view->render());
		}
		else{
			$lechones = $_POST['lechones'];
			$lastlactancia = Helpers_Lactancia::getLast($_POST['IdCerda']); 
			$lastparto = Helpers_Parto::getLast($_POST['IdCerda']);
			if($lechones <= $lastlactancia->Total){
				$destete = ORM::factory('destete');
				$destete->IdCerda = $_POST['IdCerda'];
				$destete->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$destete->Lechones = $_POST['lechones'];
				$fechaparto = $lastparto->Fecha;
				$destete->Dias = (strtotime($destete->Fecha) - strtotime($fechaparto))/(60*60*24);
				$destete->PesoTotal = $_POST['weight'];
				$destete->Observaciones = $_POST['obs'];
				$destete->create();
				
				$lactancia = ORM::factory('lactanciaaudit');
				$lactancia->IdCerda = $_POST['IdCerda'];
				$lactancia->IdParto = $lastlactancia->IdParto;
				$lactancia->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$lactancia->Adoptados = 0;
				$lactancia->Muertos = 0;
				$lactancia->Total = $lastlactancia->Total - $lechones;
				$lactancia->Observaciones = 'DESTETE - '.$lechones;
				$lactancia->create();
				
				/*$cerda = ORM::factory('cerda', $destete->IdCerda);
				$vaciaestado = Helpers_Const::ESTVACIA;
				$cerda->IdEstado = Helpers_Estado::get($vaciaestado)->Id;
				$cerda->Modified_On = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$cerda->Update();
			
				$cerdaaudit = ORM::factory('cerdaaudit');
				$cerdaaudit->IdCerda = $cerda->Id;
				$cerdaaudit->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
				$cerdaaudit->IdEstado = $cerda->IdEstado;
				$cerdaaudit->Peso = $cerda->Peso;
				$cerdaaudit->create();*/
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmdestetes', 'action' => 'new',
					'msgtype' => 'msgsuccess', 'msgtext' => 'Destete agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmdestetes', 'action' => 'new',
					'msgtype' => 'msgerror', 'msgtext' => 'Los lechones destetados ('.$lechones.') son mayores a los lechones en lactancia ('.$lastlactancia->Total.').')));
			}
		}
	}

	public function action_search(){
		if(isset($_POST['numbersearch'])){
			$view = View::factory('newdestete');
			$view->title = Helpers_Const::APPNAME." - ABM Destetes";
			$view->menuid = Helpers_Const::MENUDESTETESID;
			$cerda = Helpers_Cerda::get($_POST['numbersearch']);
			$view->cerda = $cerda;
			if($cerda->loaded()){
				$view->total = Helpers_Lactancia::getLast($cerda->Id)->Total;
				$view->destetes = Helpers_Cerda::getDestetes($cerda->Id);
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmdestetes', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmdestetes', 'action' => 'new',
				'msgtype' => 'msgalert', 'msgtext' => 'La cerda no existe.')));
		}
	}
	
	public function action_getdestetechartdata(){
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getDesteteData($_POST['IdCerda']);
			echo json_encode($jsonarray);
		}
	}
}