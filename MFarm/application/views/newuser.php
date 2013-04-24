<?php include Kohana::find_file('views', '_loginheader'); ?>

<body class="login">

	<div class="loginbox radius3">
		<div class="loginboxinner radius3">
	    	<div class="loginheader">
	    		<h1 class="bebas">Crear usuario</h1>
	        	<div class="logo"><img src=<?php echo URL::base()."assets/images/starlight_admin_template_logo.png" ?> alt="" /></div>
	    	</div><!--loginheader-->
	        
	        <div class="loginform">
	        	<?php include Kohana::find_file('views', '_smallmessage'); ?>
	        	<!--<div class="loginerror"><p>Usuario o contraseña incorrectos</p></div>-->
	        	<?php 
	        		echo Form::open('login/createfirstuser', array('id' => 'login', 'method' => 'POST'));
						echo '<p>';
							echo Form::label('username', 'Usuario', array('for' => 'username', 'class' => 'bebas'));
							echo Form::input('username', '', array('type' => 'text', 'id' => 'username', 'class' => 'radius2'));
						echo '</p>';
						echo '<p>';
							echo Form::label('password', 'Contraseña', array('for' => 'password', 'class' => 'bebas'));
							echo Form::input('password', '', array('type' => 'password', 'id' => 'password', 'class' => 'radius2'));
						echo '</p>';
						echo '<p>';
							echo Form::label('repassword', 'Contraseña', array('for' => 'password', 'class' => 'bebas'));
							echo Form::input('repassword', '', array('type' => 'password', 'id' => 'password', 'class' => 'radius2'));
						echo '</p>';
						echo '<p>';
							echo Form::button('btnlogin', 'Crear usuario', array('class' => 'radius3 bebas'));
						echo '</p>';
					echo Form::close();
	        	?>
	        </div><!--loginform-->
	    </div><!--loginboxinner-->
	</div><!--loginbox-->

</body>

<?php include Kohana::find_file('views', '_footer'); ?>