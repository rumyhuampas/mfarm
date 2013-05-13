jQuery(document).ready(function(){
	loadhomecalendar(jQuery('#new').is(':checked'), jQuery('#modif').is(':checked'),
		jQuery('#servicio').is(':checked'),
    	jQuery('#celo21').is(':checked'), jQuery('#celo42').is(':checked'),
    	jQuery('#probparto').is(':checked'), jQuery('#parto').is(':checked'),
    	jQuery('#destete').is(':checked')); 
	
	jQuery(".calendarcheck").change(function() {
	    loadhomecalendar(jQuery('#new').is(':checked'), jQuery('#modif').is(':checked'),
	    	jQuery('#servicio').is(':checked'),
	    	jQuery('#celo21').is(':checked'), jQuery('#celo42').is(':checked'),
	    	jQuery('#probparto').is(':checked'), jQuery('#parto').is(':checked'),
	    	jQuery('#destete').is(':checked')); 
	});
	
	function loadhomecalendar(newcerda, mod, serv, c21, c42, ppto, pto, dest){
		jQuery('#homecalendar').fullCalendar('removeEvents');
		jQuery.post( 
		    '/mfarm/home/addevent/',
		    {newcerda: newcerda, modif: mod, servicio: serv, celo21: c21, celo42: c42, probparto: ppto, parto: pto, destete: dest},
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
					jQuery('#homecalendar').fullCalendar('renderEvent', copiedEventObject, true);
				});
	    	}
	    );
	}
	
	/------- WIDGET LIST HOVER --------/
	jQuery('.widgetlist a').hover(function(){
		jQuery(this).switchClass('default', 'hover');
	},function(){
		jQuery(this).switchClass('hover', 'default');
	});
});