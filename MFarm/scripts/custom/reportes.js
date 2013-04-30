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
	    onSelect: function(dateText, inst) {
	    	var d = new Date();
	    	jQuery('#fielddate').val(dateText);
	    }
	});
	
	jQuery('#datepicker2').datepicker({
		dateFormat: 'dd-mm-yy',
	    onSelect: function(dateText, inst) {
	    	var d = new Date();
	    	jQuery('#fielddate2').val(dateText);
	    }
	});
});