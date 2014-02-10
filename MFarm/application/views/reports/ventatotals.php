<?php include Kohana::find_file('views', 'reports/_header'); ?>

<body class="loggedin">
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
        <div class="mainwrapperinner">
        
        <div class="maincontent noright noleft">
            <div class="maincontentinner">               
                     
                <div class="content">

                        <div class="contenttitle">
                            <h2 class="form"><span>Totales de Ventas</span></h2>
                        </div><!--contenttitle-->
                            
                        <br clear="all" />
                    
                        <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                            <thead>
                                <tr>                                    
                                    <th class="head0">Tipo</th>
                                    <th class="head0">Valor</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="head0">Tipo</th>
                                    <th class="head0">Valor</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    if(isset($_res)){
                                        foreach($_res as $row){
                                            echo '<tr>';
                                            echo '<td>'.$row['key'].'</td>';
                                            echo '<td>$ '.$row['sales'].'</td>';
                                            echo '<td class="center">';
                                            echo '</td>';
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