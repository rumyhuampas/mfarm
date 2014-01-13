<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/reportesdeventa.js" ?> type="text/javascript"></script>

<body class="loggedin">

    <?php include Kohana::find_file('views', '_headerbar'); ?>
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
        <div class="mainwrapperinner">
            
            <?php include Kohana::find_file('views', '_menu'); ?>
        
        <div class="maincontent noright">
            <div class="maincontentinner">
                
                <ul class="maintabmenu">
                    <li class="current"><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'ventas', 'action' => 'reportes')); ?>>Reportes de venta</a></li>
                </ul><!--maintabmenu-->
                                
                <div class="content">
                    
                    <div class="contenttitle">
                        <h2 class="chart"><span>Ventas y pagos ultimos meses</span></h2>
                    </div><!--contenttitle-->
                    <br />
                    <!-----------------VENTAS ULT MESES----------->
                    <div id="ventachart" style="height:400px; margin-right: 30px"></div>
                    
                    <div class="contenttitle">
                        <h2 class="form"><span>Totales</span></h2>
                    </div><!--contenttitle-->
                    <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                        <colgroup>
                            <col class="con0" />
                            <col class="con1" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="head0">Tipo</th>
                                <th class="head1">Valor</th>
                                <th class="head0">&nbsp;</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="head0">Tipo</th>
                                <th class="head1">Valor</th>
                                <th class="head0">&nbsp;</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
                            if(isset($totales)){ 
                                foreach($totales as $tot){
                                    echo '<tr>';
                                        echo '<td>'.$tot['key'].'</td>';
                                        echo '<td>$ '.$tot['sales'].'</td>';
                                        echo '<td class="center">';
                                            /*echo Form::open('ventas/printfactura', array('method' => 'POST', 'target' => '_blank', 'id' => 'formprintfactura'.$venta->Id));
                                                echo Form::hidden('ventaid', $venta->Id);
                                                echo '<a href="#" name="reprint">Imprimir factura</a>';
                                            echo Form::close();
                                            echo Form::open('ventas/printestadoventa', array('method' => 'POST', 'target' => '_blank', 'id' => 'formprintestadoventa'.$venta->Id));
                                                echo Form::hidden('ventaid', $venta->Id);
                                                echo '<a href="#" name="reprint">Imprimir estado de venta</a>';
                                            echo Form::close();
                                            echo '<a href='.URL::base().Route::get('default')
                                                ->uri(array('controller' => 'ventas', 'action' => 'addpago', 'id' => $venta->Id)).'>
                                                Agregar pago</a>';*/
                                        echo '</td>';
                                    echo '</tr>';
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                    
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <?php include Kohana::find_file('views', '_copyright'); ?>
            
        </div><!--maincontent-->
                        
        </div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
    <!-- END OF MAIN CONTENT -->
    

</body>

<?php include Kohana::find_file('views', '_footer'); ?>