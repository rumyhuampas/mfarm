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
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'new')); ?>>Nueva cerda</a></li>
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'edit')); ?>>Modificar cerda</a></li>
                </ul><!--maintabmenu-->
            	                
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Nueva cerda</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php include Kohana::find_file('views', '_message'); ?>
                    
                    <?php echo Form::open('abmcerdas/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewcerda'));
                    	echo '<p>';
                        	echo Form::label('number', 'Numero de Cerda');
							echo '<span class="field">';
							echo Form::input('number', '', array('type' => 'text', 'id' => 'number', 'class' => 'smallinput'));
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('estado', 'Estado');
							echo '<span class="field">';
							echo Form::select('estado', $estados);
                            echo '</span>';
                        echo '</p>';
						echo '<p>';
                        	echo Form::label('weight', 'Peso');
							echo '<span class="field">';
							echo Form::input('weight', '', array('type' => 'text', 'id' => 'weight', 'class' => 'smallinput'));
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
	                	<h2 class="table"><span>Cerdas</span></h2>
	                </div><!--contenttitle-->
	                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
	                    <colgroup>
	                        <col class="con0" />
	                        <col class="con1" />
	                    </colgroup>
	                    <thead>
	                        <tr>
	                            <th class="head0">Numero</th>
	                            <th class="head1">Estado</th>
	                            <th class="head0">Peso</th>
	                            <th class="head1">Fecha de alta</th>
	                            <th class="head0">&nbsp;</th>
	                        </tr>
	                    </thead>
	                    <tfoot>
	                        <tr>
	                            <th class="head0">Numero</th>
	                            <th class="head1">Estado</th>
	                            <th class="head0">Peso</th>
	                            <th class="head1">Fecha de alta</th>
	                            <th class="head0">&nbsp;</th>
	                        </tr>
	                    </tfoot>
	                    <tbody>
	                    	<?php foreach($cerdas as $cerda){
	                    		echo '<tr>';
		                            echo '<td>'.$cerda->Numero.'</td>';
									echo '<td>'.$cerda->Estado.'</td>';
									echo '<td>'.$cerda->Peso.'</td>';
									echo '<td>'.date('d-m-Y H:i:s', strtotime($cerda->Created_On)).'</td>';
									echo '<td class="center">';
									if($cerda->Estado == Helpers_Const::ESTMUERTA){
		                            	echo '<a href='.URL::base().Route::get('default')
		                            		->uri(array('controller' => 'abmcerdas', 'action' => 'revivir', 'id' => $cerda->Id)).'>
		                            		Revivir</a>';
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