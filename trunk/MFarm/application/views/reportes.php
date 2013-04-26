<?php include Kohana::find_file('views', '_header'); ?>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
        		
        		<ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'reportes', 'action' => 'listarporfecha')); ?>>Listar por fecha</a></li>
                </ul><!--maintabmenu-->
            	                
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Listar por fecha</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php echo Form::open('reportes/listarporfecha', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formreportlistar'));
                    	echo '<p>';
                        	echo Form::label('datos', 'Datos');
							echo '<span class="field">';
							echo Form::select('datos', $datos);
                            echo '</span>';
                        echo '</p>';
                    	echo '<p>';
                        	echo Form::label('desde', 'Fecha desde');
							echo '<span class="field">';
								echo Form::input('desde', '', array('type' => 'text', 'id' => 'desde', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
                        
                        echo '<p class="stdformbutton">';
                        	echo Form::button('btnsave', 'Procesar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();
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