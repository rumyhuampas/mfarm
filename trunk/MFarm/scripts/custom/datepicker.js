jQuery(document).ready(function(){
	/***** DATEPICKER *****/
	$('#datepicker').datepicker({
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
});