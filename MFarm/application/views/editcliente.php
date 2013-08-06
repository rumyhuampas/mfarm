<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/editcliente.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmclientes', 'action' => 'new')); ?>>Nuevo cliente</a></li>
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmclientes', 'action' => 'edit')); ?>>Modificar cliente</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                	
                    <div class="contenttitle">
                    	<h2 class="form"><span>Modificar cliente</span></h2>
                    </div><!--contenttitle-->

					<?php
					
					echo Form::open('abmclientes/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcliente'));
                    	echo '<p>';
							echo Form::label('cuildnisearch', 'CUIL / DNI');
							echo '<span class="field">';
							echo Form::input('cuildnisearch', '', array('type' => 'text', 'id' => 'cuildnisearch', 'class' => 'smallinput'));
                            echo '</span>';
						echo '</p>';
						echo '<p class="stdformbutton">';
                        	echo Form::button('btnsearch', 'Buscar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();

					if(isset($cliente) && $cliente->loaded()){
						echo Form::open('abmclientes/edit', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formeditcliente'));
							echo '<p>';
	                        	echo Form::label('cuil', 'CUIL');
								echo '<span class="field">';
								echo Form::input('cuil', $cliente->CUIL, 
										array('type' => 'text', 'id' => 'cuil', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));	
	                            echo '</span>';
	                        echo '</p>';
	                    	echo '<p>';
	                        	echo Form::label('dni', 'DNI');
								echo '<span class="field">';
									echo Form::input('dni', $cliente->DNI, array('type' => 'text', 'id' => 'dni', 'class' => 'smallinput'));
	                            echo '</span>';
	                        echo '</p>';
							echo '<p>';
	                        	echo Form::label('name', 'Nombre');
								echo '<span class="field">';
								echo Form::input('name', $cliente->Nombre, array('type' => 'text', 'id' => 'name', 'class' => 'smallinput'));	
	                            echo '</span>';
	                        echo '</p>';
							echo '<p>';
	                        	echo Form::label('address', 'Direccion');
								echo '<span class="field">';
								echo Form::input('address', $cliente->Direccion, array('type' => 'text', 'id' => 'address', 'class' => 'smallinput'));	
	                            echo '</span>';
	                        echo '</p>';
							echo '<p>';
	                        	echo Form::label('phone', 'Telefono');
								echo '<span class="field">';
								echo Form::input('phone', $cliente->Telefono, array('type' => 'text', 'id' => 'phone', 'class' => 'smallinput'));	
	                            echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
								echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80">'.$cliente->Observaciones.'</textarea>';
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
	                        echo '</p>';
                    	echo Form::close();
						?>
						
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