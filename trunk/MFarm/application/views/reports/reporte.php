<?php include Kohana::find_file('views', 'reports/_header'); ?>

<body class="loggedin">
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
        
        <div class="maincontent noright noleft">
        	<div class="maincontentinner">               
            	     
            	<div class="content">

	               	<?php 
	               	for($i=0; $i<count($tables); $i++){ ?>
	               		<div class="contenttitle">
	                    	<h2 class="form"><span><?php echo $tables[$i]->reportTitle; ?></span></h2>
	                    </div><!--contenttitle-->
			                
		                <br clear="all" />
	                
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
		                    <thead>
		                        <tr>
		                        	<?php 
		                        	for($j=0; $j<count($tables[$i]->colTitles); $j++){
		                        		$thclass = $j%2;
		                        		echo '<th class="head'.$thclass.'">'.$tables[$i]->colTitles[$j].'</th>';
		                        	}
		                        	?>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <?php
		                        	for($j=0; $j<count($tables[$i]->colTitles); $j++){
		                        		$thclass = $j%2;
		                        		echo '<th class="head'.$thclass.'">'.$tables[$i]->colTitles[$j].'</th>';
		                        	}
		                        	?>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($tables[$i]->rows)){
			                    		foreach($tables[$i]->rows as $row){
			                    		echo '<tr>';
											for($j=0; $j<count($tables[$i]->colNames); $j++){
				                            	echo '<td>'.$row[$tables[$i]->colNames[$j]].'</td>';
											}
				                        echo '</tr>';
										}
		                    		}
								?>
		                    </tbody>
		                </table>
		                <br clear="all" />
		            <?php } ?>
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', 'reports/_copyright'); ?>
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->    

</body>

<?php include Kohana::find_file('views', 'reports/_footer'); ?>