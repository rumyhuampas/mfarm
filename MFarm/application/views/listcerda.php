<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/listcerda.js" ?> type="text/javascript"></script>

<body class="loggedin">

	<?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        	<?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
        		
        		<ul class="maintabmenu">
        			<li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'list')); ?>>Cerdas</a></li>
        			<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'new')); ?>>Nueva cerda</a></li>
                	<li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmcerdas', 'action' => 'edit')); ?>>Modificar cerda</a></li>
                </ul><!--maintabmenu-->
            	                
                <div class="content">
					
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
									else{
										echo Form::open('abmcerdas/search', array('method' => 'POST', 'class' => 'stdform'));
	                            		echo Form::hidden('numbersearch', $cerda->Numero);
										echo '<a href="#" name="editcerda">Editar</a>';
										echo Form::close();
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