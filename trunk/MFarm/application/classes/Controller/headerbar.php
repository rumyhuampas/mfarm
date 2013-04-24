<?php defined('SYSPATH') or die('No direct script access.');

class Controller_HeaderBar extends Controller {

	public function action_getTodayEvents(){
		$servicios = Helpers_DB::getTodayServicios();
		$partos = Helpers_DB::getTodayPartos();
		$destetes = Helpers_DB::getTodayDestetes();
		echo '<ul class="msglist">';
		foreach($servicios as $servicio){
			echo '<li class="pipette">';
		        echo '<div class="msg">';
		            echo '<p class="title">Servicio</p>';
		            echo '<p>Cerda: '.$servicio->Numero.' - Macho: '.$servicio->Macho.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
		foreach($partos as $parto){
			echo '<li class="stork">';
		        echo '<div class="msg">';
		            echo '<p class="title">Parto</p>';
		            echo '<p>Cerda: '.$parto->Numero.' - Vivos: '.$parto->Vivos.' - Muertos: '.$parto->Muertos.' - Momificados: '.$parto->Momificados.'</p>';
		        echo '</div>';
		    echo '</li>';
		}
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
	
}
