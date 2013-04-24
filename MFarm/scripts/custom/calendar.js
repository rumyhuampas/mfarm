jQuery(document).ready(function() {
		/* initialize the calendar */
		jQuery('.bigcalendar').fullCalendar({
			header: {
				left: 'month,agendaWeek,agendaDay',
				center: 'title',
				right: 'today, prev, next'
			},
			buttonText: {
				prev: '&laquo;',
				next: '&raquo;',
				prevYear: '&nbsp;&lt;&lt;&nbsp;',
				nextYear: '&nbsp;&gt;&gt;&nbsp;',
				today: 'hoy',
				month: 'mes',
				week: 'semana',
				day: 'dia'
			},
			monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
			monthNamesShort:["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],
			dayNames:["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],
			dayNamesShort:["Dom","Lun","Mar","Mie","Jue","Vie","Sab"],
			titleFormat:{month:"MMMM yyyy",week:"d[ yyyy] MMM{ '&#8212;' d [ MMM] yyyy}",day:"dddd, d MMM, yyyy"},
			editable: false,
			droppable: false, // this allows things to be dropped onto the calendar !!!
			/*drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = jQuery(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = jQuery.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				jQuery('#homecalendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				
				jQuery(this).remove();
				
			}*/
		});
});
