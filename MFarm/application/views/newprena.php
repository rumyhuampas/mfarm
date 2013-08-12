<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/datepicker.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmservicios', 'action' => 'new')); ?>>Nuevo servicio</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Nuevo servicio</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php echo Form::open('abmservicios/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcerda'));
                    	echo '<p>';
							echo Form::label('numbersearch', 'Numero de cerda');
							echo '<span class="field">';
							echo Form::input('numbersearch', '', array('type' => 'text', 'id' => 'numbersearch', 'class' => 'smallinput'));
                            echo '</span>';
						echo '</p>';
						echo '<p class="stdformbutton">';
                        	echo Form::button('btnsearch', 'Buscar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();

					if(isset($cerda) && $cerda->loaded()){
						echo Form::open('abmservicios/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewservicio'));
							
							$EstadoCelo = Helpers_Const::ESTCELO;
							$IdEstadoCelo = Helpers_Estado::get($EstadoCelo)->Id;
							if($cerda->IdEstado != $IdEstadoCelo){
								echo '<div class="smallnotification noimgmsgerror" style="margin-left: 220px;">';
							    	echo '<a class="close"></a>';
							    	echo '<p>La cerda no se encuentra en celo.</p>';
								echo '</div>';
							}
						
							echo Form::hidden('IdCerda', $cerda->Id);
	                    	echo '<p>';
								echo Form::label('number', 'Numero');
								echo '<span class="field">';
								echo Form::input('number', $cerda->Numero, 
									array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							if($cerda->IdEstado == $IdEstadoCelo){
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
							}
							echo '<p>';
								echo Form::label('male', 'Macho');
								echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoCelo){
									echo Form::input('male', '', array('type' => 'text', 'id' => 'male', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('male', '', array('type' => 'text', 'id' => 'male', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoCelo){
                            		echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80" style="background-color: #DDDDDD" readonly></textarea>';
								}
								else{
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80"></textarea>';
								}
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								if($cerda->IdEstado != $IdEstadoCelo){
	                        		echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2', 'style' => 'background-color: #DDDDDD; color: #333333;', 'disabled'));
								}
								else{
									echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
								}
	                        echo '</p>';
	                    echo Form::close();
						?>
						
						<div class="contenttitle radiusbottom0">
		                	<h2 class="table"><span>Servicios</span></h2>
		                </div><!--contenttitle-->
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <colgroup>
		                        <col class="con0" />
		                        <col class="con1" />
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th class="head0">Fecha de servicio</th>
		                            <th class="head1">Macho</th>
		                            <th class="head0">Probable fecha de celo 21</th>
		                            <th class="head1">Probable fecha de celo 42</th>
		                            <th class="head0">Probable fecha de parto</th>
		                            <th class="head1">Observaciones</th>
		                            <th class="head0">&nbsp;</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th class="head0">Fecha de servicio</th>
		                            <th class="head1">Macho</th>
		                            <th class="head0">Probable fecha de celo 21</th>
		                            <th class="head1">Probable fecha de celo 42</th>
		                            <th class="head0">Probable fecha de parto</th>
		                            <th class="head1">Observaciones</th>
		                            <th class="head0">&nbsp;</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($servicios)){ 
			                    		foreach($servicios as $servicio){
			                    		echo '<tr>';
				                            echo '<td>'.date('d-m-Y H:i:s', strtotime($servicio->FechaServicio)).'</td>';
				                            echo '<td>'.$servicio->Macho.'</td>';
				                            echo '<td>'.date('d-m-Y', strtotime($servicio->ProbableFechaCelo21)).'</td>';
											echo '<td>'.date('d-m-Y', strtotime($servicio->ProbableFechaCelo42)).'</td>';
											echo '<td>'.date('d-m-Y', strtotime($servicio->ProbableFechaParto)).'</td>';
											echo '<td>'.$servicio->Observaciones.'</td>';
											echo '<td class="center">';
				                            	echo '<a href='.URL::base().Route::get('default')
				                            		->uri(array('controller' => 'abmservicios', 'action' => 'edit', 'id' => $servicio->Id)).'>
				                            		Modificar</a>';
											echo '</td>';
				                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
	                
	                	<br clear="all" /> 
	                	
                	<?php
                	}
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