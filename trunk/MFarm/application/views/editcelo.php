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
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdacelos', 'action' => 'new')); ?>>Nuevo celo</a></li>
                	<li class="current"><a href="#">Modificar celo</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Modificar repeticion de celo</span></h2>
                    </div><!--contenttitle-->

					<?php
					if(isset($celo) && count($celo) > 0){
						echo Form::open('abmcerdacelos/edit', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formeditcelo'));
							echo Form::hidden('IdCelo', $celo[0]->Id);
	                    	echo '<p>';
								echo Form::label('number', 'Numero');
								echo '<span class="field">';
								echo Form::input('number', $celo[0]->Numero, 
									array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';									
							echo '<p>';
								echo Form::label('date', 'Fecha');
								echo '<span class="field">';
									echo Form::input('date', date("d-m-Y H:i:s", strtotime($celo[0]->Fecha)), array('id' => 'fielddate'));
								echo '</span>';
								echo '<div class="formwidgetbox" style="width: 300px">';
			                        echo '<div class="title"><h2 class="calendar"><span>Calendario</span></h2></div>';
			                        echo '<div class="widgetcontent padding0">';
			                            echo '<div id="datepicker"></div>';
			                        echo '</div><!--widgetcontent-->';
			                    echo '</div><!--widgetbox-->';
							echo '</p>';
							echo '<p>';
								echo Form::label('servdate', 'Fecha de ultimo servicio');
								echo '<span class="field">';
									echo Form::input('servdate', date('d-m-Y H:i:s', strtotime($celo[0]->FechaServicio)), array('type' => 'text', 'id' => 'servdate', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('celo21date', 'Fecha probable de celo 21');
								echo '<span class="field">';
									echo Form::input('celo21date', date('d-m-Y', strtotime($celo[0]->ProbableFechaCelo21)), array('type' => 'text', 'id' => 'celo21date', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('celo42date', 'Fecha probable de celo 42');
								echo '<span class="field">';
									echo Form::input('celo42date', date('d-m-Y', strtotime($celo[0]->ProbableFechaCelo42)), array('type' => 'text', 'id' => 'celo42date', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80">'.$celo[0]->Observaciones.'</textarea>';
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