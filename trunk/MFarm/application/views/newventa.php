<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/datepicker.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/custom/newdestete.js" ?> type="text/javascript"></script>

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

					if(isset($venta) && $venta->loaded()){
						echo Form::open('ventas/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewventa'));
						
	                    	echo '<p>';
								echo Form::label('number', 'Numero');
								echo '<span class="field">';
								echo Form::input('number', $venta->Numero, 
									array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
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
								echo Form::label('total', 'Total de lechones');
								echo '<span class="field">';
									echo Form::input('total', $total, array('type' => 'text', 'id' => 'total', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
	                        echo '</p>';
	                    echo Form::close();
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
			                    	<th class="head0">Fecha de destete</th>
			                        <th class="head1">Lechones</th>
			                        <th class="head0">Dias</th>
			                        <th class="head1">Peso total</th>
			                        <th class="head0">Peso promedio por unidad</th>
			                        <th class="head1">Observaciones</th>
			                    </tr>
			                </thead>
			                <tfoot>
			                    <tr>
			                    	<th class="head0">Fecha de destete</th>
			                        <th class="head1">Lechones</th>
			                        <th class="head0">Dias</th>
			                        <th class="head1">Peso total</th>
			                        <th class="head0">Peso promedio por unidad</th>
			                        <th class="head1">Observaciones</th>
			                    </tr>
			                </tfoot>
			                <tbody>
			                <?php
	                    		if(isset($destetes)){ 
		                    		foreach($destetes as $destete){
		                    		echo '<tr>';
			                            echo '<td>'.date('d-m-Y H:i:s', strtotime($destete->Fecha)).'</td>';
			                            echo '<td>'.$destete->Lechones.'</td>';
			                            echo '<td>'.$destete->Dias.'</td>';
										echo '<td>'.$destete->PesoTotal.'</td>';
										echo '<td>'.$destete->PesoProm.'</td>';
										echo '<td>'.$destete->Observaciones.'</td>';
			                        echo '</tr>';
									}
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