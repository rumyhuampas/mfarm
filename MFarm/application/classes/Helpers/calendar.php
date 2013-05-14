<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Calendar {
		
	const ALTACOLOR = '#3366CC';//'#FF9900';
	const MODIFCOLOR = '#909090';
	const SERVCOLOR = '#D43F3F';//#00ACE9';
	const PFCELO21COLOR = '#FF9933';
	const PFCELO42COLOR = '#9933FF';
	const PFPARTOCOLOR = '#6A9A1F';
	const PARTOCOLOR = '#FFD800';
	const DESTETECOLOR = '#FF66FF';
	const BORDERCOLOR = '#404040';
	const TEXTCOLOR = '#303030';
	
	public static function getNewCerdaColors(){
		return array('backgroundColor' => Helpers_Calendar::ALTACOLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
	}
	
	public static function getModificationColors(){
		return array('backgroundColor' => Helpers_Calendar::MODIFCOLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
	}
	
	public static function getServicioColors(){
		return array('backgroundColor' => Helpers_Calendar::SERVCOLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
	}
	
	public static function getProbCelo21Colors(){
		return array('backgroundColor' => Helpers_Calendar::PFCELO21COLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
	}
	
	public static function getProbCelo42Colors(){
		return array('backgroundColor' => Helpers_Calendar::PFCELO42COLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
	}
	
	public static function getProbPartoColors(){
		return array('backgroundColor' => Helpers_Calendar::PFPARTOCOLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
	}
	
	public static function getPartoColors(){
		return array('backgroundColor' => Helpers_Calendar::PARTOCOLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
	}
	
	public static function getDesteteColors(){
		return array('backgroundColor' => Helpers_Calendar::DESTETECOLOR, 'borderColor' => Helpers_Calendar::BORDERCOLOR, 'textColor' => Helpers_Calendar::TEXTCOLOR);
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