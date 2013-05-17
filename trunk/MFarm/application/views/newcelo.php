<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/newcelo.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcelos', 'action' => 'new')); ?>>Nuevo celo</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Repeticion de celo</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php echo Form::open('abmcerdacelos/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcerda'));
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
						echo Form::open('abmcerdacelos/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewcelo'));

							$EstadoCelo = Helpers_Const::ESTCELO;
							$IdEstadoCelo = Helpers_Estado::get($EstadoCelo)->Id;
							if($cerda->IdEstado != $IdEstadoCelo){
								echo '<div class="smallnotification noimgmsgerror" style="margin-left: 220px;">';
							    	echo '<a class="close"></a>';
							    	echo '<p>La cerda no se encuentra en celo.</p>';
								echo '</div>';
							}
							else{
								if(!isset($lastserv) || !$lastserv->loaded()){
									echo '<div class="smallnotification noimgmsgalert" style="margin-left: 220px;">';
								    	echo '<a class="close"></a>';
								    	echo '<p>La cerda aun no tiene un servicio.</p>';
									echo '</div>';
								}
							}
						
							echo Form::hidden('IdCerda', $cerda->Id);
							if(isset($lastserv) && $lastserv->loaded()){
								echo Form::hidden('IdServicio', $lastserv->Id);
							}
	                    	echo '<p>';
								echo Form::label('number', 'Numero');
								echo '<span class="field">';
								echo Form::input('number', $cerda->Numero, 
									array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								echo '</span>';
	                        echo '</p>';									
							if($cerda->IdEstado == $IdEstadoCelo && (isset($lastserv) && $lastserv->loaded())){
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
								echo Form::label('servdate', 'Fecha de ultimo servicio');
								echo '<span class="field">';
									if(isset($lastserv) && $lastserv->loaded()){
										echo Form::input('servdate', $lastserv->FechaServicio, array('type' => 'text', 'id' => 'servdate', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									}
									else{
										echo Form::input('servdate', '', array('type' => 'text', 'id' => 'servdate', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('celo21date', 'Fecha probable de celo 21');
								echo '<span class="field">';
									if(isset($lastserv) && $lastserv->loaded()){
										echo Form::input('celo21date', $lastserv->ProbableFechaCelo21, array('type' => 'text', 'id' => 'celo21date', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									}
									else{
										echo Form::input('celo21date', '', array('type' => 'text', 'id' => 'celo21date', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('celo42date', 'Fecha probable de celo 42');
								echo '<span class="field">';
									if(isset($lastserv) && $lastserv->loaded()){
										echo Form::input('celo42date', $lastserv->ProbableFechaCelo42, array('type' => 'text', 'id' => 'celo42date', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									}
									else{
										echo Form::input('celo42date', '', array('type' => 'text', 'id' => 'celo42date', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
									}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoCelo){
                            		echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80" style="background-color: #DDDDDD" readonly></textarea>';
								}
								else{
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80"></textarea>';
								}
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								if($cerda->IdEstado != $IdEstadoCelo || (!isset($lastserv) || !$lastserv->loaded())){
	                        		echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2', 'style' => 'background-color: #DDDDDD; color: #333333;', 'disabled'));
								}
								else{
									echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
								}
	                        echo '</p>';
	                    echo Form::close();
						?>
						
						<div class="contenttitle radiusbottom0">
		                	<h2 class="table"><span>Repeticiones de celo desde el ultimo servicio</span></h2>
		                </div><!--contenttitle-->
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <colgroup>
		                        <col class="con0" />
		                        <col class="con1" />
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th class="head0">Fecha de servicio</th>
		                            <th class="head1">Fecha de repeticion de celo</th>
		                            <th class="head0">Fecha probable de celo 21</th>
		                            <th class="head1">Fecha probable de celo 42</th>
		                            <th class="head0">Observaciones</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th class="head0">Fecha de servicio</th>
		                            <th class="head1">Fecha de repeticion de celo</th>
		                            <th class="head0">Fecha probable de celo 21</th>
		                            <th class="head1">Fecha probable de celo 42</th>
		                            <th class="head0">Observaciones</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($reps) && isset($lastserv)){ 
			                    		foreach($reps as $rep){
			                    		echo '<tr>';
				                            echo '<td>'.$rep->FechaServicio.'</td>';
				                            echo '<td>'.$rep->Fecha.'</td>';
				                            echo '<td>'.$rep->ProbableFechaCelo21.'</td>';
											echo '<td>'.$rep->ProbableFechaCelo42.'</td>';
											echo '<td>'.$rep->Observaciones.'</td>';
				                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
	                
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