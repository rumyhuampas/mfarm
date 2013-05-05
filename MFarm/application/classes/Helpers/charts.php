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