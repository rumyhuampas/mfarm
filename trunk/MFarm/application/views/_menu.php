<div class="mainleft">
  	<div class="mainleftinner">
    
      	<div class="leftmenu">
    		<ul>
            	<li id="0" menuid=<?php echo $menuid ?>><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home')); ?> class="dashboard"><span>Inicio</span></a></li>
                <li id="1" menuid=<?php echo $menuid ?>><a href="#" class="pig menudrop"><span>Cerdas</span></a>
                	<ul>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmcerdas', 'action' => 'new')); ?>><span>Nueva cerda</span></a></li>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmcerdas', 'action' => 'edit')); ?>><span>Modificar cerda</span></a></li>
                    </ul>
                </li>
                <li id="2" menuid=<?php echo $menuid ?>><a href="#" class="editor menudrop"><span>ABM</span></a>
                	<ul>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmestados', 'action' => 'new')); ?>><span>ABM de Estados</span></a></li>
                		<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmservicios', 'action' => 'new')); ?>><span>ABM de Servicios</span></a></li>
                		<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmpartos', 'action' => 'new')); ?>><span>ABM de Partos</span></a></li>
                		<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmdestetes', 'action' => 'new')); ?>><span>ABM de Destetes</span></a></li>
                    </ul>
                </li>
                <li id="3" menuid=<?php echo $menuid ?>><a href="#" class="editor menudrop"><span>Reportes</span></a>
                	<ul>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'reportes', 'action' => 'servicios')); ?>><span>Servicios</span></a></li>
                    </ul>
                </li>
            </ul>
                
        </div><!--leftmenu-->
    	<div id="togglemenuleft"><a></a></div>
    </div><!--mainleftinner-->
</div><!--mainleft-->