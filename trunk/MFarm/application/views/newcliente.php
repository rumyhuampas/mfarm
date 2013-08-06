<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/newcliente.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
        		
        		<ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmclientes', 'action' => 'new')); ?>>Nuevo cliente</a></li>
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmclientes', 'action' => 'edit')); ?>>Modificar cliente</a></li>
                </ul><!--maintabmenu-->
            	                
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Nuevo cliente</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php include Kohana::find_file('views', '_message'); ?>
                    
                    <?php echo Form::open('abmclientes/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewcliente'));
                    	echo '<p>';
                        	echo Form::label('cuil', 'CUIL');
							echo '<span class="field">';
							echo Form::input('cuil', '', array('type' => 'text', 'id' => 'cuil', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
                    	echo '<p>';
                        	echo Form::label('dni', 'DNI');
							echo '<span class="field">';
							echo Form::input('dni', '', array('type' => 'text', 'id' => 'dni', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
                        echo '<p>';
                        	echo Form::label('name', 'Nombre');
							echo '<span class="field">';
							echo Form::input('name', '', array('type' => 'text', 'id' => 'name', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('address', 'Direccion');
							echo '<span class="field">';
							echo Form::input('address', '', array('type' => 'text', 'id' => 'address', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('phone', 'Telefono');
							echo '<span class="field">';
							echo Form::input('phone', '', array('type' => 'text', 'id' => 'phone', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('obs', 'Observaciones');
                        	echo '<span class="field">';
								echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80"></textarea>';
							echo '</span>';
                        echo '</p>';
                        
                        echo '<p class="stdformbutton">';
                        	echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();
					?>
					
					<div class="contenttitle radiusbottom0">
	                	<h2 class="table"><span>Clientes</span></h2>
	                </div><!--contenttitle-->
	                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
	                    <colgroup>
	                        <col class="con0" />
	                        <col class="con1" />
	                    </colgroup>
	                    <thead>
	                        <tr>
	                            <th class="head0">DNI</th>
	                            <th class="head1">CUIL</th>
	                            <th class="head0">Nombre</th>
	                            <th class="head1">Telefono</th>
	                            <th class="head0">&nbsp;</th>
	                        </tr>
	                    </thead>
	                    <tfoot>
	                        <tr>
	                            <th class="head0">DNI</th>
	                            <th class="head1">CUIL</th>
	                            <th class="head0">Nombre</th>
	                            <th class="head1">Telefono</th>
	                            <th class="head0">&nbsp;</th>
	                        </tr>
	                    </tfoot>
	                    <tbody>
	                    	<?php foreach($clientes as $cliente){
	                    		echo '<tr>';
		                            echo '<td>'.$cliente->DNI.'</td>';
									echo '<td>'.$cliente->CUIL.'</td>';
									echo '<td>'.$cliente->Nombre.'</td>';
									echo '<td>'.$cliente->Telefono.'</td>';
									echo '<td class="center">';
										echo Form::open('abmclientes/search', array('method' => 'POST', 'class' => 'stdform'));
	                            		echo Form::hidden('cuildnisearch', $cliente->CUIL);
										echo '<a href="#" name="editcliente">Editar</a>';
										echo Form::close();	
									echo '</td>';
		                        echo '</tr>';
	                    	}
							?>
	                    </tbody>
	                </table>                

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