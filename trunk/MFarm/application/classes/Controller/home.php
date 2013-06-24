<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$view=View::factory('home');
		$view->title = Helpers_Const::APPNAME.' - Inicio';
		$view->menuid = Helpers_Const::MENUINICIOID;
		$view->lastmodif = Helpers_Cerda::getLastModifications();
		$view->maxweights = Helpers_Cerda::getMaxWeights();
		$this->response->body($view->render());
	}

	public function action_addevent(){		
		if ($this->request->is_ajax()) {
			echo json_encode(Helpers_Charts::getCalendarData(NULL, $_POST['newcerda'],'false', $_POST['servicio'], 'false',
				$_POST['celo21'], $_POST['celo42'],$_POST['probparto'],$_POST['parto'],$_POST['destete']));
		}	
	}

	public function action_getlastbirthspercentage(){	
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getLastBirthsPercentage($_POST['amount']);
			echo json_encode($jsonarray);
		}
	}
	
	public function action_getlastbirthsdata(){
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getLastBirthsData($_POST['amount']);
			echo json_encode($jsonarray);
		}
	}
	
	public function action_getMaxMachoServicios(){	
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getMaxMachosData();
			echo json_encode($jsonarray);
		}
	}
	
	public function action_getLastDestetes(){	
		if ($this->request->is_ajax()) {
			$jsonarray = Helpers_Charts::getLastDestetesData($_POST['amount']);
			echo json_encode($jsonarray);
		}
	}
}
