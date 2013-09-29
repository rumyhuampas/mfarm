<?php
if(Helpers_Utils::strContains($_userprofile, Helpers_Const::UPADMIN) ||
	Helpers_Utils::strContains($_userprofile, Helpers_Const::UPGRANJA)){
?>
<ul class="widgetlist">
	<li><a href=<?php echo URL::base().Route::get('default')
		->uri(array('controller' => 'abmcerdas', 'action' => 'new')); ?> class="add">Nueva cerda</a></li>
	<li><a href=<?php echo URL::base().Route::get('default')
		->uri(array('controller' => 'abmcerdas', 'action' => 'edit')); ?> class="editor">Modif. cerda</a></li>
    <li><a href=<?php echo URL::base().Route::get("default")
		->uri(array("controller" => "abmservicios", "action" => "new")); ?> class="pipeta">Nuevo servicio</a></li>
	<li><a href=<?php echo URL::base().Route::get("default")
		->uri(array("controller" => "abmpartos", "action" => "new")); ?> class="stork">Nuevo parto</a></li>
	<li><a href=<?php echo URL::base().Route::get("default")
		->uri(array("controller" => "abmdestetes", "action" => "new")); ?> class="babybottle">Nuevo destete</a></li>
</ul>
<?php
}
?>