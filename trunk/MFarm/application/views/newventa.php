<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/datepicker.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/custom/newventa.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'ventas', 'action' => 'new')); ?>>Nueva venta</a></li>
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'ventas', 'action' => 'history')); ?>>Historico de ventas</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Nueva venta</span></h2>
                    </div><!--contenttitle-->
                    
                    <br clear="all" />
                	<ul class="formwidgetlist">
						<li><a href="<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmclientes', 'action' => 'new')); ?>" 
							id="clientelink" class="add">Nuevo cliente</a></li>
					</ul>
					<br clear="all" />
					
                    <?php
                    echo Form::open('ventas/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcliente'));
                    	echo '<p>';
							echo Form::label('cuildnisearch', 'CUIL / DNI');
							echo '<span class="field">';
							echo Form::input('cuildnisearch', '', array('type' => 'text', 'id' => 'cuildnisearch', 'class' => 'smallinput'));
                            echo '</span>';
						echo '</p>';
						echo '<p>';
							echo Form::label('namesearch', 'Nombre');
							echo '<span class="field">';
							echo Form::input('namesearch', '', array('type' => 'text', 'id' => 'namesearch', 'class' => 'smallinput'));
                            echo '</span>';
						echo '</p>';
						echo '<p class="stdformbutton">';
                        	echo Form::button('btnsearch', 'Buscar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();

					if(isset($clientes)){
						//<div class="widgetcontent padding0">
						echo "<div class='contenttitle'>";
		                	echo "<h2 class='table'><span>Seleccionar cliente</span></h2>";
		                echo "</div><!--contenttitle-->";
                            echo "<ul class='activitylist'>";
								foreach($clientes as $c){
                            		echo "<li class='user'><a href='#' name='clientresult' clientcuil='".$c->CUIL."'><strong>".$c->Nombre."</strong></a></li>";
								}
                            echo "</ul>";
                        //</div>
                        echo "<br clear='all' />";
					} 

					if(isset($cliente) && $cliente->loaded()){
						echo Form::open('ventas/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewventa'));
							//echo Form::hidden('idcliente', $cliente->IdCliente);
	                    	echo '<p>';
								echo Form::label('cuil', 'CUIL');
								echo '<span class="field">';
								echo Form::input('cuil', $cliente->CUIL, 
									array('type' => 'text', 'id' => 'cuil', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('name', 'Nombre');
								echo '<span class="field">';
								echo Form::input('name', $cliente->Nombre, 
									array('type' => 'text', 'id' => 'name', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('date', 'Fecha');
								echo '<span class="field">';
									echo Form::input('date', date("d-m-Y H:i:s"), array('id' => 'fielddate'));
								echo '</span>';
								echo '<div class="formwidgetbox" style="width: 300px">';
			                        echo '<div class="title"><h2 class="calendar"><span>Calendario</span></h2></div>';
			                        echo '<div class="widgetcontent padding0">';
			                            echo '<div id="datepicker"></div>';
			                        echo '</div><!--widgetcontent-->';
			                    echo '</div><!--widgetbox-->';
							echo '</p>';
							echo '<p>';
								echo Form::label('total', 'Total');
								echo '<span class="field">';
									echo Form::input('total', '', array('type' => 'text', 'id' => 'total', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								echo '<span class="stdbtn btn_black" id="btnsave">Guardar</span>';
								//echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
	                        echo '</p>';
	                    echo Form::close();
						?>
						
						<div class="contenttitle">
		                	<h2 class="form"><span>Agregar producto</span></h2>
		                </div><!--contenttitle-->
		                <?php
		                echo Form::open('ventas/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewventa'));
							echo '<p>';
								echo Form::label('cant', 'Cantidad');
								echo '<span class="field">';
								echo Form::input('cant', '', 
									array('type' => 'text', 'id' => 'cant', 'class' => 'smallinput'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('det', 'Detalle');
								echo '<span class="field">';
								echo Form::input('det', '', 
									array('type' => 'text', 'id' => 'det', 'class' => 'smallinput'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('punit', 'Precio unitario');
								echo '<span class="field">';
								echo Form::input('punit', '', 
									array('type' => 'text', 'id' => 'punit', 'class' => 'smallinput'));
								echo '</span>';
	                        echo '</p>';
	                        echo '<p>';
								echo Form::label('totalprod', 'Total');
								echo '<span class="field">';
									echo Form::input('totalprod', '', array('type' => 'text', 'id' => 'totalprod', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							
							echo '<p class="stdformbutton">';
								echo '<span class="stdbtn btn_black" id="btnadd">Agregar</span>';
								//echo Form::button('btnadd', 'Agregar', array('class' => 'submit radius2'));
	                        echo '</p>';
						echo Form::close();
		                ?>
		                
						
						<div class="contenttitle radiusbottom0">
			            	<h2 class="table"><span>Productos</span></h2>
			            </div><!--contenttitle-->
			            <table cellpadding="0" cellspacing="0" border="0" id="tableprod" class="stdtable stdtablecb">
			            	<colgroup>
			                	<col class="con0" />
			                    <col class="con1" />
			                </colgroup>
			                <thead>
			                	<tr>
			                    	<th class="head0">Cant.</th>
			                        <th class="head1" width="50%">Detalle</th>
			                        <th class="head0">P. Unit.</th>
			                        <th class="head1">Total</th>
			                        <th class="head1">&nbsp;</th>
			                    </tr>
			                </thead>
			                <tfoot>
			                    <tr>
			                    	<th class="head0"></th>
			                        <th class="head0" width="50%"></th>
			                        <th class="head1">Total</th>
			                        <th class="head1"></th>
			                        <th class="head1">&nbsp;</th>
			                    </tr>
			                </tfoot>
			                <tbody>
			                </tbody>
			            </table>
		                
		               	<br clear="all" />
	               	
					<?php
	                } //isset($cerda)
					?>
					
					<div class="contenttitle radiusbottom0">
		            	<h2 class="table"><span>Ventas activas</span></h2>
		            </div><!--contenttitle-->
		            <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		            	<colgroup>
		                	<col class="con0" />
		                    <col class="con1" />
		                </colgroup>
		                <thead>
		                	<tr>
		                    	<th class="head0">ID</th>
		                    	<th class="head1">Fecha</th>
		                        <th class="head0">CUIL</th>
		                        <th class="head1">Nombre</th>
		                        <th class="head0">Total</th>
		                        <th class="head1">Saldo</th>
		                        <th class="head0">&nbsp;</th>
		                    </tr>
		                </thead>
		                <tfoot>
		                    <tr>
		                    	<th class="head0">ID</th>
		                    	<th class="head1">Fecha</th>
		                        <th class="head0">CUIL</th>
		                        <th class="head1">Nombre</th>
		                        <th class="head0">Total</th>
		                        <th class="head1">Saldo</th>
		                        <th class="head0">&nbsp;</th>
		                    </tr>
		                </tfoot>
		                <tbody>
		                <?php
                    		if(isset($ventas)){ 
	                    		foreach($ventas as $venta){
	                    			$cliente = ORM::factory('cliente', $venta->IdCliente);
		                    		echo '<tr>';
			                            echo '<td>'.$venta->Id.'</td>';
										echo '<td>'.$venta->Fecha.'</td>';
			                            echo '<td>'.$cliente->CUIL.'</td>';
			                            echo '<td>'.$cliente->Nombre.'</td>';
										echo '<td>$ '.$venta->Total.'</td>';
										echo '<td>$ '.Helpers_VentaPago::getSaldoVenta($venta->Id).'</td>';
										echo '<td class="center">';
											echo Form::open('ventas/printfactura', array('method' => 'POST', 'target' => '_blank', 'id' => 'formprintfactura'.$venta->Id));
												echo Form::hidden('ventaid', $venta->Id);
												echo '<a href="#" name="reprint">Imprimir factura</a>';
											echo Form::close();
			                            	echo '<a href='.URL::base().Route::get('default')
			                            		->uri(array('controller' => 'ventas', 'action' => 'addpago', 'id' => $venta->Id)).'>
			                            		Agregar pago</a>';
										echo '</td>';
			                        echo '</tr>';
								}
                    		}
							if(isset($_ventaid)){
								echo Form::hidden('_ventaid', $_ventaid);
							}
						?>
		                </tbody>
		            </table>
	                
	               	<br clear="all" />
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', '_copyright'); ?>
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>