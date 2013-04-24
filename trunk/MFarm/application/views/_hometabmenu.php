<ul class="widgetlist">
	<li><a href=<?php echo URL::base().Route::get('default')
		->uri(array('controller' => 'abmcerdas', 'action' => 'new')); ?> class="add">Nueva cerda</a></li>
	<li><a href=<?php echo URL::base().Route::get('default')
		->uri(array('controller' => 'abmcerdas', 'action' => 'edit')); ?> class="editor">Modificar cerda</a></li>
    <li><a href=<?php echo URL::base().Route::get("default")
		->uri(array("controller" => "abmservicios", "action" => "new")); ?> class="pipeta">Alta de servicio</a></li>
	<li><a href=<?php echo URL::base().Route::get("default")
		->uri(array("controller" => "abmpartos", "action" => "new")); ?> class="stork">Agregar parto</a></li>
	<li><a href=<?php echo URL::base().Route::get("default")
		->uri(array("controller" => "abmdestetes", "action" => "new")); ?> class="babybottle">Agregar destete</a></li>
</ul>