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
	
	public static function getCerdaCalendarData($idCerda, $modif = 'true', $serv = 'true', $celo21 = 'true',
		$celo42 = 'true', $pparto = 'true', $parto = 'true', $destete = 'true', $desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)'){
		
		$result = array();
		if($modif == 'true'){
			$modif = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=cerdaaudit.IdCerda),\'\\\nEstado: \',(select Nombre from estados where estados.Id=cerdaaudit.IdEstado),\'\\\nPeso: \',cerdaaudit.Peso)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::MODIFCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('cerdaaudit')
			->where('cerdaaudit.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE('.$desde.')'))
			->where('cerdaaudit.IdCerda', '=', $idCerda)
			->order_by('Fecha', 'DESC')->order_by('Id', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $modif);
		}
		if($serv == 'true'){
			$servicios = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(FechaServicio, 'date'),
				array(DB::expr('\''.Helpers_Calendar::SERVCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'))
			->where('servicios.IdCerda', '=', $idCerda)
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $servicios);
		}
		if($celo21 == 'true'){
			$pfcelo21 = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo21, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO21COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'))
			->where('servicios.IdCerda', '=', $idCerda)
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfcelo21);
		}
		if($celo42 == 'true'){
			$pfcelo42 = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo42, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO42COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'))
			->where('servicios.IdCerda', '=', $idCerda)
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfcelo42);
		}
		if($pparto == 'true'){
			$pfparto = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaParto, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFPARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), '>=', DB::expr('DATE('.$desde.')'))
			->where('servicios.IdCerda', '=', $idCerda)
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfparto);
		}
		if($parto == 'true'){
			$parto = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=partos.IdCerda),\'\\\nVivos: \',partos.Vivos,\'\\\nMuertos: \',partos.Muertos,\'\\\nMomificados: \',partos.Momificados)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('partos')
			->join('cerdas')->on('cerdas.Id', '=', 'partos.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE('.$desde.')'))
			->where('partos.IdCerda', '=', $idCerda)
			->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $parto);
		}
		if($destete == 'true'){
			$destete = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=destetes.IdCerda),\'\\\nLechones: \',destetes.Lechones,\'\\\nPeso Total: \',destetes.PesoTotal)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::DESTETECOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('destetes')
			->join('cerdas')->on('cerdas.Id', '=', 'destetes.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), '>=', DB::expr('DATE('.$desde.')'))
			->where('destetes.IdCerda', '=', $idCerda)
			->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $destete);
		}
		return $result;
	}
	
	/**********HOME************/
	public static function getHomeCalendarData($altas = 'true', $serv = 'true', $celo21 = 'true',
		$celo42 = 'true', $pparto = 'true', $parto = 'true', $destete = 'true', $desde = 'DATE_SUB(NOW(), INTERVAL 365 DAY)', $hasta = 'Now()'){
		
		$result = array();
		if($altas == 'true'){
			$altas = DB::select(array(DB::expr('CONCAT(\'Cerda: \',cerdas.Numero,\'\\\nPeso: \',cerdas.Peso)'), 'title'), 
				array(Created_On, 'date'),
				array(DB::expr('\''.Helpers_Calendar::ALTACOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('cerdas')
			->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Created_On)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('Created_On', 'DESC')->order_by('Id', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $altas);
		}
		if($serv == 'true'){
			$servicios = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(FechaServicio, 'date'),
				array(DB::expr('\''.Helpers_Calendar::SERVCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $servicios);
		}
		if($celo21 == 'true'){
			$pfcelo21 = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo21, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO21COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfcelo21);
		}
		if($celo42 == 'true'){
			$pfcelo42 = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaCelo42, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFCELO42COLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfcelo42);
		}
		if($pparto == 'true'){
			$pfparto = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),\'\\\nMacho: \',servicios.Macho)'), 'title'), 
				array(ProbableFechaParto, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PFPARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('servicios')
			->join('cerdas')->on('cerdas.Id', '=', 'servicios.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(FechaServicio)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('FechaServicio', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $pfparto);
		}
		if($parto == 'true'){
			$parto = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=partos.IdCerda),\'\\\nVivos: \',partos.Vivos,\'\\\nMuertos: \',partos.Muertos,\'\\\nMomificados: \',partos.Momificados)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::PARTOCOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('partos')
			->join('cerdas')->on('cerdas.Id', '=', 'partos.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $parto);
		}
		if($destete == 'true'){
			$destete = DB::select(array(DB::expr('CONCAT(\'Cerda: \',(select Numero from cerdas where cerdas.Id=destetes.IdCerda),\'\\\nLechones: \',destetes.Lechones,\'\\\nPeso Total: \',destetes.PesoTotal)'), 'title'), 
				array(Fecha, 'date'),
				array(DB::expr('\''.Helpers_Calendar::DESTETECOLOR.'\''), 'backgroundColor'),
				array(DB::expr('\'404040\''), 'borderColor'),
				array(DB::expr('\'#303030\''), 'textColor'))
			->from('destetes')
			->join('cerdas')->on('cerdas.Id', '=', 'destetes.IdCerda')->where('cerdas.IdEstado', '<>', Helpers_Estado::getEndStatus()->Id)
			->where(DB::expr('DATE(Fecha)'), 'BETWEEN', DB::expr('DATE('.$desde.') AND DATE('.$hasta.')'))
			->order_by('Fecha', 'DESC')->order_by('IdCerda', 'DESC')
			->execute()->as_array();
			$result = array_merge($result, $destete);
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
		$data = DB::select(Total)->from('lactanciaaudit')
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
		$data = DB::select(Lechones)->from('destetes')->where('IdCerda', '=', $id)->order_by('Fecha', 'DESC')->limit(20)->execute();
		$jsonarray = array();
		$pos = count($data);
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, array((int)$pos, (int)$data[$i]['Lechones']));
			$pos--;
		}
		return $jsonarray;
	}
}