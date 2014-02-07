<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Venta {
	
	public static function get($id = NULL){
		if($id != NULL){
			return ORM::factory('venta')
				->where('Id', '=', $id)->find();
		}
		else{
			return ORM::factory('venta')
                ->where('Deleted', '<>', 'Y')
				->order_by('Fecha', 'DESC')->find_all();
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
            ->and_where('ventas.Total', '<>', '0')
            ->and_where('ventas.Deleted', '<>', 'Y')
			->__toString();
			
		return DB::query(Database::SELECT, 'select * from ('.$qry1.' UNION ALL '.$qry2.') t order by t.Fecha DESC')->as_object()->execute();
	}
    
    public static function getTotals(){
        $data = DB::select(array(DB::expr('CONCAT("Corriente mes: ", CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha)))'), 'Key'), 
            array(DB::expr('ROUND(SUM(v.Total), 2)'), 'Total'),
            DB::expr('(select ROUND(sum(vp.monto), 2) from ventapagos vp where vp.IdVenta = v.Id) as Pagos'))
            ->from(array('ventas', 'v'))
            ->where(DB::expr('MONTH(v.Fecha)'), '=', DB::expr('MONTH(NOW())'))
            ->and_where('v.Deleted', '<>', 'Y')
            ->group_by(DB::expr('YEAR(v.Fecha)'))->group_by(DB::expr('MONTH(v.Fecha)'))
            ->order_by('v.Fecha', 'ASC')->execute();
            
        $res = array();
        for($i=0; $i<count($data); $i++){
            array_push($res, array('key' => $data[$i]['Key'], 'sales' => (float)$data[$i]['Total'], 'pay' => (float)$data[$i]['Pagos']));
        }
        
        $data2 = DB::select(array(DB::expr('CONCAT(CONCAT(CONCAT("Ultimos 12 meses: desde ", MONTH(DATE_SUB(NOW(), INTERVAL 12 MONTH))), "-"), YEAR(DATE_SUB(NOW(), INTERVAL 12 MONTH)))'), 'Key'), 
            array(DB::expr('ROUND(SUM(v.Total), 2)'), 'Total'),
            DB::expr('(select ROUND(sum(vp.monto), 2) from ventapagos vp where vp.IdVenta = v.Id) as Pagos'))
            ->from(array('ventas', 'v'))
            ->where('v.Fecha', '>', DB::expr('DATE_SUB(NOW(), INTERVAL 12 MONTH)'))
            ->and_where('v.Deleted', '<>', 'Y')
            ->order_by('v.Fecha', 'ASC')->execute();
        
        for($i=0; $i<count($data2); $i++){
            array_push($res, array('key' => $data2[$i]['Key'], 'sales' => (float)$data2[$i]['Total'], 'pay' => (float)$data2[$i]['Pagos']));
        }
        
        $data3 = DB::select(array(DB::expr('CONCAT("Corriente ano: ", YEAR(v.Fecha))'), 'Key'), 
            array(DB::expr('ROUND(SUM(v.Total), 2)'), 'Total'),
            DB::expr('(select ROUND(sum(vp.monto), 2) from ventapagos vp where vp.IdVenta = v.Id) as Pagos'))
            ->from(array('ventas', 'v'))
            ->where(DB::expr('YEAR(v.Fecha)'), '=', DB::expr('YEAR(NOW())'))
            ->and_where('v.Deleted', '<>', 'Y')
            ->group_by(DB::expr('YEAR(v.Fecha)'))
            ->order_by('v.Fecha', 'ASC')->execute();
        
        for($i=0; $i<count($data3); $i++){
            array_push($res, array('key' => $data3[$i]['Key'], 'sales' => (float)$data3[$i]['Total'], 'pay' => (float)$data3[$i]['Pagos']));
        }
            
        return $res;
    }
}