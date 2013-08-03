<?php include Kohana::find_file('views', 'reports/_header'); ?>

<?php
	$_venta = Helpers_Venta::get($_id);
	$_cliente = ORM::factory('cliente', $_venta->IdCliente);
?>

<body class="loggedin">
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
        
        <div class="maincontent noright noleft">
        	<div class="maincontentinner">               
            	     
            	<div class="content">
            		<div class="one_half">
                    	<div class="widgetbox">
	                        <div class="widgetcontent announcement" height="130px">
	                        	<div align="center">
	                        		<img src=<?php echo URL::base()."assets/images/porkmanblack.png" ?> alt="" />
		                        	<br clear="all" /><br />
		                        	<div style="text-align:center; margin-top: 30px;">I.V.A. Responsable Inscripto</div>
	                        	</div>
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->
                    </div><!--one_half-->
                    <div class="one_half last" style="margin-left:3%;">
                    	<div class="widgetbox">
	                        <div class="widgetcontent announcement" height="130px">
	                        	<div>FACTURA:</div>
	                        	<div>N: <b><?php echo str_pad($_venta->Id, 14, '0', STR_PAD_LEFT); ?></b></div>
	                        	<table cellpadding="0" cellspacing="0" border="0" class="stdtable">
	                                <thead>
	                                    <tr>
	                                        <th class="head0" width="33%">DIA</th>
	                                        <th class="head0" width="33%">MES</th>
	                                        <th class="head0" width="33%">ANO</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
		                                	<td align="center" style="border: 1px solid #EEEEEE;"><?php echo date("d", strtotime($_venta->Fecha)); ?></td>
	                        				<td align="center" style="border: 1px solid #EEEEEE;"><?php echo date("m", strtotime($_venta->Fecha)); ?></td>
	                        				<td align="center" style="border: 1px solid #EEEEEE;"><?php echo date("y", strtotime($_venta->Fecha)); ?></td>
                        				</tr>
	                                </tbody>
	                            </table>
	                            <div>CUIT:</div>
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->
                    </div><!--one_half-->
                    
                    <div class="one">
	                	<div class="widgetbox">
	                        <div class="widgetcontent announcement">
	                        	<div>Senor(es): <b><?php echo $_cliente->Nombre; ?></b></div>
	                        	<div>Domicilio: <b><?php echo $_cliente->Direccion; ?></b></div>
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->
                    </div>
                    
                    <div class="one">
	                	<div class="widgetbox">
	                        <div class="widgetcontent announcement">
	                        	IVA
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->
                    </div>
                    
                    <div class="one">
                    
                        <div class="widgetbox">
	                        <div class="widgetcontent padding0 statement">
	                           <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
	                                <thead>
	                                    <tr>
	                                        <th class="head0">Cant. kilos</th>
	                                        <th class="head1" style="width:50%">Detalle</th>
	                                        <th class="head0">P. Unit</th>
	                                        <th class="head1">Total</th>
	                                    </tr>
	                                </thead>
	                                <tfoot>
	                                	<tr>
	                                		<th></th>
	                                        <th style="width:50%"></th>
	                                        <th class="head1">Total</th>
	                                        <th class="head1"><?php echo $_venta->Total ?></th>
	                                    </tr>
	                                </tfoot>
	                                <tbody>
	                                	<tr>
	                                		<td><?php echo $_venta->Kilos ?></td>
	                                		<td>Kilos de cerdo</td>
	                                		<td><?php echo $_venta->PUnit ?></td>
	                                		<td><?php echo $_venta->Total ?></td>
	                                	</tr>
	                                	<?php
	                                		for($i=0;$i<20;$i++){
	                                			echo "<tr>";
	                                			echo "<td></td>";
												echo "<td></td>";
												echo "<td></td>";
												echo "<td></td>";
												echo "</tr>";
	                                		}
	                                	?>
	                                </tbody>
	                            </table>
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->                        
                    </div><!--one-->
                    
                    <div class="one">
	                	<div class="widgetbox">
	                        <div class="widgetcontent announcement">
	                        	Direccion
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->
                    </div>
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->           
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->    

</body>

<?php include Kohana::find_file('views', 'reports/_footer'); ?>