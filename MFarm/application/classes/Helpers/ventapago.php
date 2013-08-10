<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_VentaPago {
	
	public static function get($idventa){
		return ORM::factory('ventapago')
			->where('IdVenta', '=', $idventa)
			->order_by('Fecha', 'ASC')->find_all();
	}
	
	public static function getSaldo($idpago){
		$pago = ORM::factory('ventapago', $idpago);
		$venta = ORM::factory('venta', $pago->IdVenta);
		$pagos = DB::select('*')->from('ventapagos')
			->where('IdVenta', '=', $venta->Id)
			->and_where('Fecha', '<=', $pago->Fecha)
			->and_where('Id', '<=', $pago->Id)
			->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')
			->as_object()->execute();
		$montos = 0;
		foreach($pagos as $p){
			$montos += $p->Monto;
		}
		return $venta->Total - $montos;
	}
	
	public static function getSaldoVenta($idventa){
		$venta = ORM::factory('venta', $idventa);
		$pagos = DB::select('*')->from('ventapagos')
			->where('IdVenta', '=', $venta->Id)
			->order_by('Fecha', 'ASC')->order_by('Id', 'ASC')
			->as_object()->execute();
		$montos = 0;
		foreach($pagos as $p){
			$montos += $p->Monto;
		}
		$saldo = $venta->Total - $montos;
		return $saldo;
	}
}