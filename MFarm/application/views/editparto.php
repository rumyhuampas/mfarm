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
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmpartos', 'action' => 'new')); ?>>Nuevo parto</a></li>
                	<li class="current"><a href="#">Modificar parto</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Modificar parto</span></h2>
                    </div><!--contenttitle-->

					<?php
					if(isset($parto) && $parto->loaded()){
						echo Form::open('abmpartos/edit', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formeditparto'));
						
							if(isset($registros) && count($registros) > 1){
								echo '<div class="smallnotification noimgmsgerror" style="margin-left: 220px;">';
							    	echo '<a class="close"></a>';
							    	echo '<p>El parto tiene registros de lactancia asociados. No se pueden modificar todos los datos.</p>';
								echo '</div>';
							}
							
							echo Form::hidden('IdParto', $parto->Id);
	                    	echo '<p>';
								echo Form::label('number', 'Numero');
								echo '<span class="field">';
								echo Form::input('number', $parto->Numero, 
									array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							if(isset($registros) && count($registros) > 1){
								echo '<p>';
									echo Form::label('date', 'Fecha');
									echo '<span class="field">';
										echo Form::input('date', date("d-m-Y H:i:s", strtotime($parto->Fecha)), array('id' => 'fielddate', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									echo '</span>';
								echo '</p>';
							}
							else{									
								echo '<p>';
									echo Form::label('date', 'Fecha');
									echo '<span class="field">';
										echo Form::input('date', date("d-m-Y H:i:s", strtotime($parto->Fecha)), array('id' => 'fielddate'));
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
								echo Form::label('alive', 'Vivos');
								echo '<span class="field">';
								if(isset($registros) && count($registros) > 1){
									echo Form::input('alive', $parto->Vivos, array('type' => 'text', 'id' => 'alive', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('alive', $parto->Vivos, array('type' => 'text', 'id' => 'alive', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('dead', 'Muertos');
								echo '<span class="field">';
								if(isset($registros) && count($registros) > 1){
									echo Form::input('dead', $parto->Muertos, array('type' => 'text', 'id' => 'dead', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('dead', $parto->Muertos, array('type' => 'text', 'id' => 'dead', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('momif', 'Momificados');
								echo '<span class="field">';
								if(isset($registros) && count($registros) > 1){
									echo Form::input('momif', $parto->Momificados, array('type' => 'text', 'id' => 'momif', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('momif', $parto->Momificados, array('type' => 'text', 'id' => 'momif', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80">'.$parto->Observaciones.'</textarea>';
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
	                        echo '</p>';
	                    echo Form::close();
						?>
	                
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