<?php include Kohana::find_file('views', 'reports/_header'); ?>

<body style="border: 0 none; margin: 0; padding: 0; vertical-align: baseline; color: #666666; font-size: 12px;">
        
    <!-- START OF MAIN CONTENT -->
    <div style="margin: 10px; position: relative;">
     	<div class="mainwrapperinner">
        
        <div class="maincontent noright">
        	<div class="maincontentinner">               
            	                
                <div style="background-color:#FFFFFF; border: 1px solid #DDDDDD; border-radius: 0 2px 2px 2px; line-height: 21px; margin-top: -1px; padding: 20px;">
                	
						<div style="background-color: #333333; border-radius: 2px 2px 0 0;">
		                	<h2 style="color: #FFFFFF; font-size: 18px; font-weight: normal; letter-spacing: 0.8px; padding: 0 0 0 10px;">
							    <span style="background-color: #333333; border-left: 1px solid #444444; border-radius: 2px 2px 2px 2px;
								    display: block; margin-left: 25px; padding: 6px 0 6px 10px;">Modificaciones</span></h2>
		                </div>
		                
		                <br clear="all" />
		                
		                <table cellpadding="0" cellspacing="0" border="0" id="table2" style="width: 100%;">
		                    <thead>
		                        <tr>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
		                            	padding: 5px 10px; border-left: 1px solid #DDDDDD; background-color: #EEEEEE; border-top: 1px solid #CCCCCC">Fecha de modificacion</th>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
    									padding: 5px 10px; background-color: #DDDDDD; border-top: 1px solid #CCCCCC">Estado</th>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
		                            	padding: 5px 10px; border-left: 1px solid #DDDDDD; background-color: #EEEEEE; border-top: 1px solid #CCCCCC">Peso</th>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
    									padding: 5px 10px; background-color: #DDDDDD; border-top: 1px solid #CCCCCC">Observaciones</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
		                            	padding: 5px 10px; border-left: 1px solid #DDDDDD; background-color: #EEEEEE;">Fecha de modificacion</th>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
    									padding: 5px 10px; background-color: #DDDDDD;">Estado</th>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
		                            	padding: 5px 10px; border-left: 1px solid #DDDDDD; background-color: #EEEEEE;">Peso</th>
		                            <th style="line-height: 16px; vertical-align: middle; border-bottom: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC;
    									padding: 5px 10px; background-color: #DDDDDD;">Observaciones</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                    	<?php
		                    		if(isset($rows)){ 
			                    		foreach($rows as $row){
			                    		echo '<tr>';
				                            echo '<td>'.$row->Fecha.'</td>';
				                            echo '<td>'.$row->Estado.'</td>';
				                            echo '<td>'.$row->Peso.'</td>';
											echo '<td>'.$row->Observaciones.'</td>';
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