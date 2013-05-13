<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/newlactancia.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmlactancias', 'action' => 'new')); ?>>Nuevo registro de lactancia</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Nuevo registro de lactancia</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php echo Form::open('abmlactancias/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcerda'));
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

					if(isset($cerda) && $cerda->loaded()){
						echo Form::open('abmlactancias/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewlactancia'));

							$EstadoPostParto = Helpers_Const::ESTPOSTPARTO;
							$IdEstadoPostParto = Helpers_Estado::get($EstadoPostParto)->Id;
							if($cerda->IdEstado != $IdEstadoPostParto){
								echo '<div class="smallnotification noimgmsgerror" style="margin-left: 220px;">';
							    	echo '<a class="close"></a>';
							    	echo '<p>La cerda no esta preñada.</p>';
								echo '</div>';
							}
						
							echo Form::hidden('IdCerda', $cerda->Id);
							echo Form::hidden('IdParto', $lastparto->Id);
	                    	echo '<p>';
								echo Form::label('number', 'Numero');
								echo '<span class="field">';
								echo Form::input('number', $cerda->Numero, 
									array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';									
							if($cerda->IdEstado == $IdEstadoPostParto){
								echo '<p>';
									echo Form::label('date', 'Fecha');
									echo '<span class="field">';
										echo Form::input('date', date("d-m-Y H:i:s"), array('id' => 'fielddate'));
									echo '</span>';
									echo '<div class="formwidgetbox" style="width: 300px">';
				                        echo '<div class="title"><h2 class="calendar"><span>Calendario</span></h2></div>';
				                        echo '<div class="widgetcontent padding0">';
				                            echo '<div id="datepicker"></div>';
				                        echo '</div><!--widgetcontent-->';
				                    echo '</div><!--widgetbox-->';
								echo '</p>';
							}
							echo '<p>';
								echo Form::label('adopt', 'Adoptados');
								echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoPostParto){
									echo Form::input('adopt', '', array('type' => 'text', 'id' => 'adopt', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('adopt', '', array('type' => 'text', 'id' => 'adopt', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('dead', 'Muertos en lactancia');
								echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoPostParto){
									echo Form::input('dead', '', array('type' => 'text', 'id' => 'dead', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('dead', '', array('type' => 'text', 'id' => 'dead', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoPostParto){
                            		echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80" style="background-color: #DDDDDD" readonly></textarea>';
								}
								else{
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80"></textarea>';
								}
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								if($cerda->IdEstado != $IdEstadoPostParto){
	                        		echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2', 'style' => 'background-color: #DDDDDD; color: #333333;', 'disabled'));
								}
								else{
									echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
								}
	                        echo '</p>';
	                    echo Form::close();
						?>
						
						<div class="contenttitle radiusbottom0">
		                	<h2 class="table"><span>Registros de lactancia</span></h2>
		                </div><!--contenttitle-->
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <colgroup>
		                        <col class="con0" />
		                        <col class="con1" />
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th class="head0">Fecha</th>
		                            <th class="head1">Adoptados</th>
		                            <th class="head0">Muertos</th>
		                            <th class="head1">Total</th>
		                            <th class="head0">Observaciones</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th class="head0">Fecha</th>
		                            <th class="head1">Adoptados</th>
		                            <th class="head0">Muertos</th>
		                            <th class="head1">Total</th>
		                            <th class="head0">Observaciones</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($registros)){ 
			                    		foreach($registros as $registro){
			                    		echo '<tr>';
				                            echo '<td>'.$registro->Fecha.'</td>';
				                            echo '<td>'.$registro->Adoptados.'</td>';
				                            echo '<td>'.$registro->Muertos.'</td>';
											echo '<td>'.$registro->Total.'</td>';
											echo '<td>'.$registro->Observaciones.'</td>';
				                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
	                
	                	<br clear="all" /> 
	                	
	                	<div class="contenttitle">
	                    	<h2 class="chart"><span>Variaciones durante lactancia (max 20)</span></h2>
	                    </div><!--contenttitle-->
	                    <br />
	                    <?php
	                    echo '<div id="lactanciachart" style="height:300px; margin-right: 30px" name='.$cerda->Id.' partoid='.$lastparto->Id.'></div>';
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