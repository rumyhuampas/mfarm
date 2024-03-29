<div class="mainright">
	<div class="mainrightinner">
	
		<script src=<?php echo URL::base()."/scripts/custom/homerightpanel.js" ?> type="text/javascript"></script>
    	
        <div class="widgetbox">
        	<div class="title"><h2 class="chart"><span>Ultimos 10 partos</span></h2></div>
            <div class="chartbox widgetcontent">
				<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
					<div style="width:4px;height:0;border:5px solid #069;overflow:hidden"></div>
				</div><div style="padding-bottom:5px; display: inline-block;">% de cerdos vivos</div>
            	
            	<div id="homebirthchart" class="chartplace"></div>
                
                <div class="one_half">
                	<div class="analytics analytics2">
                        <small>% cerdos vivos</small>
                        <h1 id="homebirthporc"></h1>
                        <small></small>
                    </div><!--analytics-->
                </div><!--one_half-->
                
                <div class="one_half last">
                	
                    <div class="one_half">
                    	<div class="analytics">
                            <small>Muertos</small>
                            <h3 class="center" id="homebirthmuertos"></h3>
                        </div><!--analytics-->
                    </div><!--one_half-->
                    
                    <div class="one_half last">
                    	<div class="analytics textright">
                            <small class="block">Momificados</small>
                            <h3 class="center" id="homebirthmomif"></h3>
                        </div><!--analytics-->
                    </div><!--one_half last-->
                    <br clear="all" />
                    
                    <div class="analytics average margintop10">
                        Vivos <h3 id="homebirthvivos"></h3>
                    </div><!--analytics-->
                    
                </div><!--one_half-->
                                
                <br clear="all" />
                
            </div><!--widgetcontent-->
        </div><!--widgetbox-->
        
        <div class="widgetbox">
        	<div class="title"><h2 class="chart"><span>Ultimos 10 destetes</span></h2></div>
            <div class="chartbox widgetcontent">
            	<div style="width:14px; border:1px solid #ccc; padding:1px; display: inline-block;">
					<div style="width:4px;height:0;border:5px solid #cc0000;overflow:hidden"></div>
				</div><div style="padding-bottom:5px; display: inline-block;">Cant. de lechones</div>
				
            	<div id="homedestetechart" class="chartplace"></div>
            </div><!--widgetcontent-->
        </div><!--widgetbox-->
        
        <div class="widgetbox">
        	<div class="title"><h2 class="chart"><span>Machos con mas servicios</span></h2></div>
            <div class="chartbox widgetcontent">
            	<div id="homemachosservicioschart" class="chartplace"></div>
            	
            	<div class="analytics analytics2">
                    <small>Datos de los ultimos 30 dias</small>
                </div><!--analytics-->
            </div><!--widgetcontent-->
        </div><!--widgetbox-->
        
    </div><!--mainrightinner-->
</div><!--mainright-->