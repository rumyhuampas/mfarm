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
                                    <th class="head1">Valor</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="head0">Tipo</th>
                                    <th class="head1">Valor</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    if(isset($_totals)){
                                        foreach($_totals as $total){
                                            echo '<tr>';
                                            echo '<td>'.$total['key'].'</td>';
                                            echo '<td>$ '.$total['sales'].'</td>';
                                            echo '<td class="center">';
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        <br clear="all" />
                        
                        <div class="contenttitle">
                            <h2 class="form"><span>Detalle del ultimo mes</span></h2>
                        </div><!--contenttitle-->
                            
                        <br clear="all" />
                    
                        <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                            <thead>
                                <tr>                                    
                                    <th class="head0">Fecha</th>
                                    <th class="head1">Nombre</th>
                                    <th class="head0">Total</th>
                                    <th class="head1">Cantidad</th>
                                    <th class="head0">Detalle</th>
                                    <th class="head1">PUnit</th>
                                    <th class="head0">TotalUnit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="head0">Fecha</th>
                                    <th class="head1">Nombre</th>
                                    <th class="head0">Total</th>
                                    <th class="head1">Cantidad</th>
                                    <th class="head0">Detalle</th>
                                    <th class="head1">PUnit</th>
                                    <th class="head0">TotalUnit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    if(isset($_sales)){
                                        echo '<tr>';
                                        echo '<td>'.count($_sales).'</td>';
                                        echo '</tr>';
                                        foreach($_sales as $sale){
                                            echo '<tr>';
                                            echo '<td>'.$sale['fecha'].'</td>';
                                            echo '<td>'.$sale['nombre'].'</td>';
                                            echo '<td style="font-weight: bold;">$ '.$sale['total'].'</td>';
                                            echo '<td></td>';
                                            echo '<td></td>';
                                            echo '<td></td>';
                                            echo '<td></td>';
                                            echo '</tr>';
                                            foreach($sale['detail'] as $detail){
                                                echo '<tr>';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td>'.$detail['cant'].'</td>';
                                                echo '<td>'.$detail['detalle'].'</td>';
                                                echo '<td>$ '.$detail['punit'].'</td>';
                                                echo '<td>$ '.$detail['totalunit'].'</td>';
                                                echo '</tr>';
                                            }
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