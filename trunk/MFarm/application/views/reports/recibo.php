<?php include Kohana::find_file('views', 'reports/_header'); ?>

<?php
	$_pago = ORM::factory('ventapago', $_id);
	$_venta = ORM::factory('venta', $_pago->IdVenta);
	$_cliente = ORM::factory('cliente', $_venta->IdCliente);
?>

<body class="loggedin">
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
        
        <div class="maincontent noright noleft">
        	<div class="maincontentinner">               
            	     
            	<div class="content" width="400px">
                    <div class="one">
                    	<div class="widgetbox">
	                        <div class="widgetcontent announcement">
	                        	<div class="one_half" align="center">
	                        		<img src=<?php echo URL::base()."assets/images/porkmanblack.png" ?> alt="" />
	                        	</div>
	                        	<div class="one_half last">
		                        	<div>RECIBO N: <b><?php echo str_pad($_pago->Id, 14, '0', STR_PAD_LEFT); ?></b></div>
		                        	
                                	<div>FECHA: <?php echo date("d", strtotime($_pago->Fecha)).'/'
                                	.date("m", strtotime($_pago->Fecha)).'/'
                                	.date("y", strtotime($_pago->Fecha)); ?></div>
                    				
		                            <div>CUIT: <?php echo Helpers_Config::get('CUIT')->Value; ?></div>
	                            </div>
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->
                    </div><!--one_half-->
                    
                    <div class="one">
	                	<div class="widgetbox">
	                        <div class="widgetcontent announcement">
	                        	<div>Recibi de <b><?php echo $_cliente->Nombre; ?></b></div>
	                        	<div>La suma de <b>$<?php echo $_pago->Monto; ?></b></div>
	                        	<div><b><?php echo strtoupper(Helpers_Convertidor::ValorEnLetras($_pago->Monto,"pesos")); ?></b></div>
	                        	<div>En concepto de</div>
	                        	<div style="height:100px;"><?php echo $_pago->Concepto ?></div>
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->                       
                    </div><!--one-->
                    
                    <div class="one_half">
	                	<div class="widgetbox">
	                        <div class="widgetcontent announcement">
	                        	<table width="100%">
                        			<tr>
                        				<td width="100%" height="50px"></td>
                        			</tr>
                        			<tr>
                        				<td width="100%" style="text-align: center;">Autorizo</td>
                        			</tr>
                        		</table>
	                        </div><!--widgetcontent-->
	                    </div><!--widgetbox-->
                    </div>
                    
                    <div class="one_half last" style="margin-left:3%;">
	                	<div class="widgetbox">
	                        <div class="widgetcontent announcement">
	                        	<table width="100%">
                        			<tr>
                        				<td width="100%" height="50px"></td>
                        			</tr>
                        			<tr>
                        				<td class="hS" width="100%" style="text-align: center;">Firma</td>
                        			</tr>
                        		</table>
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