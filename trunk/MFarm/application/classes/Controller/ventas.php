<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ventas extends Controller {

	public function action_new(){
		if(!isset($_POST['cuil'])){
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
			$cliente = Helpers_Cliente::get($_POST['cuil']);
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
		if(isset($_POST['cuildnisearch'])){
			$view = View::factory('newventa');
			$view->title = Helpers_Const::APPNAME." - Ventas";
			$view->menuid = Helpers_Const::MENUVENTASID;
			$view->ventas = Helpers_Venta::get();
			$cliente = Helpers_Cliente::get($_POST['cuildnisearch']);
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

	public function action_addpago(){
		$idventa = $this->request->param('id'); 
		if(!isset($_POST['monto'])){
			$view=View::factory('addpago');
			$view->title = Helpers_Const::APPNAME." - ABM Venta";
			$view->menuid = Helpers_Const::MENUVENTASID;
			$view->venta = Helpers_Venta::get($idventa);
			$view->tpagos = Helpers_Combos::getTiposDePagos();
			$view->pagos = Helpers_VentaPago::get($idventa);
			$this->response->body($view->render());
		}
		else{
			$saldo = (float)$_POST['saldo'];
			$monto = (float)$_POST['monto'];
			if($saldo >= $monto){
				$newsaldo = $saldo - $monto;
				
				$venta = Helpers_Venta::get($_POST['idventa']);
				$venta->Saldo = $newsaldo;
				$venta->update();
				
				$ventapago = ORM::factory('ventapago');
				$ventapago->Fecha = date('Y-m-d', strtotime($_POST['date']));
				$ventapago->IdVenta = $venta->Id;
				$ventapago->Tipo = $_POST['tpago'];
				$ventapago->Monto = $_POST['monto'];
				$ventapago->Saldo = $newsaldo;
				$ventapago->Observaciones = $_POST['obs'];
				$ventapago->create();
				
				HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'ventas', 'action' => 'addpago', 'id' => $_POST['idventa'],
					'msgtype' => 'msgsuccess', 'msgtext' => 'Pago agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'ventas', 'action' => 'addpago', 'id' => $_POST['idventa'],
					'msgtype' => 'msgerror', 'msgtext' => 'El monto no puede ser mayor al saldo.')));
			}
		}
	}
}
