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
	
	var ventaid = jQuery('[name=_ventaid]');
	if(ventaid.attr('value') != undefined){
		jQuery('#formprintfactura' + ventaid.attr('value')).submit();	
	}
	
	jQuery('[name=reprint]').click (function ()
	{
		jQuery(this).closest("form").submit();
	});
});