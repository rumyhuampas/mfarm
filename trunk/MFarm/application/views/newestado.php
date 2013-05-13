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
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmestados')); ?>>Nuevo Estado</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Nuevo Estado</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php include Kohana::find_file('views', '_message'); ?>
                    
					<?php echo Form::open('abmestados/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewestado'));
                    	echo '<p>';
                        	echo Form::label('name', 'Nombre');
							echo '<span class="field">';
							echo Form::input('name', '', array('type' => 'text', 'id' => 'name', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
                        
                        echo '<p class="stdformbutton">';
                        	echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
                        echo '</p>';
                    echo Form::close();
					?>
            
            
	            	<div class="contenttitle radiusbottom0">
	                	<h2 class="table"><span>Estados</span></h2>
	                </div><!--contenttitle-->
	                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
	                    <colgroup>
	                        <col class="con0" />
	                        <col class="con1" />
	                    </colgroup>
	                    <thead>
	                        <tr>
	                            <th class="head0">Nombre</th>
	                            <th class="head1">&nbsp;</th>
	                        </tr>
	                    </thead>
	                    <tfoot>
	                        <tr>
	                            <th class="head0">Nombre</th>
	                            <th class="head1">&nbsp;</th>
	                        </tr>
	                    </tfoot>
	                    <tbody>
	                    	<?php foreach($estados as $estado){
	                    		echo '<tr>';
		                            echo '<td>'.$estado->Nombre.'</td>';
									echo '<td class="center">';
									if($estado->CanDelete != 'N'){
		                            	echo '<a href='.URL::base().Route::get('default')
		                            		->uri(array('controller' => 'abmestados', 'action' => 'delete', 'id' => $estado->Id)).'class="delete">
		                            		Eliminar</a>';
									}
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