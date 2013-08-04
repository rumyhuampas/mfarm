<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ventas extends Controller {

	public function action_new(){
		if(!isset($_POST['dni'])){
			$view = View::factory('newventa');
			$view->title = Helpers_Const::APPNAME." - Ventas";
			$view->menuid = Helpers_Const::MENUVENTASID;
			$view->_ventaid = $this->request->param('id');
			$view->ventas = Helpers_Venta::get();
			$this->response->body($view->render());
		}
		else{
			$venta = ORM::factory('venta');
			$venta->Fecha = date('Y-m-d H:i:s', strtotime($_POST['date']));
			$cliente = Helpers_Cliente::get($_POST['dni']);
			$venta->IdCliente = $cliente->Id;
			$venta->Total = $_POST['total'];
			$venta->Saldo = $_POST['total'];
			$venta->create();
			
			$prodtable = $_POST['prodtable'];
			for($i=0; $i<count($prodtable);$i++){
				$ventadetalle = ORM::factory('ventadetalle');
				$ventadetalle->IdVenta = $venta->Id;
				$ventadetalle->Cant = $prodtable[$i][0];
				$ventadetalle->Detalle = $prodtable[$i][1];
				$ventadetalle->PUnit = $prodtable[$i][2];
				$ventadetalle->Total = $prodtable[$i][3];
				$ventadetalle->create();
			}
			
			echo URL::base().Route::get('msgid')->uri(array('controller' => 'ventas', 'action' => 'new',
				'id' => $venta->Id, 'msgtype' => 'msgsuccess', 'msgtext' => 'Venta agregada con exito.'));
		}
	}

	public function action_search(){
		if(isset($_POST['dnisearch'])){
			$view = View::factory('newventa');
			$view->title = Helpers_Const::APPNAME." - Ventas";
			$view->menuid = Helpers_Const::MENUVENTASID;
			$view->ventas = Helpers_Venta::get();
			$cliente = Helpers_Cliente::get($_POST['dnisearch']);
			$view->cliente = $cliente;
			if($cliente->loaded()){
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'ventas', 'action' => 'new',
					'msgtype' => 'msgalert', 'msgtext' => 'El cliente no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'ventas', 'action' => 'edit',
				'msgtype' => 'msgalert', 'msgtext' => 'El cliente no existe.')));
		}
	}
	
	public function action_printfactura(){
		$venta = ORM::factory('venta', $_POST['ventaid']);
		if($venta->loaded()){
			$pdf = Helpers_Reportes::createFactura($venta->Id);
			$this->response->headers(array('Content-Type' => 'application/pdf'));
			Helpers_Reportes::show($pdf);
		}
		else{
			//errorpdf
		}
	}

	public function action_edit(){
		if(!isset($_POST['number'])){
			$view=View::factory('editcerda');
			$view->title = Helpers_Const::APPNAME." - ABM Cerda";
			$view->menuid = Helpers_Const::MENUCERDASID;
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
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'ventas', 'action' => 'edit',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Cerda modificada con exito.')));	
		}
	}
}
