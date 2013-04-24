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
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmusers', 'action' => 'edit')); ?>>Perfil</a></li>
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmusers', 'action' => 'new')); ?>>Usuarios del sistema</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Perfil de usuario</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php include Kohana::find_file('views', '_message'); ?>
                    
					<?php echo Form::open('abmusers/edit', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formedituser'));
						echo '<p>';
						echo '<div class="profile"><img alt="" src="'.URL::base().'assets/images/avatar3.png"></div>';
						echo '</p>';
                    	echo '<p>';
                        	echo Form::label('username', 'Nombre');
							echo '<span class="field">';
							echo Form::input('username', $userobj->UserName, array('type' => 'text', 'id' => 'username', 'class' => 'smallinput', 'style' => 'background-color: #CCCCCC', 'readonly'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('oldpass', 'Contraseña actual');
							echo '<span class="field">';
							echo Form::input('oldpass', '', array('type' => 'password', 'id' => 'oldpass', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('newpass', 'Nueva contrseña');
							echo '<span class="field">';
							echo Form::input('newpass', '', array('type' => 'password', 'id' => 'newpass', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('newpass2', 'Repetir contraseña nueva');
							echo '<span class="field">';
							echo Form::input('newpass2', '', array('type' => 'password', 'id' => 'newpass2', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
                        
                        echo '<p class="stdformbutton">';
                        	echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();
					?>
                
                	<br clear="all" />
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', '_copyright'); ?>
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>