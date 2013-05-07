<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Charts {
	
	/***********ABM CERDA**********/
	public static function getCerdaPesoData($id){
		$data = DB::select('Fecha', 'Peso')->from('cerdaaudit')->where('IdCerda', '=', $id)->order_by('Fecha')->limit(20)->execute();
		$jsonarray = array();
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, array(date('Y-m-d', strtotime($data[$i]['Fecha'])), (int)$data[$i]['Peso']));
		}
		return $jsonarray;
	}
	
	/**********HOME************/
	public static function getHomeCalendarData($altas = 'true', $serv = 'true', $celo21 = 'true',
		$celo42 = 'true', $pparto = 'true', $parto = 'true', $desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)', $hasta = 'Now()'){
		
		$result = array();
		if($altas == 'true'){
			$altas = DB::select(array(DB::expr('CONCAT(\'Cerda: \','.Numero.',\'\\\nPeso: \','.Peso.')'), 'title'), 
				array(Created_On, 'date'),
				array(DB::expr('\''.Helpers_Calendar::ALTACOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('cerdas')
			->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Created_On)'), 'BETWEEN', DB::expr('DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now())'))
			->order_by('Created_On', 'DESC')->order_by('Id', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $altas);
		}
		if($serv == 'true'){
			$servicios = DB::select(array(DB::expr('CONCAT(\'Cerda: \',servicios.Id,\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(FechaServicio, 'date'),
				array(DB::expr('\''.Helpers_Calendar::SERVCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now())'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $servicios);
		}
		if($celo21 == 'true'){
			$pfcelo21 = DB::select(array(DB::expr('CONCAT(\'Cerda: \',servicios.Id,\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo21, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO21COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now())'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfcelo21);
		}
		if($celo42 == 'true'){
			$pfcelo42 = DB::select(array(DB::expr('CONCAT(\'Cerda: \',servicios.Id,\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo42, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO42COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now())'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfcelo42);
		}
		if($pparto == 'true'){
			$pfparto = DB::select(array(DB::expr('CONCAT(\'Cerda: \',servicios.Id,\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaParto, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFPARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now())'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfparto);
		}
		if($parto == 'true'){
			$parto = DB::select(array(DB::expr('CONCAT(\'Cerda: \',partos.Id,\'\\\nVivos: \',partos.Vivos,\'\\\nMuertos: \',partos.Muertos,\'\\\nMomificados: \',partos.Momificados)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('partos')
			->join('cerdas')->on('cerdas.Id', '=', 'partos.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), 'BETWEEN', DB::expr('DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now())'))
			->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $parto);
		}
		return $result;
	}
	
	public static function getLastBirthsPercentage($amount){
		$data = ORM::factory('parto')->order_by('Fecha', 'ASC')->limit($amount)->find_all();
		$jsonarray = array();
		$i=0;
		foreach($data as $d){
			$vivos = (int)$d->Vivos;
			$muertos = (int)$d->Muertos;
			$momif = (int)$d->Momificados;
			$porc = (int)(($vivos * 100) / ($vivos+$muertos+$momif));
			array_push($jsonarray, array((int)$i, $porc));
			$i++;
		}
		return $jsonarray;
	}
	
	public static function getLastBirthsData($amount){
		$data = ORM::factory('parto')->order_by('Fecha', 'ASC')->limit($amount)->find_all();
		$vivos = 0;
		$muertos = 0;
		$momif = 0;
		foreach($data as $d){
			$vivos = $vivos + (int)$d->Vivos;
			$muertos = $muertos + (int)$d->Muertos;
			$momif = $momif + (int)$d->Momificados;
		}
		$jsonarray = array('vivos' => $vivos, 'muertos' => $muertos, 'momif' => $momif);
		return $jsonarray;
	}
	
	public static function getMaxMachosData(){
		$data = DB::select('Id', 'Macho', DB::expr('COUNT(Id) as cnt'))->from('servicios')	
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE_SUB(NOW(), INTERVAL 30 DAY)'))
			->group_by('Macho') 
			->order_by('cnt', 'DESC')->order_by('Macho')->execute();
		$jsonarray = array();
		$total=0;
		foreach($data as $d){
			$total = $total + (int)$d['cnt'];
		}
		foreach($data as $d){
			$macho = $d['Macho'];
			$cnt = (int)$d['cnt'];
			$porc = (int)(($cnt * 100) / $total);
			array_push($jsonarray, array($macho, $porc));
		}
		return $jsonarray;
	}

	public static function getLastDestetesData($amount){
		$data = ORM::factory('destete')->order_by('Fecha', 'ASC')->limit($amount)->find_all();
		$jsonarray = array();
		$i=0;
		foreach($data as $d){
			array_push($jsonarray, array((int)$i, (int)$d->Lechones));
			$i++;
		}
		return $jsonarray;
	}
}