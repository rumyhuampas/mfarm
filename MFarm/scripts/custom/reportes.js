jQuery(document).ready(function(){
	/***** DATEPICKER *****/
	jQuery('#datepicker').datepicker({
		dateFormat: 'dd-mm-yy',
	    onSelect: function(dateText, inst) {
	    var d = new Date();
    	var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	    	jQuery('#fielddate').val(dateText + " " + time);
	    }
	});
	
	jQuery('#datepicker2').datepicker({
		dateFormat: 'dd-mm-yy',
	    onSelect: function(dateText, inst) {
	    var d = new Date();
    	var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	    	jQuery('#fielddate2').val(dateText + " " + time);
	    }
	});
});