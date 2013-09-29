<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Utils {
	public static function getDayWeek(){
		$week_number = 7;
		$year = 2013;
		//echo date('m/d/Y', strtotime("2013-W01-2"));
		$ddate = "2013-12-29";
        $duedt = explode("-", $ddate);
        $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
        $week  = (int)date('W', $date);
        echo "Weeknummer: " . $week;
         
         /*for($day=1; $day<=7; $day++)
		{
		    		        
		    //echo date('m/d/Y', strtotime($year."W".$week_number.$day))."\n";
		}*/
	}
	
	public static function strContains($str, $val){
		return strpos($str, $val) !== false;
	}
}