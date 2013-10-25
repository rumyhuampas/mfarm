<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/datepicker.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/custom/editcerda.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'list')); ?>>Cerdas</a></li>
        			<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'new')); ?>>Nueva cerda</a></li>
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'edit')); ?>>Modificar cerda</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                	
                    <div class="contenttitle">
                    	<h2 class="form"><span>Modificar cerda</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php 
					if(isset($cerda) && $cerda->loaded()){
						$post_data = array('numbersearch', $cerda->Id);
					?>
						<br clear="all" />
	                	<ul class="formwidgetlist">
							<li><a href="#" id="serviciolink" name="<?php echo $cerda->Id; ?>" class="pipeta">Nuevo servicio</a></li>
							<?php 
							echo Form::open('abmservicios/search', array('method' => 'POST', 'id' => 'servicioform'));
								echo Form::hidden('numbersearch', $cerda->Numero, array('id' => 'numbersearch'));
							echo Form::close();
							?>
							<li><a href="#" id="replink" name="<?php echo $cerda->Id; ?>" class="undo">Repetir celo</a></li>
							<?php 
							echo Form::open('abmcerdacelos/search', array('method' => 'POST', 'id' => 'repform'));
								echo Form::hidden('numbersearch', $cerda->Numero, array('id' => 'numbersearch'));
							echo Form::close();
							?>
							<li><a href="#" id="partolink" name="<?php echo $cerda->Id; ?>" class="stork">Nuevo parto</a></li>
							<?php 
							echo Form::open('abmpartos/search', array('method' => 'POST', 'id' => 'partoform'));
								echo Form::hidden('numbersearch', $cerda->Numero, array('id' => 'numbersearch'));
							echo Form::close();
							?>
							<li><a href="#" id="lactancialink" name="<?php echo $cerda->Id; ?>" class="list">Nuevo registro de lactancia</a></li>
							<?php 
							echo Form::open('abmlactancias/search', array('method' => 'POST', 'id' => 'lactanciaform'));
								echo Form::hidden('numbersearch', $cerda->Numero, array('id' => 'numbersearch'));
							echo Form::close();
							?>
							<li><a href="#" id="destetelink" name="<?php echo $cerda->Id; ?>" class="babybottle">Nuevo destete</a></li>
							<?php 
							echo Form::open('abmdestetes/search', array('method' => 'POST', 'id' => 'desteteform'));
								echo Form::hidden('numbersearch', $cerda->Numero, array('id' => 'numbersearch'));
							echo Form::close();
							?>
						</ul>
						<br clear="all" />
					<?php
					}
					
					echo Form::open('abmcerdas/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcerda'));
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
						echo Form::open('abmcerdas/edit', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formeditcerda'));
						
							if($cerda->IdEstado == Helpers_Estado::getEndStatus()->Id){
								echo '<div class="smallnotification noimgmsgerror" style="margin-left: 220px;">';
							    	echo '<a class="close"></a>';
							    	echo '<p>La cerda esta muerta.</p>';
								echo '</div>';
							}							
						
	                    	echo '<p>';
	                        	echo Form::label('number', 'Numero');
								echo '<span class="field">';
									echo Form::input('number', $cerda->Numero, 
										array('type' => 'text', 'id' => 'number', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
	                            echo '</span>';
	                        echo '</p>';
							if($cerda->IdEstado != Helpers_Estado::getEndStatus()->Id){
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
	                        	echo Form::label('estado', 'Estado');
								echo '<span class="field">';
									echo Form::input('estado', ORM::factory('estado', $cerda->IdEstado)->Nombre, 
										array('type' => 'text', 'id' => 'estado', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
	                            echo '</span>';
	                        echo '</p>';
							/*echo '<p>';
	                        	echo Form::label('estado', 'Estado');
								echo '<span class="field">';
								if($cerda->IdEstado == Helpers_Estado::getEndStatus()->Id){
									echo Form::select('estado', $estados, $cerda->IdEstado,
										array('id' => 'cerdaestado', 'style' => 'background-color: #DDDDDD', 'disabled'));
								}
								else{
									echo Form::select('estado', $estados, $cerda->IdEstado,
										array('id' => 'cerdaestado'));
								}
	                            echo '</span>';
	                        echo '</p>';*/
							echo '<p>';
	                        	echo Form::label('weight', 'Peso');
								echo '<span class="field">';
								if($cerda->IdEstado == Helpers_Estado::getEndStatus()->Id){
									echo Form::input('weight', $cerda->Peso,
										array('type' => 'text', 'id' => 'weight', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('weight', $cerda->Peso, array('type' => 'text', 'id' => 'weight', 'class' => 'smallinput'));	
								}
	                            echo '</span>';
	                        echo '</p>';
							echo '<p>';
                            	echo Form::label('obs', 'Observaciones');
                            	echo '<span class="field">';
								if($cerda->IdEstado == Helpers_Estado::getEndStatus()->Id){
                            		echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80" style="background-color: #DDDDDD" readonly></textarea>';
								}
								else{
									echo '<textarea name="obs" id="obs" class="longinput" rows="5" cols="80"></textarea>';
								}
								echo '</span>';
	                        echo '</p>';
	                        
	                        echo '<p class="stdformbutton">';
								if($cerda->IdEstado == Helpers_Estado::getEndStatus()->Id){
	                        		echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2', 'style' => 'background-color: #DDDDDD; color: #333333;', 'disabled'));
								}
								else{
									echo Form::button('btnsave', 'Guardar', array('class' => 'submit radius2'));
								}
	                        echo '</p>';
                    	echo Form::close();
						?>

						<div class="contenttitle radiusbottom0">
		                	<h2 class="table"><span>Modificaciones</span></h2>
		                </div><!--contenttitle-->
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <colgroup>
		                        <col class="con0" />
		                        <col class="con1" />
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th class="head0">Fecha de modificacion</th>
		                            <th class="head1">Estado</th>
		                            <th class="head0">Peso</th>
		                            <th class="head1">Observaciones</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th class="head0">Fecha de modificacion</th>
		                            <th class="head1">Estado</th>
		                            <th class="head0">Peso</th>
		                            <th class="head1">Observaciones</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($audits)){ 
			                    		foreach($audits as $audit){
			                    		echo '<tr>';
				                            echo '<td>'.date('d-m-Y H:i:s', strtotime($audit->Fecha)).'</td>';
				                            echo '<td>'.$audit->Estado.'</td>';
				                            echo '<td>'.$audit->Peso.'</td>';
											echo '<td>'.$audit->Observaciones.'</td>';
				                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
		                
		                <br clear="all" /><br />
		            
		            	<div class="contenttitle radiusbottom0">
		                	<h2 class="table"><span>Servicios</span></h2>
		                </div><!--contenttitle-->
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <colgroup>
		                        <col class="con0" />
		                        <col class="con1" />
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th class="head0">Fecha de servicio</th>
		                            <th class="head1">Macho</th>
		                            <th class="head0">Probable fecha de celo 21</th>
		                            <th class="head1">Probable fecha de celo 42</th>
		                            <th class="head0">Probable fecha de parto</th>
		                            <th class="head1">Observaciones</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th class="head0">Fecha de servicio</th>
		                            <th class="head1">Macho</th>
		                            <th class="head0">Probable fecha de celo 21</th>
		                            <th class="head1">Probable fecha de celo 42</th>
		                            <th class="head0">Probable fecha de parto</th>
		                            <th class="head1">Observaciones</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($servicios)){ 
			                    		foreach($servicios as $servicio){
			                    		echo '<tr>';
				                            echo '<td>'.date('d-m-Y H:i:s', strtotime($servicio->FechaServicio)).'</td>';
				                            echo '<td>'.$servicio->Macho.'</td>';
				                            echo '<td>'.date('d-m-Y', strtotime($servicio->ProbableFechaCelo21)).'</td>';
											echo '<td>'.date('d-m-Y', strtotime($servicio->ProbableFechaCelo42)).'</td>';
											echo '<td>'.date('d-m-Y', strtotime($servicio->ProbableFechaParto)).'</td>';
											echo '<td>'.$servicio->Observaciones.'</td>';
				                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
		                
		                <br clear="all" /><br />
	                
		                <div class="contenttitle radiusbottom0">
		                	<h2 class="table"><span>Repeticiones de celo</span></h2>
		                </div><!--contenttitle-->
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <colgroup>
		                        <col class="con0" />
		                        <col class="con1" />
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th class="head0">Fecha de repeticion de celo</th>
		                            <th class="head1">Fecha de servicio</th>
		                            <th class="head0">Fecha probable de celo 21</th>
		                            <th class="head1">Fecha probable de celo 42</th>
		                            <th class="head0">Observaciones</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th class="head0">Fecha de repeticion de celo</th>
		                            <th class="head1">Fecha de servicio</th>
		                            <th class="head0">Fecha probable de celo 21</th>
		                            <th class="head1">Fecha probable de celo 42</th>
		                            <th class="head0">Observaciones</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($reps)){
			                    		foreach($reps as $rep){
				                    		echo '<tr>';
					                            echo '<td>'.date('d-m-Y H:i:s', strtotime($rep->Fecha)).'</td>';
												echo '<td>'.date('d-m-Y H:i:s', strtotime($rep->FechaServicio)).'</td>';
					                            echo '<td>'.date('d-m-Y', strtotime($rep->ProbableFechaCelo21)).'</td>';
												echo '<td>'.date('d-m-Y', strtotime($rep->ProbableFechaCelo42)).'</td>';
												echo '<td>'.$rep->Observaciones.'</td>';
					                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
		                
		                <br clear="all" /><br />
		                
		                <div class="one_half">
			                <div class="contenttitle radiusbottom0">
			                	<h2 class="table"><span>Partos</span></h2>
			                </div><!--contenttitle-->
			                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
			                    <colgroup>
			                        <col class="con0" />
			                        <col class="con1" />
			                    </colgroup>
			                    <thead>
			                        <tr>
			                            <th class="head0">Fecha de parto</th>
			                            <th class="head1">Vivos</th>
			                            <th class="head0">Muertos</th>
			                            <th class="head1">Momificados</th>
			                            <th class="head0">Total</th>
			                            <th class="head1">Observaciones</th>
			                        </tr>
			                    </thead>
			                    <tfoot>
			                        <tr>
			                            <th class="head0">Fecha de parto</th>
			                            <th class="head1">Vivos</th>
			                            <th class="head0">Muertos</th>
			                            <th class="head1">Momificados</th>
			                            <th class="head0">Total</th>
			                            <th class="head1">Observaciones</th>
			                        </tr>
			                    </tfoot>
			                    <tbody>
			                    	<?php
			                    		if(isset($partos)){ 
				                    		foreach($partos as $parto){
				                    		echo '<tr>';
					                            echo '<td>'.date('d-m-Y H:i:s', strtotime($parto->Fecha)).'</td>';
					                            echo '<td>'.$parto->Vivos.'</td>';
					                            echo '<td>'.$parto->Muertos.'</td>';
												echo '<td>'.$parto->Momificados.'</td>';
												echo '<td>'.($parto->Vivos + $parto->Muertos + $parto->Momificados).'</td>';
												echo '<td>'.$parto->Observaciones.'</td>';
					                        echo '</tr>';
											}
			                    		}
									?>
			                    </tbody>
			                </table>
			            </div><!--one half-->
			            
			            <div class="one_half last">
			                <div class="contenttitle radiusbottom0">
			                	<h2 class="table"><span>Modificaciones en lactancia</span></h2>
			                </div><!--contenttitle-->
			                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
			                    <colgroup>
			                        <col class="con0" />
			                        <col class="con1" />
			                    </colgroup>
			                    <thead>
			                        <tr>
			                            <th class="head0">Fecha de modificacion</th>
			                            <th class="head1">Fecha de parto</th>
			                            <th class="head0">Adoptados</th>
			                            <th class="head1">Muertos en lactancia</th>
			                            <th class="head0">Total</th>
			                            <th class="head1">Observaciones</th>
			                        </tr>
			                    </thead>
			                    <tfoot>
			                        <tr>
			                            <th class="head0">Fecha de modificacion</th>
			                            <th class="head1">Fecha de parto</th>
			                            <th class="head0">Adoptados</th>
			                            <th class="head1">Muertos en lactancia</th>
			                            <th class="head0">Total</th>
			                            <th class="head1">Observaciones</th>
			                        </tr>
			                    </tfoot>
			                    <tbody>
			                    	<?php
			                    		if(isset($lactancias)){ 
				                    		foreach($lactancias as $lactancia){
				                    		echo '<tr>';
					                            echo '<td>'.date('d-m-Y H:i:s', strtotime($lactancia->Fecha)).'</td>';
												echo '<td>'.date('d-m-Y H:i:s', strtotime($lactancia->FechaParto)).'</td>';
					                            echo '<td>'.$lactancia->Adoptados.'</td>';
												echo '<td>'.$lactancia->Muertos.'</td>';
												echo '<td>'.$lactancia->Total.'</td>';
												echo '<td>'.$lactancia->Observaciones.'</td>';
					                        echo '</tr>';
											}
			                    		}
									?>
			                    </tbody>
			                </table>
			            </div><!--one half last-->
			            
			            <br clear="all" /><br />
			            
		                <div class="contenttitle radiusbottom0">
		                	<h2 class="table"><span>Destetes</span></h2>
		                </div><!--contenttitle-->
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <colgroup>
		                        <col class="con0" />
		                        <col class="con1" />
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th class="head0">Fecha de destete</th>
		                            <th class="head1">Lechones</th>
		                            <th class="head0">Dias</th>
		                            <th class="head1">Peso total</th>
		                            <th class="head0">Peso promedio por unidad</th>
		                            <th class="head1">Observaciones</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th class="head0">Fecha de destete</th>
		                            <th class="head1">Lechones</th>
		                            <th class="head0">Dias</th>
		                            <th class="head1">Peso total</th>
		                            <th class="head0">Peso promedio por unidad</th>
		                            <th class="head1">Observaciones</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($destetes)){ 
			                    		foreach($destetes as $destete){
			                    		echo '<tr>';
				                            echo '<td>'.date('d-m-Y H:i:s', strtotime($destete->Fecha)).'</td>';
				                            echo '<td>'.$destete->Lechones.'</td>';
				                            echo '<td>'.$destete->Dias.'</td>';
											echo '<td>'.$destete->PesoTotal.'</td>';
											echo '<td>'.($destete->PesoTotal/$destete->Lechones).'</td>';
											echo '<td>'.$destete->Observaciones.'</td>';
				                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
		                
		                <br clear="all" /><br />
		                
		                <!--------CALENDAR------->
	                    <div class="contenttitle">
	                    	<h2 class="calendar"><span>Calendario</span></h2>
	                    </div><!--contenttitle-->
	                    <br />
	                    <?php include Kohana::find_file('views', '_calendarlegend'); ?>
	                    <br />
	                    <?php
	                    	//-------------CALENDARIO---------------
	                    	//echo '<div class="content bigcalendar" id="cerdacalendar" name='.$cerda->Id.'></div>';
						?>
						<br/>
						
						<div class="contenttitle">
	                    	<h2 class="chart"><span>Ultimas variaciones de peso (max 20)</span></h2>
	                    </div><!--contenttitle-->
	                    <br />
	                    <!-----------------VARIACIONES DE PESO----------->
						<!--<div id="cerdachart" style="height:300px; margin-right: 30px"></div>-->
						
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