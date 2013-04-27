<?php include Kohana::find_file('views', 'reports/_header'); ?>

<body style="border: 0 none; margin: 0; padding: 0; vertical-align: baseline; color: #666666; font-size: 12px;">
        
    <!-- START OF MAIN CONTENT -->
    <div style="margin: 10px; position: relative;">
     	<div class="mainwrapperinner">
        
        <div class="maincontent noright">
        	<div class="maincontentinner">               
            	                
                <div style="background-color:#FFFFFF; border: 1px solid #DDDDDD; border-radius: 0 2px 2px 2px; line-height: 21px; margin-top: -1px; padding: 20px;">
                	
						<div style="background-color: #333333; border-radius: 2px 2px 0 0;">
		                	<h2 style="color: #FFFFFF; font-size: 14px; font-weight: normal; letter-spacing: 0.8px; padding: 0 0 0 10px;">
							    <span style="background-color: #333333; border-left: 1px solid #444444; border-radius: 2px 2px 2px 2px;
								    display: block; margin-left: 25px; padding: 6px 0 6px 10px;"><?php echo $dato; ?></span></h2>
		                </div>
		                
		                <br clear="all" />
		                
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" style="width: 100%;">
		                    <thead>
		                        <tr>
		                        	<?php
		                        	for($i=0; $i<count($colTitles); $i++){
		                        		if($i%2 == 0){
		                        			echo '<th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC;
		                        				border-right: 1px solid #CCCCCC; padding: 5px 10px; border-left: 1px solid #DDDDDD;
		                        				background-color: #EEEEEE; border-top: 1px solid #CCCCCC">'.$colTitles[$i].'</th>';
		                        		}
										else{
											echo '<th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC;
												border-right: 1px solid #CCCCCC; padding: 5px 10px; background-color: #DDDDDD;
												border-top: 1px solid #CCCCCC">'.$colTitles[$i].'</th>';
										}
		                        	}
		                        	?>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <?php 
		                        	for($i=0; $i<count($colTitles); $i++){
		                        		if($i%2 == 0){
		                        			echo '<th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC;
		                        				border-right: 1px solid #CCCCCC; padding: 5px 10px; border-left: 1px solid #DDDDDD;
		                        				background-color: #EEEEEE; border-top: 1px solid #CCCCCC">'.$colTitles[$i].'</th>';
		                        		}
										else{
											echo '<th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC;
												border-right: 1px solid #CCCCCC; padding: 5px 10px; background-color: #DDDDDD;
												border-top: 1px solid #CCCCCC">'.$colTitles[$i].'</th>';
										}
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
				                            	echo '<td style="line-height: 16px;vertical-align: middle;
				                            		border-bottom: 1px solid #EEEEEE;border-right: 1px solid #EEEEEE;
				                            		padding: 8px 10px;border-left: 1px solid #DDDDDD;">'.$row[$colNames[$i]].'</td>';
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