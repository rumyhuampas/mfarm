<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/newdestete.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmdestetes', 'action' => 'new')); ?>>Alta de destete</a></li>
                </ul><!--maintabmenu-->                
            	                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_message'); ?>
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span>Alta de destete</span></h2>
                    </div><!--contenttitle-->
                    
                    <?php
                    echo Form::open('abmdestetes/search', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formsearchcerda'));
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
						echo Form::open('abmdestetes/new', array('method' => 'POST', 'class' => 'stdform', 'id' => 'formnewdestete'));

							$EstadoPostParto = Helpers_Const::ESTPOSTPARTO;
							$IdEstadoPostParto = Helpers_Estado::get($EstadoPostParto)->Id;
							if($cerda->IdEstado != $IdEstadoPostParto){
								echo '<div class="smallnotification noimgmsgerror" style="margin-left: 220px;">';
							    	echo '<a class="close"></a>';
							    	echo '<p>La cerda no esta en postparto.</p>';
								echo '</div>';
							}
						
							echo Form::hidden('IdCerda', $cerda->Id);
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
								echo Form::label('lechones', 'Lechones');
								echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoPostParto){
									echo Form::input('lechones', '', array('type' => 'text', 'id' => 'lechones', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('lechones', '', array('type' => 'text', 'id' => 'lechones', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('days', 'Dias');
								echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoPostParto){
									echo Form::input('days', '', array('type' => 'text', 'id' => 'days', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('days', '', array('type' => 'text', 'id' => 'days', 'class' => 'smallinput'));
								}
								echo '</span>';
	                        echo '</p>';
							echo '<p>';
								echo Form::label('weight', 'Peso total');
								echo '<span class="field">';
								if($cerda->IdEstado != $IdEstadoPostParto){
									echo Form::input('weight', '', array('type' => 'text', 'id' => 'weight', 'class' => 'smallinput', 'style' => 'background-color: #DDDDDD', 'readonly'));
								}
								else{
									echo Form::input('weight', '', array('type' => 'text', 'id' => 'weight', 'class' => 'smallinput'));
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
			                            echo '<td>'.$destete->Fecha.'</td>';
			                            echo '<td>'.$destete->Lechones.'</td>';
			                            echo '<td>'.$destete->Dias.'</td>';
										echo '<td>'.$destete->PesoTotal.'</td>';
										echo '<td>'.$destete->PesoProm.'</td>';
										echo '<td>'.$destete->Observaciones.'</td>';
			                        echo '</tr>';
									}
	                    		}
							?>
			                </tbody>
			            </table>
		                
		               	<br clear="all" /> 
	                <?php
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