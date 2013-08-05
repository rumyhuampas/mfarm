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
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'config', 'action' => 'index')); ?>>Configuracion</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Configuracion</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php
					if(isset($config) && count($config) > 0){
						echo Form::open('config/save', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsaveconfig'));
							foreach($config as $c){
		                    	echo '<p>';
									echo Form::label($c->Name, $c->Name);
									echo '<span class="field">';
									echo Form::input($c->Name, $c->Value, 
										array('type' => 'text', 'id' => $c->Name, 'class' => 'smallinput'));
									echo '</span>';
		                        echo '</p>';
							}
	                        
	                        echo '<p class="stdformbutton">';
								//echo '<span class="stdbtn btn_black" id="btnsave">Guardar</span>';
								echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
	                        echo '</p>';
	                    echo Form::close();
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