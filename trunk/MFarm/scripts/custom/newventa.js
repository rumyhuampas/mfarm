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
	
	jQuery('#btnadd').click(function(){
		var cant = jQuery('#cant').val();
		var det = jQuery('#det').val();
		var punit = jQuery('#punit').val();
		var total = jQuery('#totalprod').val();
		jQuery('#tableprod > tbody:last').append(
			'<tr>' +
			'<td>' + cant + '</td>' +
			'<td>' + det + '</td>' +
			'<td>' + punit + '</td>' +
			'<td>' + total + '</td>' +
			'<td><span class="stdbtn" name="removeprod">Eliminar</span></td>' +
			'</tr>');
		jQuery('#cant').val('');
		jQuery('#det').val('');
		jQuery('#punit').val('');
	});
	
	function removeprod(){
		alert('test');
	}
	
	jQuery('[name=removeprod]').click(function(){
		alert('click');
		/*var tr = $(this).closest('tr');
		tr.css("background-color","#FF3700");

        tr.fadeOut(400, function(){
            tr.remove();
        });
        return false;*/
	});
});