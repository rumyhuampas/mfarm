jQuery(document).ready(function(){
	var idcerda = jQuery('#cerdacalendar').attr('name');
	if(typeof(idcerda) != 'undefined'){
		/*********** CERDA CALENDAR *************/
		jQuery.post( 
		    '/mfarm/abmcerdas/addevent/',
		    {IdCerda: idcerda},
		    function( events ){
		    events = JSON.parse(events);
		    	jQuery.each(events, function(i, data){
					var eventObject = data;
			    	var originalEventObject = eventObject;

					// we need to copy it, so that multiple events don't have a reference to the same object
					var copiedEventObject = jQuery.extend({}, originalEventObject);
					
					// assign it the date that was reported
					copiedEventObject.start = data.date; //MM/dd/yyyy
					copiedEventObject.allDay = true;
					
					// render the event on the calendar
					// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
					jQuery('#cerdacalendar').fullCalendar('renderEvent', copiedEventObject, true);
				});
	    	}
	    );
	    
	    /************ CERDA  PESO CHART *************/
	   jQuery.post( 
		    '/mfarm/abmcerdas/getcerdachartdata/',
		    {IdCerda: idcerda},
		    function( data ){
		    	data = JSON.parse(data);
		    	var plot = jQuery.plot(jQuery("#cerdachart"),
				   [ { data: data, label: "Peso", color: "#ff6138"}/*, { data: html5, label: "HTML5(x)", color: "#00a388"}*/ ], {
					   series: {
						   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
						   points: { show: true }
					   },
					   legend: { position: 'nw'},
					   grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
					   yaxis: { min: 0, max: 200 }
					 });
					 
				var previousPoint = null;
				jQuery("#cerdachart").bind("plothover", function (event, pos, item) {
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
				
				jQuery("#cerdachart").bind("plotclick", function (event, pos, item) {
					if (item) {
						//jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
						//plot.highlight(item.series, item.datapoint);
					}
				});
		    }
	    );
	}
	
	jQuery('#serviciolink').click(function(){
		jQuery('#servicioform').submit();
	});
	jQuery('#replink').click(function(){
		jQuery('#repform').submit();
	});
	jQuery('#partolink').click(function(){
		jQuery('#partoform').submit();
	});
	jQuery('#lactancialink').click(function(){
		jQuery('#lactanciaform').submit();
	});
	jQuery('#destetelink').click(function(){
		jQuery('#desteteform').submit();
	});
	
	/------- WIDGET LIST HOVER --------/
	jQuery('.formwidgetlist a').hover(function(){
		jQuery(this).switchClass('default', 'hover');
	},function(){
		jQuery(this).switchClass('hover', 'default');
	});
	
	function showTooltip(x, y, contents) {
		jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
			position: 'absolute',
			display: 'none',
			top: y + 5,
			left: x + 5
		}).appendTo("body").fadeIn(200);
	}
	
	/******* CONFIRM DIALOG *********
	jQuery('#formeditcerda').submit(function(){
		if(jQuery('#cerdaestado').val() == '4'){
			jQuery.confirmdialog({
	            'title'     : 'Confirmar',
	            'message'   : 'Seguro que quiere matar la cerda?<br />Esta operacion no puede modificarse luego.',
	            'buttons'   : {
	                'Si'   : {
	                    'class' : '',
	                    'action': function(){
	                    	jQuery('#formeditcerda').submit();
	                        //$(location).attr('href', dialog.attr('href'));
	                    }
	                },
	                'No'    : {
	                    'class' : '',
	                    'action': function(){}
	                }
	            }
	        });
		}
		return false;
	});*/
});