jQuery(document).ready(function(){

	function showTooltip(x, y, contents) {
		jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
			position: 'absolute',
			display: 'none',
			top: y + 5,
			left: x + 5
		}).appendTo("body").fadeIn(200);
	}
	
	jQuery.post( 
	    '/mfarm/home/getlastbirthspercentage/',
	    {amount: 10},
	    function( data ){
	    	data = JSON.parse(data);
	    	var plot = jQuery.plot(jQuery("#homebirthchart"),
			   [ { data: data, label: "% vivos", color: "#069"}/*, { data: html5, label: "HTML5(x)", color: "#00a388"}*/ ], {				   
				   series: {
					   lines: { show: true, lineWidth: 1, fill: true, fillColor: { colors: [ { opacity: 0.1 }, { opacity: 0.5 } ] } },
					   points: { show: true, radius: 2 }, shadowSize: 0
				
				   },
				   legend: { position: 'nw'},
				   grid: { hoverable: true, clickable: true, labelMargin: 5, borderWidth: 1, borderColor: '#bbb' },
				   yaxis: { show: true, min: 0, max: 100 },
				 });
				 
			var previousPoint = null;
			jQuery("#homebirthchart").bind("plothover", function (event, pos, item) {
				jQuery("#x").text(pos.x.toFixed(2));
				jQuery("#y").text(pos.y.toFixed(2));
				
				if(item) {
					if (previousPoint != item.dataIndex) {
						previousPoint = item.dataIndex;
							
						jQuery("#tooltip").remove();
						var x = item.datapoint[0].toFixed(2),
						y = item.datapoint[1].toFixed(2);
							
						//showTooltip(item.pageX, item.pageY,	item.series.label + ": " + x + " = " + y);
						showTooltip(item.pageX, item.pageY,	y + "%");
					}
				
				} else {
				   jQuery("#tooltip").remove();
				   previousPoint = null;            
				}
			
			});
			
			jQuery("#homebirthchart").bind("plotclick", function (event, pos, item) {
				if (item) {
					//jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
					//plot.highlight(item.series, item.datapoint);
				}
			});
	    }
    );
    
    jQuery.post( 
	    '/mfarm/home/getlastbirthsdata/',
	    {amount: 10},
	    function( data ){
	    	data = JSON.parse(data);
	    	var muertos = data['muertos'];
	    	var momif = data['momif'];
	    	var vivos = data['vivos'];
	    	var porc = Math.round((vivos * 100) / (vivos+muertos+momif));
	    	jQuery("#homebirthporc").text(porc + '%');
	    	jQuery("#homebirthmuertos").text(muertos);
	    	jQuery("#homebirthmomif").text(momif);
	    	jQuery("#homebirthvivos").text(vivos);
	    }
    );
});