<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/datepicker.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/custom/oldventas.js" ?> type="text/javascript"></script>

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
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'ventas', 'action' => 'history')); ?>>Historico de ventas</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
					
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
		                		<th class="head0">Finalizada</th>
		                    	<th class="head1">ID</th>
		                    	<th class="head0">Fecha</th>
		                        <th class="head1">CUIL</th>
		                        <th class="head0">Nombre</th>
		                        <th class="head1">Total</th>
		                        <th class="head0">Saldo</th>
		                        <th class="head1">&nbsp;</th>
		                    </tr>
		                </thead>
		                <tfoot>
		                    <tr>
		                    	<th class="head0">Finalizada</th>
		                    	<th class="head1">ID</th>
		                    	<th class="head0">Fecha</th>
		                        <th class="head1">CUIL</th>
		                        <th class="head0">Nombre</th>
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
									$saldo = Helpers_VentaPago::getSaldoVenta($venta->Id);
		                    		echo '<tr>';
										if($saldo > 0){
											echo '<td width="5%"></td>';
										}
										else{
											echo '<td align="center"><img src='.URL::base()."assets/images/icons/default/ok.png".' alt=""></img></td>';
										}
			                            echo '<td>'.$venta->Id.'</td>';
			                            echo '<td>'.date('d-m-Y H:i:s', strtotime($venta->Fecha)).'</td>';
			                            echo '<td>'.$cliente->CUIL.'</td>';
			                            echo '<td>'.$cliente->Nombre.'</td>';
										echo '<td>$ '.$venta->Total.'</td>';
										echo '<td>$ '.$saldo.'</td>';
										echo '<td class="center">';
											echo Form::open('ventas/printfactura', array('method' => 'POST', 'target' => '_blank', 'id' => 'formprintfactura'.$venta->Id));
												echo Form::hidden('ventaid', $venta->Id);
												echo '<a href="#" name="reprint">Imprimir factura</a>';
											echo Form::close();
                                            echo Form::open('ventas/printestadoventa', array('method' => 'POST', 'target' => '_blank', 'id' => 'formprintestadoventa'.$venta->Id));
                                                echo Form::hidden('ventaid', $venta->Id);
                                                echo '<a href="#" name="reprint">Imprimir estado de venta</a>';
                                            echo Form::close();
                                            echo Form::open('ventas/delete', array('method' => 'POST'));
                                                echo Form::hidden('ventaid', $venta->Id);
                                                echo '<a href="#" name="delete">Eliminar venta</a>';
                                            echo Form::close();
											echo '<a href='.URL::base().Route::get('default')
			                            		->uri(array('controller' => 'ventas', 'action' => 'addpago', 'id' => $venta->Id)).'>
			                            		Ver pagos</a>';
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