<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/reportes.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
        		
        		<ul class="maintabmenu">
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'reportes', 'action' => 'reportesporfecha')); ?>>Reportes por fecha</a></li>
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'reportes', 'action' => 'reportesporcerda')); ?>>Reportes por cerda</a></li>
                </ul><!--maintabmenu-->
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Datos</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php echo Form::open('reportes/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcerda'));
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
					?>
                    
                    <div class='searchresults'>
                    
	                    <?php 
	                    if(isset($cerda) && $cerda->loaded()){
	                    	echo Form::open('reportes/reportesporcerda', array('method' => 'POST', 'target' => '_blank', 'class' => 'stdform', 'id' => 'formreportlistar'));
								echo Form::hidden('IdCerda', $cerda->Id);
		                    	echo '<p>';
									echo Form::label('number', 'Numero');
									echo '<span class="field">';
									echo Form::input('number', $cerda->Numero, 
										array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									echo '</span>';
		                        echo '</p>';	
		                    	echo '<p>';
		                        	echo Form::label('datos', 'Datos');
									echo '<span class="field">';
									echo Form::select('datos', $datos);
		                            echo '</span>';
		                        echo '</p>';
		                    	echo '<p>';
									echo Form::label('desde', 'Fecha desde');
									echo '<span class="field">';
										echo Form::input('desde', date("d-m-Y"), array('id' => 'fielddate'));
									echo '</span>';
									echo '<div class="formwidgetbox" style="width: 300px">';
				                        echo '<div class="title"><h2 class="calendar"><span>Calendario</span></h2></div>';
				                        echo '<div class="widgetcontent padding0">';
				                            echo '<div id="datepicker"></div>';
				                        echo '</div><!--widgetcontent-->';
				                    echo '</div><!--widgetbox-->';
								echo '</p>';
								echo '<p>';			
									echo Form::label('hasta', 'Fecha hasta');
									echo '<span class="field">';
										echo Form::input('hasta', date("d-m-Y"), array('id' => 'fielddate2'));
									echo '</span>';
									echo '<div class="formwidgetbox" style="width: 300px">';
				                        echo '<div class="title"><h2 class="calendar"><span>Calendario</span></h2></div>';
				                        echo '<div class="widgetcontent padding0">';
				                            echo '<div id="datepicker2"></div>';
				                        echo '</div><!--widgetcontent-->';
				                    echo '</div><!--widgetbox-->';
								echo '</p>';
		                        
		                        echo '<p class="stdformbutton">';
		                        	echo Form::button('btnsave', 'Procesar', array('class' => 'submit radius2'));
		                        echo '</p>';
	                    	echo Form::close();
	                    }
						?>
						
					</div><!--searchresults-->
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', '_copyright'); ?>
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>