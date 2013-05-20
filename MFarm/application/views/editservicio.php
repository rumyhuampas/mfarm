<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/editservicio.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmservicios', 'action' => 'new')); ?>>Nuevo servicio</a></li>
                	<li class="current"><a href="#">Modificar servicio</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Modificar servicio</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php
					if(isset($servicio) && $servicio->loaded()){
						echo Form::open('abmservicios/edit', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewservicio'));						
							echo Form::hidden('IdCerda', $servicio->IdCerda);
							echo Form::hidden('IdServicio', $servicio->Id);
	                    	echo '<p>';
								echo Form::label('number', 'Numero');
								echo '<span class="field">';
								echo Form::input('number', $servicio->Numero, 
									array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('date', 'Fecha');
								echo '<span class="field">';
									echo Form::input('date', date('d-m-Y H:i:s', strtotime($servicio->FechaServicio)), array('id' => 'fielddate'));
								echo '</span>';
								echo '<div class="formwidgetbox" style="width: 300px">';
			                        echo '<div class="title"><h2 class="calendar"><span>Calendario</span></h2></div>';
			                        echo '<div class="widgetcontent padding0">';
			                            echo '<div id="datepicker"></div>';
			                        echo '</div><!--widgetcontent-->';
			                    echo '</div><!--widgetbox-->';
							echo '</p>';
							echo '<p>';
								echo Form::label('male', 'Macho');
								echo '<span class="field">';
									echo Form::input('male', $servicio->Macho, array('type' => 'text', 'id' => 'male', 'class' => 'smallinput'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80">'.$servicio->Observaciones.'</textarea>';
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