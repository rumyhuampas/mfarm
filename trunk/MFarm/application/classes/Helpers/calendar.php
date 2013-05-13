<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Calendar {
		
	const ALTACOLOR = '#FF9900';
	const MODIFCOLOR = '#909090';
	const SERVCOLOR = '#00ACE9';
	const PFCELO21COLOR = '#DB5800';
	const PFCELO42COLOR = '#D43F3F';
	const PFPARTOCOLOR = '#6A9A1F';
	const PARTOCOLOR = '#FFD800';
	const DESTETECOLOR = '#6633FF';
	
	public static function getNewCerdaColors(){
		return array('backgroundColor' => '#FF9900', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function getModificationColors(){
		return array('backgroundColor' => '#909090', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function getServicioColors(){
		return array('backgroundColor' => '#00ACE9', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function getProbCelo21Colors(){
		return array('backgroundColor' => '#DB5800', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function getProbCelo42Colors(){
		return array('backgroundColor' => '#D43F3F', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function getProbPartoColors(){
		return array('backgroundColor' => '#6A9A1F', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function getPartoColors(){
		return array('backgroundColor' => '#FFD800', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function getDesteteColors(){
		return array('backgroundColor' => '#6633FF', 'borderColor' => '#404040', 'textColor' => '#303030');
	}
	
	public static function get21daysperiod(){
		return Helpers_Calendar::diasaseg(21);	
	}
	
	public static function get42daysperiod(){
		return Helpers_Calendar::diasaseg(42);	
	}
	
	public static function getbirthperiod(){
		$dias = (3 * 31) + (3 * 7) + (3);
		return Helpers_Calendar::diasaseg($dias);	
	}
	
	public static function diasaseg($dias){
		return $dias*24*60*60;	
	}
}