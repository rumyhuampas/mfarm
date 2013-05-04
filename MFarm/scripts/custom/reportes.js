jQuery(document).ready(function(){
	if (jQuery('#number').val() != ''){
		jQuery('.searchresults').slideDown();
		//loadcharts();
	}
	else{
		jQuery('.searchresults').slideUp();
	}
	
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
	    	jQuery('#fielddate').val(dateText);
	    	jQuery('#datepicker').datepicker("setDate", dateText);
	    }
	});
	
	jQuery('#datepicker2').datepicker({
		dateFormat: 'dd-mm-yy',
		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
	    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
	    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
	    dayNamesShort: ['Dom','Lun','Mar','Mie','Juv','Vie','Sab'],
	    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
	    weekHeader: 'Sm',
	    onSelect: function(dateText, inst) {
	    	var d = new Date();
	    	jQuery('#fielddate2').val(dateText);
	    }
	});
});