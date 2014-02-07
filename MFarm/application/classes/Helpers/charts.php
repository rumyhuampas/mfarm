<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Charts {
	
	/***********ABM CERDA**********/
	public static function getCerdaPesoData($id){
		$data = DB::select('Peso')->from('cerdaaudit')->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->limit(20)->execute();
		$jsonarray = array();
		$pos = count($data);
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, array((int)$pos, (int)$data[$i]['Peso']));
			$pos--;
		}
		return $jsonarray;
	}
	
	public static function getCalendarData($idCerda = NULL, $altas = 'true', $modif = 'true', $serv = 'true', $rep = 'true', $celo21 = 'true',
		$celo42 = 'true', $pparto = 'true', $parto = 'true', $destete = 'true', $desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)'){
		
		$result = array();
		if($altas == 'true'){
			$altas = DB::select(array(DB::expr('CONCAT(\'Cerda: \',cerdas.Numero,\'\\\nPeso: \',cerdas.Peso)'), 'title'), 
				array(Created_On, 'date'),
				array(DB::expr('\''.Helpers_Calendar::ALTACOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('cerdas')
			->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Created_On)'), '>=', DB::expr('DATE('.$desde.')'))
			->order_by('Created_On', 'DESC')->order_by('Id', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $altas);
		}
		if($modif == 'true'){
			$modif = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=cerdaaudit.IdCerda),\'\\\nEstado: \',(select Nombre from estados where estados.Id=cerdaaudit.IdEstado),\'\\\nPeso: \',cerdaaudit.Peso)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::MODIFCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('cerdaaudit')
			->where('cerdaaudit.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE('.$desde.')'));
			if($idCerda != NULL){
				$modif->where('cerdaaudit.IdCerda', '=', $idCerda);
			}
			$modif->order_by('Fecha', 'DESC')->order_by('Id', 'DESC');
			$result = array_merge($result, $modif->execute()->as_array());
		}
		if($serv == 'true'){
			$servicios = DB::select(array(DB::expr('CONCAT(\'Id: \',(servicios.Id),\'\\\nCerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(FechaServicio, 'date'),
				array(DB::expr('\''.Helpers_Calendar::SERVCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'));
			if($idCerda != NULL){
				$servicios->where('servicios.IdCerda', '=', $idCerda);
			}
			$servicios->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC');
			$result = array_merge($result, $servicios->execute()->as_array());
		}
		if($rep == 'true'){
			$reps = DB::select(
				array(DB::expr('CONCAT(\'Servicio ID: \',(servicios.Id),\'\\\nCerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda))'), 'title'), 
				array('cerdacelos.Fecha', 'date'),
				array(DB::expr('\''.Helpers_Calendar::REPCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdacelos')->on('servicios.Id', '=', 'cerdacelos.IdServicio');
			if($idCerda != NULL){
				$reps->where('servicios.IdCerda', '=', $idCerda);
			}
			$reps->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE('.$desde.')'))
			->order_by('cerdacelos.Fecha', 'DESC')->order_by('IdCerda', 'DESC');
			$result = array_merge($result, $reps->execute()->as_array());
		}
		if($celo21 == 'true'){
			$pfcelo21 = DB::select(array(DB::expr('CONCAT(\'Servicio ID: \',(servicios.Id),\'\\\nCerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo21, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO21COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'));
			if($idCerda != NULL){
				$pfcelo21->where('servicios.IdCerda', '=', $idCerda);
			}
			$pfcelo21->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC');
			$result = array_merge($result, $pfcelo21->execute()->as_array());
		}
		if($celo42 == 'true'){
			$pfcelo42 = DB::select(array(DB::expr('CONCAT(\'Servicio ID: \',(servicios.Id),\'\\\nCerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo42, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO42COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'));
			if($idCerda != NULL){
				$pfcelo42->where('servicios.IdCerda', '=', $idCerda);
			}
			$pfcelo42->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC');
			$result = array_merge($result, $pfcelo42->execute()->as_array());
		}
		if($pparto == 'true'){
			$pfparto = DB::select(array(DB::expr('CONCAT(\'Servicio ID: \',(servicios.Id),\'\\\nCerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaParto, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFPARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'));
			if($idCerda != NULL){
				$pfparto->where('servicios.IdCerda', '=', $idCerda);
			}
			$pfparto->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC');
			$result = array_merge($result, $pfparto->execute()->as_array());
		}
		if($parto == 'true'){
			$parto = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=partos.IdCerda),\'\\\nVivos: \',partos.Vivos,\'\\\nMuertos: \',partos.Muertos,\'\\\nMomificados: \',partos.Momificados)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('partos')
			->join('cerdas')->on('cerdas.Id', '=', 'partos.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE('.$desde.')'));
			if($idCerda != NULL){
				$parto->where('partos.IdCerda', '=', $idCerda);
			}
			$parto->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC');
			$result = array_merge($result, $parto->execute()->as_array());
		}
		if($destete == 'true'){
			$destete = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=destetes.IdCerda),\'\\\nLechones: \',destetes.Lechones,\'\\\nPeso Total: \',destetes.PesoTotal)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::DESTETECOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'#404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('destetes')
			->join('cerdas')->on('cerdas.Id', '=', 'destetes.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE('.$desde.')'));
			if($idCerda != NULL){
				$destete->where('destetes.IdCerda', '=', $idCerda);
			}
			$destete->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC');
			$result = array_merge($result, $destete->execute()->as_array());
		}
		return $result;
	}
	
	/**********HOME RIGHT PANEL************/
	public static function getLastBirthsPercentage($amount){
		$data = DB::select('vivos','muertos','momificados')->from('partos')->order_by('Fecha', 'ASC')->limit($amount)->execute();
		$jsonarray = array();
		for($i=0; $i<count($data); $i++){
			$vivos = (int)$data[$i]['vivos'];
			$muertos = (int)$data[$i]['muertos'];
			$momif = (int)$data[$i]['momificados'];
			$porc = (int)(($vivos * 100) / ($vivos+$muertos+$momif));
			array_push($jsonarray, array((int)$i, $porc));
		}
		return $jsonarray;
	}
	
	public static function getLastBirthsData($amount){
		$data = DB::select(array(DB::expr('SUM(partos.vivos)'), 'vivos'),
			array(DB::expr('SUM(partos.muertos)'), 'muertos'),array(DB::expr('SUM(partos.momificados)'), 'momif'))
			->from('partos')
			->order_by('Fecha', 'ASC')->limit($amount)->execute()->as_array();
		return $data;
	}
	
	public static function getMaxMachosData(){
		$data = DB::select('Macho', DB::expr('ROUND(((count(Id) * 100)/(select count(Id) from servicios))) porc'))->from('servicios')	
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE_SUB(NOW(), INTERVAL 30 DAY)'))
			->group_by('Macho') 
			->order_by('Macho')->execute();
		$jsonarray = array();
		foreach($data as $d){
			$macho = $d['Macho'];
			$porc = (int)$d['porc'];
			array_push($jsonarray, array($macho, $porc));
		}
		return $jsonarray;
	}

	public static function getLastDestetesData($amount){
		$data = DB::select('Lechones')->from('destetes')->order_by('Fecha', 'ASC')->limit($amount)->execute();
		$jsonarray = array();
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, array((int)$i, (int)$data[$i]['Lechones']));
		}
		return $jsonarray;
	}
	
	/************** PARTOS *****************/
	public static function getPartoData($id){
		$data = DB::select(DB::expr('Vivos-Muertos-Momificados as Total'))->from('partos')->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->limit(20)->execute();
		$jsonarray = array();
		$pos = count($data);
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, array((int)$pos, (int)$data[$i]['Total']));
			$pos--;
		}
		return $jsonarray;
	}
	
	/************** LACTANCIAS *****************/
	public static function getLactanciaData($id, $idparto){
		$data = DB::select('Total')->from('lactanciaaudit')
		->where('IdCerda', '=', $id)->and_where('IdParto', '=', $idparto)
		->order_by('Fecha', 'DESC')->limit(20)->execute();
		$jsonarray = array();
		$pos = count($data);
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, array((int)$pos, (int)$data[$i]['Total']));
			$pos--;
		}
		return $jsonarray;
	}
	
	/************** DESTETES *****************/
	public static function getDesteteData($id){
		$data = DB::select('Lechones')->from('destetes')->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->limit(20)->execute();
		$jsonarray = array();
		$pos = count($data);
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, array((int)$pos, (int)$data[$i]['Lechones']));
			$pos--;
		}
		return $jsonarray;
	}
    
    /************** VENTAS *****************/
    public static function getVentasData(){
        $data = DB::select(array(DB::expr('CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha))'), 'Year'), 
            array(DB::expr('ROUND(SUM(v.Total), 2)'), 'Total'),
            DB::expr('(select ROUND(sum(vp.monto), 2) from ventapagos vp where vp.IdVenta = v.Id) as Pagos'))
            ->from(array('ventas', 'v'))
            ->where('v.Fecha', '>', DB::expr('DATE_SUB(NOW(), INTERVAL 12 MONTH)'))
            ->and_where('v.Deleted', '<>', 'Y')
            ->group_by(DB::expr('YEAR(v.Fecha)'))->group_by(DB::expr('MONTH(v.Fecha)'))
            ->order_by('v.Fecha', 'ASC')->execute();
        $jsonarray = array();
        for($i=0; $i<count($data); $i++){
            array_push($jsonarray, array('year' => $data[$i]['Year'], 'sales' => (float)$data[$i]['Total'], 'pay' => (float)$data[$i]['Pagos']));
        }
            
        return $jsonarray;
    }
    
    public static function getVentasTotData(){
        $jsonarray = Helpers_Venta::getTotals();
        return $jsonarray;
    }
}