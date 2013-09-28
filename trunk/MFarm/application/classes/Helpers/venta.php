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
		$qry1 = 'select ventas.*, round(sum(ventapagos.monto), 2) as saldo 
				from ventas, ventapagos where ventapagos.IdVenta = ventas.Id
				group by ventas.Id
				having saldo < ventas.total';
		$qry2 = DB::select('ventas.*', DB::expr(' "" as saldo'))->from('ventas')
			->join('ventapagos', 'left')
			->on('ventapagos.IdVenta', '=', 'ventas.Id')
			->where(DB::expr('(SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id)'), '=', '0')
			->__toString();
			
		return DB::query(Database::SELECT, 'select * from ('.$qry1.' UNION ALL '.$qry2.') t order by t.Fecha')->as_object()->execute();
	}
}