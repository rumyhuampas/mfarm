<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Convertidor {

   	const Void = ""; 
	const SP = " "; 
	const Dot = "."; 
	const Zero = "0"; 
	const Neg = "Menos"; 
	   
	public static function ValorEnLetras($x, $Moneda )  
	{ 
		$s=""; 
	    $Ent=""; 
	    $Frc=""; 
	    $Signo=""; 
	         
	    if(floatVal($x) < 0) 
	    	$Signo = Helpers_Convertidor::Neg . " "; 
	    else 
	    	$Signo = ""; 
	     
	    if(intval(number_format($x,2,'.','') )!=$x) //<- averiguar si tiene decimales 
	    	$s = number_format($x,2,'.',''); 
	    else 
	      	$s = number_format($x,2,'.',''); 
	        
	    $Pto = strpos($s, Helpers_Convertidor::Dot); 
	         
	    if ($Pto === false) 
	    { 
	      	$Ent = $s; 
	      	$Frc = Helpers_Convertidor::Void; 
	    } 
	    else 
	    { 
	      	$Ent = substr($s, 0, $Pto ); 
	      	$Frc =  substr($s, $Pto+1); 
	    } 
	
	    if($Ent == Helpers_Convertidor::Zero || $Ent == Helpers_Convertidor::Void) 
	       	$s = "Cero "; 
	    elseif( strlen($Ent) > 7) 
	    { 
	       	$s = Helpers_Convertidor::SubValLetra(intval( substr($Ent, 0,  strlen($Ent) - 6))) .  
	             "Millones " . Helpers_Convertidor::SubValLetra(intval(substr($Ent,-6, 6))); 
	    } 
	    else 
	    { 
	      	$s = Helpers_Convertidor::SubValLetra(intval($Ent)); 
	    } 
	
	    if (substr($s,-9, 9) == "Millones " || substr($s,-7, 7) == "Mill�n ") 
	       	$s = $s . "de "; 
	
	    $s = $s . $Moneda; 
	
	    if($Frc != Helpers_Convertidor::Void) 
	    { 
	       	$s = $s . " CON " . $Frc. "/100"; 
	       	//$s = $s . " " . $Frc . "/100"; 
	    } 
	    $letrass=$Signo . $s . " M.N."; 
	    //return ($Signo . $s . " M.N.");
	    return ($Signo . $s ); 
	    
	} 
	
	
	public static function SubValLetra($numero)  
	{ 
	    $Ptr=""; 
	    $n=0; 
	    $i=0; 
	    $x =""; 
	    $Rtn =""; 
	    $Tem =""; 
	
	    $x = trim("$numero"); 
	    $n = strlen($x); 
	
	    $Tem = Helpers_Convertidor::Void; 
	    $i = $n; 
	     
	    while( $i > 0) 
	    { 
	    	$Tem = Helpers_Convertidor::Parte(intval(substr($x, $n - $i, 1).str_repeat(Helpers_Convertidor::Zero, $i - 1 ))); 
	      	If( $Tem != "Cero" ) 
	        	$Rtn .= $Tem . Helpers_Convertidor::SP; 
	       	$i = $i - 1; 
	    } 
	
	     
	    //--------------------- GoSub FiltroMil ------------------------------ 
	    $Rtn=str_replace(" Mil Mil", " Un Mil", $Rtn ); 
	    while(1) 
	    { 
	       	$Ptr = strpos($Rtn, "Mil ");        
	       	If(!($Ptr===false)) 
	       	{ 
	        	If(! (strpos($Rtn, "Mil ",$Ptr + 1) === false )) 
	            	Helpers_Convertidor::ReplaceStringFrom($Rtn, "Mil ", "", $Ptr); 
	          	Else 
	           		break; 
	       	} 
	       	else break; 
	    } 
	
	    //--------------------- GoSub FiltroCiento ------------------------------ 
	    $Ptr = -1; 
	    do{ 
	       	$Ptr = strpos($Rtn, "Cien ", $Ptr+1); 
	       	if(!($Ptr===false)) 
	       	{ 
	        	$Tem = substr($Rtn, $Ptr + 5 ,1); 
	          	if( $Tem == "M" || $Tem == Helpers_Convertidor::Void) 
					; 
	          	else           
	            	Helpers_Convertidor::ReplaceStringFrom($Rtn, "Cien", "Ciento", $Ptr); 
	       } 
	    }while(!($Ptr === false)); 
	
	    //--------------------- FiltroEspeciales ------------------------------ 
	    $Rtn=str_replace("Diez Un", "Once", $Rtn ); 
	    $Rtn=str_replace("Diez Dos", "Doce", $Rtn ); 
	    $Rtn=str_replace("Diez Tres", "Trece", $Rtn ); 
	    $Rtn=str_replace("Diez Cuatro", "Catorce", $Rtn ); 
	    $Rtn=str_replace("Diez Cinco", "Quince", $Rtn ); 
	    $Rtn=str_replace("Diez Seis", "Dieciseis", $Rtn ); 
	    $Rtn=str_replace("Diez Siete", "Diecisiete", $Rtn ); 
	    $Rtn=str_replace("Diez Ocho", "Dieciocho", $Rtn ); 
	    $Rtn=str_replace("Diez Nueve", "Diecinueve", $Rtn ); 
	    $Rtn=str_replace("Veinte Un", "Veintiun", $Rtn ); 
	    $Rtn=str_replace("Veinte Dos", "Veintidos", $Rtn ); 
	    $Rtn=str_replace("Veinte Tres", "Veintitres", $Rtn ); 
	    $Rtn=str_replace("Veinte Cuatro", "Veinticuatro", $Rtn ); 
	    $Rtn=str_replace("Veinte Cinco", "Veinticinco", $Rtn ); 
	    $Rtn=str_replace("Veinte Seis", "Veintise�s", $Rtn ); 
	    $Rtn=str_replace("Veinte Siete", "Veintisiete", $Rtn ); 
	    $Rtn=str_replace("Veinte Ocho", "Veintiocho", $Rtn ); 
	    $Rtn=str_replace("Veinte Nueve", "Veintinueve", $Rtn ); 
	
	    //--------------------- FiltroUn ------------------------------ 
	    If(substr($Rtn,0,1) == "M") $Rtn = "Un " . $Rtn; 
	    //--------------------- Adicionar Y ------------------------------ 
	    for($i=65; $i<=88; $i++) 
	    { 
	      	If($i != 77) 
	        	$Rtn=str_replace("a " . Chr($i), "* y " . Chr($i), $Rtn); 
	    } 
	    $Rtn=str_replace("*", "a" , $Rtn); 
	    return($Rtn); 
	} 
	
	
	public static function ReplaceStringFrom(&$x, $OldWrd, $NewWrd, $Ptr) 
	{ 
	  	$x = substr($x, 0, $Ptr)  . $NewWrd . substr($x, strlen($OldWrd) + $Ptr); 
	} 
	
	
	public static function Parte($x) 
	{ 
	    $Rtn=''; 
	    $t=''; 
	    $i=''; 
	    Do 
	    { 
	     	switch($x) 
	      	{ 
		         Case 0:  $t = "Cero";break; 
		         Case 1:  $t = "Un";break; 
		         Case 2:  $t = "Dos";break; 
		         Case 3:  $t = "Tres";break; 
		         Case 4:  $t = "Cuatro";break; 
		         Case 5:  $t = "Cinco";break; 
		         Case 6:  $t = "Seis";break; 
		         Case 7:  $t = "Siete";break; 
		         Case 8:  $t = "Ocho";break; 
		         Case 9:  $t = "Nueve";break; 
		         Case 10: $t = "Diez";break; 
		         Case 20: $t = "Veinte";break; 
		         Case 30: $t = "Treinta";break; 
		         Case 40: $t = "Cuarenta";break; 
		         Case 50: $t = "Cincuenta";break; 
		         Case 60: $t = "Sesenta";break; 
		         Case 70: $t = "Setenta";break; 
		         Case 80: $t = "Ochenta";break; 
		         Case 90: $t = "Noventa";break; 
		         Case 100: $t = "Cien";break; 
		         Case 200: $t = "Doscientos";break; 
		         Case 300: $t = "Trescientos";break; 
		         Case 400: $t = "Cuatrocientos";break; 
		         Case 500: $t = "Quinientos";break; 
		         Case 600: $t = "Seiscientos";break; 
		         Case 700: $t = "Setecientos";break; 
		         Case 800: $t = "Ochocientos";break; 
		         Case 900: $t = "Novecientos";break; 
		         Case 1000: $t = "Mil";break; 
		         Case 1000000: $t = "Mill�n";break; 
			} 
	
	      	If($t == Helpers_Convertidor::Void) 
	      	{ 
		        $i = $i + 1; 
		        $x = $x / 1000; 
		      	If($x== 0) $i = 0; 
	      	} 
	      	else 
				break; 
	            
	    }while($i != 0); 
	    
	    $Rtn = $t; 
	    Switch($i) 
	    { 
	    	Case 0: $t = Helpers_Convertidor::Void;break; 
	       	Case 1: $t = " Mil";break; 
	       	Case 2: $t = " Millones";break; 
	       	Case 3: $t = " Billones";break; 
	    } 
	    return($Rtn . $t); 
	} 

}