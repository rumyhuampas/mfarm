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
    
    public static function getTotals($filter, $amount = NULL){
        $key = '';
        if($filter == Helpers_Const::FVCURRMONTH){
            $key = 'CONCAT("Corriente mes: ", CONCAT(CONCAT(MONTH(NOW()), "-"), YEAR(NOW())))';
        }
        if($filter == Helpers_Const::FVLASTMONTHS){
            $key = 'CONCAT(CONCAT(CONCAT("Ultimos '.$amount.' meses: desde ", MONTH(DATE_SUB(NOW(), INTERVAL '.$amount.' MONTH))), "-"), YEAR(DATE_SUB(NOW(), INTERVAL '.$amount.' MONTH)))';
        }
        if($filter == Helpers_Const::FVCURRYEAR){
            $key = 'CONCAT("Corriente ano: ", YEAR(NOW()))';
        }
        if($filter == Helpers_Const::FVYEAR){
            $key = 'CONCAT("Ano: ", '.$amount.')';
        }
        $data = DB::select(array(DB::expr($key), 'Key'), 
            array(DB::expr('CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha))'), 'Year'),
            array(DB::expr('ROUND(SUM(v.Total), 2)'), 'Total'),
            DB::expr('(select ROUND(sum(vp.monto), 2) from ventapagos vp where vp.IdVenta = v.Id) as Pagos'))
            ->from(array('ventas', 'v'));
        if($filter == Helpers_Const::FVCURRMONTH){
            $data = $data->where(DB::expr('MONTH(v.Fecha)'), '=', DB::expr('MONTH(NOW())'));
        }
        if($filter == Helpers_Const::FVLASTMONTHS){
            $data = $data->where('v.Fecha', '>', DB::expr('DATE_SUB(NOW(), INTERVAL '.$amount.' MONTH)'));
        }    
        if($filter == Helpers_Const::FVCURRYEAR){
            $data = $data->where(DB::expr('YEAR(v.Fecha)'), '=', DB::expr('YEAR(NOW())'));
        }
        if($filter == Helpers_Const::FVYEAR){
            $data = $data->where(DB::expr('YEAR(v.Fecha)'), '=', $amount);
        }
        $data = $data->and_where('v.Deleted', '<>', 'Y')
            ->order_by('v.Fecha', 'ASC')->execute();
            
        $res = array();
        for($i=0; $i<count($data); $i++){
            array_push($res, array('key' => $data[$i]['Key'], 'year' => $data[$i]['Year'], 'sales' => (float)$data[$i]['Total'], 'pay' => (float)$data[$i]['Pagos']));
        }
            
        return $res;
    }

    public static function getPrevMonthsTotals($amount){
        $data = DB::select(array(DB::expr('CONCAT(CONCAT(CONCAT("Ultimos '.$amount.' meses: desde ", MONTH(DATE_SUB(NOW(), INTERVAL '.$amount.' MONTH))), "-"), YEAR(DATE_SUB(NOW(), INTERVAL '.$amount.' MONTH)))'), 'Key'), 
            array(DB::expr('CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha))'), 'Year'),
            array(DB::expr('ROUND(SUM(v.Total), 2)'), 'Total'),
            DB::expr('(select ROUND(sum(vp.monto), 2) from ventapagos vp where vp.IdVenta = v.Id) as Pagos'))
            ->from(array('ventas', 'v'))
            ->where('v.Fecha', '>', DB::expr('DATE_SUB(NOW(), INTERVAL '.$amount.' MONTH)'))
            ->and_where('v.Deleted', '<>', 'Y')
            ->group_by(DB::expr('YEAR(v.Fecha)'))->group_by(DB::expr('MONTH(v.Fecha)'))
            ->order_by('v.Fecha', 'ASC')->execute();
            
        $res = array();
        for($i=0; $i<count($data); $i++){
            array_push($res, array('key' => $data[$i]['Key'], 'year' => $data[$i]['Year'], 'sales' => (float)$data[$i]['Total'], 'pay' => (float)$data[$i]['Pagos']));
        }
            
        return $res;
    }

    public static function getByPreviousMonths($amount){
        $data = DB::select('v.Id','v.Fecha', 'v.IdCliente', 'v.Total',
            array(DB::expr('CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha))'), 'Month'))
            ->from(array('ventas', 'v'))
            ->where('v.Fecha', '>', DB::expr('DATE_SUB(NOW(), INTERVAL '.$amount.' MONTH)'))
            ->and_where('v.Deleted', '<>', 'Y')
            ->order_by('v.Fecha', 'ASC')->execute();
            
        $res = array();
        for($i=0; $i<count($data); $i++){
            $detaildata = DB::select('vd.Cant', 'vd.Detalle', 'vd.PUnit', array('vd.Total', 'TotalUnit'))
                ->from(array('ventadetalle', 'vd'))
                ->where('vd.IdVenta', '=', $data[$i]['Id'])->execute();
                
            $detailres = array();
            for($j=0; $j<count($detaildata); $j++){
                array_push($detailres, array('cant' => (int)$detaildata[$j]['Cant'],
                    'detalle' => $detaildata[$j]['Detalle'], 'punit' => (float)$detaildata[$j]['PUnit'],
                    'totalunit' => (float)$detaildata[$j]['TotalUnit']));
            }
            array_push($res, array('fecha' => $data[$i]['Fecha'], 'nombre' => $data[$i]['IdCliente'],
                'total' => (float)$data[$i]['Total'], 'month' => $data[$i]['Month'], 'detail' => $detailres));
        }
            
        return $res;
    }
}