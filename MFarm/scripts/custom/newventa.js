jQuery(document).ready(function(){
	jQuery('#punit').focusout(function(){
		var punit = parseFloat(jQuery('#punit').val());
		var kilos = parseFloat(jQuery('#kilos').val());
		var total = punit * kilos;
		jQuery('#total').val(total);
	});
	jQuery('#kilos').focusout(function(){
		var punit = parseFloat(jQuery('#punit').val());
		var kilos = parseFloat(jQuery('#kilos').val());
		var total = punit * kilos;
		jQuery('#total').val(total);
	});
});