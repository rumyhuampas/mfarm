jQuery(document).ready(function(){	
	/***** DATEPICKER *****/
	jQuery('#datepicker').datepicker({
		dateFormat: 'dd-mm-yy',
		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
	    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
	    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
	    dayNamesShort: ['Dom','Lun','Mar','Mie','Juv','Vie','Sab'],
	    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
	    weekHeader: 'Sm',
	    onSelect: function(dateText, inst) {
	    var d = new Date();
    	var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	    	jQuery('#fielddate').val(dateText + " " + time);
	    }
	});
	
	var idcerda = jQuery('#lactanciachart').attr('name');
	var idparto = jQuery('#lactanciachart').attr('partoid');
	if(typeof(idcerda) != 'undefined'){	    
	    /************ CERDA PARTOS CHART *************/
	   jQuery.post( 
		    '/mfarm/abmlactancias/getlactanciachartdata/',
		    {IdCerda: idcerda, IdParto: idparto},
		    function( data ){
		    	data = JSON.parse(data);
		    	var plot = jQuery.plot(jQuery("#lactanciachart"),
				   [ { data: data, label: "Total de lechones", color: "#ff6138"}/*, { data: html5, label: "HTML5(x)", color: "#00a388"}*/ ], {
					   series: {
						   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
						   points: { show: true }
					   },
					   legend: { position: 'nw'},
					   grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
					   yaxis: { min: -20, max: 20 }
					 });
					 
				var previousPoint = null;
				jQuery("#lactanciachart").bind("plothover", function (event, pos, item) {
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
				
				jQuery("#lactanciachart").bind("plotclick", function (event, pos, item) {
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