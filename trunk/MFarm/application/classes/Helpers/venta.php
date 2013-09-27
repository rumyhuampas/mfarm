<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Venta {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('venta')
				->where('Id', '=', $id)->find();
		}
		else{
			return ORM::factory('venta')
				->order_by('Fecha', 'ASC')->find_all();
		}
	}
	
	public static function getActive(){
		/*$qry1 = DB::select('ventas.*')->from('ventas')
			->where(DB::expr('(SELECT SUM(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id)'), '<', 'ventas.Total')
			->order_by('Fecha', 'ASC');
			
		return $qry1->as_object()->execute();*/
		
		
		
		return DB::select('ventas.*', DB::expr('ROUND(SUM(monto), 2) as SALDO'))->from('ventas', 'ventapagos', 'clientes')
			->where('ventapagos.IdVenta', '=', 'ventas.Id')
			->and_where('clientes.Id', '=', 'ventas.IdCliente')
			->group_by('ventas.Id')
			//->having('SALDO', '<', 'ventas.tota')
			
			->order_by('ventas.Fecha')->order_by('clientes.Nombre')
			->as_object()->execute();
		/*return DB::select('ventas.*')->from('ventas')
			->join('ventapagos', 'left')
			->on('ventapagos.IdVenta', '=', 'ventas.Id')
			->where(DB::expr('(SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id)'), '=', '0')
			->union($qry1)
			->as_object()
			->execute();*/
	}
}