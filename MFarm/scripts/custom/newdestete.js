jQuery(document).ready(function(){		
	var idcerda = jQuery('#destetechart').attr('name');
	if(typeof(idcerda) != 'undefined'){	    
	    /************ CERDA DESTETES CHART *************/
	   jQuery.post( 
		    '/mfarm/abmdestetes/getdestetechartdata/',
		    {IdCerda: idcerda},
		    function( data ){
		    	data = JSON.parse(data);
		    	var plot = jQuery.plot(jQuery("#destetechart"),
				   [ { data: data, label: "Total de lechones", color: "#ff6138"}/*, { data: html5, label: "HTML5(x)", color: "#00a388"}*/ ], {
					   series: {
						   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
						   points: { show: true }
					   },
					   legend: { position: 'nw'},
					   grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
					   yaxis: { min: 0, max: 20 }
					 });
					 
				var previousPoint = null;
				jQuery("#destetechart").bind("plothover", function (event, pos, item) {
					jQuery("#x").text(pos.x.toFixed(2));
					jQuery("#y").text(pos.y.toFixed(2));
					
					if(item) {
						if (previousPoint != item.dataIndex) {
							previousPoint = item.dataIndex;
								
							jQuery("#tooltip").remove();
							var x = item.datapoint[0].toFixed(2),
							y = item.datapoint[1].toFixed(2);
								
							//showTooltip(item.pageX, item.pageY,	item.series.label + ": " + x + " = " + y);
							showTooltip(item.pageX, item.pageY,	'Dia: ' + x + ' ' + item.series.label + ": " + y);
						}
					
					} else {
					   jQuery("#tooltip").remove();
					   previousPoint = null;            
					}
				
				});
				
				jQuery("#destetechart").bind("plotclick", function (event, pos, item) {
					if (item) {
						//jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
						//plot.highlight(item.series, item.datapoint);
					}
				});
		    }
	    );
	}
	
	function showTooltip(x, y, contents) {
		jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
			position: 'absolute',
			display: 'none',
			top: y + 5,
			left: x + 5
		}).appendTo("body").fadeIn(200);
	}
});