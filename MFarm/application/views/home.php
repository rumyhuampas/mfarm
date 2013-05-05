<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/home.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent">
        	<div class="maincontentinner">
            	
                <ul class="maintabmenu">
                	<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home')); ?> >Inicio</a></li>
                </ul><!--maintabmenu-->
                
                <div class="content">
                	
                	<?php include Kohana::find_file('views', '_hometabmenu'); ?>
                    
                    <br clear="all" /><br />
                    
                    <!--------CALENDAR------->
                    <div class="contenttitle">
                    	<h2 class="calendar"><span>Calendario</span></h2>
                    </div><!--contenttitle-->
                    <br />
                    <?php include Kohana::find_file('views', '_calendarlegend'); ?>
                    <br />
                    <div class="bigcalendar" id="homecalendar"></div>
            
                    <br /><br />
                    
                    <div class="one_half">
                    
                    	<div class="widgetbox">
                        <div class="title"><h2 class="tabbed"><span>Ultimas modificaciones</span></h2></div>
                        <div class="widgetcontent announcement">
                        	<?php 
                        		foreach($lastmodif as $lm){
                        			echo '<p>';
		                            echo '<span class="radius2">'.$lm->Fecha.'</span> <br />';
									echo 'Cerda: <b>'.$lm->Numero.'</b><br />';
									echo 'Estado: <b>'.$lm->Estado.'</b> - Peso: <b>'.$lm->Peso.'</b>';
		                            echo '</p>';
								}
                        	?>
                        </div><!--widgetcontent-->
                    </div><!--widgetbox-->
                        
                    </div><!--one_half-->
                    
                    <div class="one_half last">
                    
                        <div class="widgetbox">
                        <div class="title"><h2 class="tabbed"><span>Mayores pesos</span></h2></div>
                        <div class="widgetcontent padding0 statement">
                           <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
                           		<colgroup>
                                    <col class="con0" />
                                    <col class="con1" />
                                    <col class="con0" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="head0">Cerda</th>
                                        <th class="head1">Peso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
		                        		for($i=0; $i<count($maxweights); $i++){
		                        			echo '<tr>';
				                            echo '<td>'.$maxweights[$i]['Numero'].'</td>';
											echo '<td>'.$maxweights[$i]['Peso'].'</td>';
				                            echo '</tr>';
										}
		                        	?>
                                </tbody>
                            </table>
                        </div><!--widgetcontent-->
                    </div><!--widgetbox-->                        
                    </div><!--one_half-->
                    
                    <br clear="all" />
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', '_copyright'); ?>
            
        </div><!--maincontent-->
        
        <?php include Kohana::find_file('views', '_homerightpanel'); ?>
                
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>