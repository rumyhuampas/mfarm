<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/datepicker.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/custom/addpago.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        	
        	<?php include Kohana::find_file('views/dialogs', 'yesno'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'ventas', 'action' => 'new')); ?>>Nueva venta</a></li>
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'ventas', 'action' => 'addpago')); ?>>Agregar pago</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Agregar pago</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php
					if(isset($venta) && $venta->loaded()){
						$cliente = ORM::factory('cliente', $venta->IdCliente);
						echo Form::open('ventas/addpago', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formaddpago'));
	                    	echo Form::hidden('idventa', $venta->Id);
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
									echo Form::input('total', $venta->Total, array('type' => 'text', 'id' => 'total', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('saldo', 'Saldo');
								echo '<span class="field">';
									echo Form::input('saldo', Helpers_VentaPago::getSaldoVenta($venta->Id), array('type' => 'text', 'id' => 'saldo', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
	                        	echo Form::label('tpago', 'Tipo de pago');
								echo '<span class="field">';
									echo Form::select('tpago', $tpagos, '', array('id' => 'tpago'));
	                            echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('monto', 'Monto');
								echo '<span class="field">';
									echo Form::input('monto', '', array('type' => 'text', 'id' => 'monto', 'class' => 'smallinput'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('conc', 'Concepto');
                            	echo '<span class="field">';
									echo '<textarea name="conc" id="conc" class="longinput" rows="5" cols="80"></textarea>';
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80"></textarea>';
								echo '</span>';
	                        echo '</p>';
							
	                        
	                        echo '<p class="stdformbutton">';
								echo '<span class="stdbtn btn_black" id="btnsave">Guardar</span>';
								//echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
	                        echo '</p>';
	                    echo Form::close();
						?>
						
						<div class="contenttitle radiusbottom0">
			            	<h2 class="table"><span>Pagos</span></h2>
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
			                        <th class="head0">Tipo de Pago</th>
			                        <th class="head1">Monto</th>
			                        <th class="head0">Saldo</th>
			                        <th class="head1">Observaciones</th>
			                        <th class="head0">&nbsp;</th>
			                    </tr>
			                </thead>
			                <tfoot>
			                    <tr>
			                    	<th class="head0">ID</th>
			                    	<th class="head1">Fecha</th>
			                        <th class="head0">Tipo de Pago</th>
			                        <th class="head1">Monto</th>
			                        <th class="head0">Saldo</th>
			                        <th class="head1">Observaciones</th>
			                        <th class="head0">&nbsp;</th>
			                    </tr>
			                </tfoot>
			                <tbody>
			                <?php
	                    		if(isset($pagos)){ 
		                    		foreach($pagos as $pago){
			                    		echo '<tr>';
				                            echo '<td>'.$pago->Id.'</td>';
											echo '<td>'.$pago->Fecha.'</td>';
											echo '<td>'.$pago->Tipo.'</td>';
											echo '<td>'.$pago->Monto.'</td>';
											echo '<td>'.Helpers_VentaPago::getSaldo($pago->Id).'</td>';
											echo '<td>'.$pago->Observaciones.'</td>';
											echo '<td class="center">';
												echo Form::open('ventas/printrecibo', array('method' => 'POST', 'target' => '_blank', 'id' => 'formprintrecibo'.$pago->Id));
													echo Form::hidden('pagoid', $pago->Id);
													echo '<a href="#" name="reprint">Imprimir pago</a>';
												echo Form::close();
												echo Form::open('ventas/deletepago', array('method' => 'POST', 'id' => 'formdeletepago'));
													echo Form::hidden('idventa', $venta->Id);
													echo Form::hidden('pagoid', $pago->Id);
													echo '<a href="#" name="delete">Eliminar</a>';
												echo Form::close();
											echo '</td>';
				                        echo '</tr>';
									}
	                    		}
								if(isset($_pagoid)){
									echo Form::hidden('_pagoid', $_pagoid);
								}
							?>
			                </tbody>
			            </table>
		                
		               	<br clear="all" /> 
	                    <?php
	                } //isset($cerda)
					?>
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', '_copyright'); ?>
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>