<?php defined('SYSPATH') or die('No direct script access.');

class Controller_HeaderBar extends Controller {

	public function action_getTodayNewCerdas(){
		$newcerdas = Helpers_Cerda::getAltas('Now()');
		echo '<ul class="msglist">';
		foreach($newcerdas as $newcerda){
			echo '<li class="newcerda">';
		        echo '<div class="msg">';
		            echo '<p class="title">Alta de cerda</p>';
		            echo '<p>Cerda: '.$newcerda->Numero.' - Peso: '.$newcerda->Peso.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		echo '</ul>';		
	}
	
	public function action_getTodayServicios(){
		$servicios = Helpers_Cerda::getServicios(NULL, 'Now()');
		echo '<ul class="msglist">';
		foreach($servicios as $servicio){
			echo '<li class="pipette">';
		        echo '<div class="msg">';
		            echo '<p class="title">Servicio</p>';
		            echo '<p>Cerda: '.$servicio->Numero.' - Macho: '.$servicio->Macho.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		echo '</ul>';		
	}
	
	public function action_getTodayPartos(){
		$partos = Helpers_Cerda::getPartos(NULL, 'Now()');
		echo '<ul class="msglist">';
		foreach($partos as $parto){
			echo '<li class="stork">';
		        echo '<div class="msg">';
		            echo '<p class="title">Parto</p>';
		            echo '<p>Cerda: '.$parto->Numero.' - Vivos: '.$parto->Vivos.' - Muertos: '.$parto->Muertos.' - Momificados: '.$parto->Momificados.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		echo '</ul>';		
	}
	
	public function action_getTodayDestetes(){
		$destetes = Helpers_Cerda::getDestetes(NULL, 'Now()');
		echo '<ul class="msglist">';
		foreach($destetes as $destete){
			echo '<li class="babybottle">';
		        echo '<div class="msg">';
		            echo '<p class="title">Destete</p>';
		            echo '<p>Cerda: '.$destete->Numero.' - Lechones: '.$destete->Lechones.' - Dias: '.$destete->Dias.' - Peso total: '.$destete->PesoTotal.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		echo '</ul>';		
	}
	
	public function action_getTodayCelos(){
		$celos21 = Helpers_Cerda::getCelos(NULL,NULL,true,false);
		$celos42 = Helpers_Cerda::getCelos(NULL,NULL,false,true);
		echo '<ul class="msglist">';
		foreach($celos21 as $celo21){
			echo '<li class="calendar">';
		        echo '<div class="msg">';
		            echo '<p class="title">Probable celo 21 dias</p>';
		            echo '<p>Cerda: '.$celo21->Numero.' - Macho: '.$celo21->Macho.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		foreach($celos42 as $celo42){
			echo '<li class="calendar">';
		        echo '<div class="msg">';
		            echo '<p class="title">Probable celo 42 dias</p>';
		            echo '<p>Cerda: '.$celo42->Numero.' - Macho: '.$celo42->Macho.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		echo '</ul>';		
	}
	
	public function action_getTodayProbParto(){
		$probpartos = Helpers_Cerda::getProbPartos(NULL,NULL);
		echo '<ul class="msglist">';
		foreach($probpartos as $probparto){
			echo '<li class="stork">';
		        echo '<div class="msg">';
		            echo '<p class="title">Probable parto</p>';
		            echo '<p>Cerda: '.$probparto->Numero.' - Macho: '.$probparto->Macho.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		echo '</ul>';		
	}
}
