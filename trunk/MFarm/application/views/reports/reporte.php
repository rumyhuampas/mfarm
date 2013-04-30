<?php include Kohana::find_file('views', 'reports/_header'); ?>

<body class="loggedin">
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
        
        <div class="maincontent noright noleft">
        	<div class="maincontentinner">               
            	     
            	<div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="form"><span><?php echo $pdftitle; ?></span></h2>
                    </div><!--contenttitle-->
		                
	                <br clear="all" />
	                
	                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
	                    <thead>
	                        <tr>
	                        	<?php
	                        	for($i=0; $i<count($colTitles); $i++){
	                        		$thclass = $i%2;
	                        		echo '<th class="head'.$thclass.'">'.$colTitles[$i].'</th>';
	                        	}
	                        	?>
	                        </tr>
	                    </thead>
	                    <tfoot>
	                        <tr>
	                            <?php
	                        	for($i=0; $i<count($colTitles); $i++){
	                        		$thclass = $i%2;
	                        		echo '<th class="head'.$thclass.'">'.$colTitles[$i].'</th>';
	                        	}
	                        	?>
	                        </tr>
	                    </tfoot>
	                    <tbody>
	                    	<?php
	                    		if(isset($rows)){
		                    		foreach($rows as $row){
		                    		echo '<tr>';
										for($i=0; $i<count($colNames); $i++){
			                            	echo '<td>'.$row[$colNames[$i]].'</td>';
										}
			                        echo '</tr>';
									}
	                    		}
							?>
	                    </tbody>
	                </table>

                	<br clear="all" />
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', 'reports/_copyright'); ?>
            
        </div><!--maincontent-->
                        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->    

</body>

<?php include Kohana::find_file('views', 'reports/_footer'); ?>