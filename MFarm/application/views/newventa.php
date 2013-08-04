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
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Nueva venta</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php
                    echo Form::open('ventas/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcliente'));
                    	echo '<p>';
							echo Form::label('dnisearch', 'Dni');
							echo '<span class="field">';
							echo Form::input('dnisearch', '', array('type' => 'text', 'id' => 'dnisearch', 'class' => 'smallinput'));
                            echo '</span>';
						echo '</p>';
						echo '<p class="stdformbutton">';
                        	echo Form::button('btnsearch', 'Buscar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();

					if(isset($cliente) && $cliente->loaded()){
						echo Form::open('ventas/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewventa'));
							//echo Form::hidden('idcliente', $cliente->IdCliente);
	                    	echo '<p>';
								echo Form::label('dni', 'DNI');
								echo '<span class="field">';
								echo Form::input('dni', $cliente->DNI, 
									array('type' => 'text', 'id' => 'dni', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
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
		            	<h2 class="table"><span>Ventas</span></h2>
		            </div><!--contenttitle-->
		            <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		            	<colgroup>
		                	<col class="con0" />
		                    <col class="con1" />
		                </colgroup>
		                <thead>
		                	<tr>
		                    	<th class="head0">ID</th>
		                        <th class="head1">DNI</th>
		                        <th class="head0">Nombre</th>
		                        <th class="head1">Kilos</th>
		                        <th class="head0">Precio por kilo</th>
		                        <th class="head1">Total</th>
		                        <th class="head0">Saldo</th>
		                        <th class="head1">&nbsp;</th>
		                    </tr>
		                </thead>
		                <tfoot>
		                    <tr>
		                    	<th class="head0">ID</th>
		                        <th class="head1">DNI</th>
		                        <th class="head0">Nombre</th>
		                        <th class="head1">Kilos</th>
		                        <th class="head0">Precio por kilo</th>
		                        <th class="head1">Total</th>
		                        <th class="head0">Saldo</th>
		                        <th class="head1">&nbsp;</th>
		                    </tr>
		                </tfoot>
		                <tbody>
		                <?php
                    		if(isset($ventas)){ 
	                    		foreach($ventas as $venta){
	                    			$cliente = ORM::factory('cliente', $venta->IdCliente);
		                    		echo '<tr>';
			                            echo '<td>'.$venta->Id.'</td>';
			                            echo '<td>'.$cliente->DNI.'</td>';
			                            echo '<td>'.$cliente->Nombre.'</td>';
										echo '<td>'.$venta->Total.'</td>';
										echo '<td>'.$venta->Saldo.'</td>';
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