<div class="mainleft">
  	<div class="mainleftinner">
    
      	<div class="leftmenu">
    		<ul>
            	<li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $menuid ?>><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home')); ?> class="dashboard"><span>Inicio</span></a></li>
                <li id=<?php echo Helpers_Const::MENUCERDASID; ?> menuid=<?php echo $menuid ?>><a href="#" class="pig menudrop"><span>Cerdas</span></a>
                	<ul>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmcerdas', 'action' => 'new')); ?>><span>Nueva cerda</span></a></li>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmcerdas', 'action' => 'edit')); ?>><span>Modificar cerda</span></a></li>
                    </ul>
                </li>
                <li id=<?php echo Helpers_Const::MENUABMID; ?> menuid=<?php echo $menuid ?>><a href="#" class="editor menudrop"><span>ABM</span></a>
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
                <li id=<?php echo Helpers_Const::MENULACTANCIAID; ?> menuid=<?php echo $menuid ?>><a href="#" class="babybottle menudrop"><span>Lactancia</span></a>
                	<ul>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'abmlactancias', 'action' => 'new')); ?>><span>Nuevo registro</span></a></li>
                    </ul>
                </li>
                <li id=<?php echo Helpers_Const::MENUREPORTESID; ?> menuid=<?php echo $menuid ?>><a href="#" class="pdf menudrop"><span>Reportes</span></a>
                	<ul>
            			<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'reportes', 'action' => 'reportesporfecha')); ?>><span>Por fecha</span></a></li>
                		<li><a href=<?php echo URL::base().Route::get('default')
                			->uri(array('controller' => 'reportes', 'action' => 'reportesporcerda')); ?>><span>Por cerda</span></a></li>
                    </ul>
                </li>
            </ul>
                
        </div><!--leftmenu-->
    	<div id="togglemenuleft"><a></a></div>
    </div><!--mainleftinner-->
</div><!--mainleft-->