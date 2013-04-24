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
    		var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	    	jQuery('#fielddate').val(dateText + " " + time);
	    }
	});
});