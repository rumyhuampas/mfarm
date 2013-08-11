jQuery(document).ready(function(){
	
	jQuery('#dnisearch').focus();
	
	jQuery('#btnsave').click(function(){
		var table = [];
		jQuery('#tableprod tbody tr').each(function(index){
			table.push([
				jQuery(this).find('td[name=tdcantprod]').html(),
				jQuery(this).find('td[name=tddetprod]').html(),
				jQuery(this).find('td[name=tdpunitprod]').html(),
				jQuery(this).find('td[name=tdtotalprod]').html()
				]);
		});
		jQuery.post( 
	    	'/mfarm/ventas/new/',
	    	{
		    	date: jQuery('[name=date]').val(),
		    	cuil: jQuery('[name=cuil]').val(),
		    	total: jQuery('[name=total]').val(),
		    	prodtable: table
	    	},
		    function( data ){
		    	window.location.replace(data);
		    }
    	);
	});
	
	jQuery('#punit').focusout(function(){
		var punit = parseFloat(jQuery('#punit').val());
		var cant = parseFloat(jQuery('#cant').val());
		var total = (punit * cant).toFixed(2);
		jQuery('#totalprod').val(total);
	});
	jQuery('#cant').focusout(function(){
		var punit = parseFloat(jQuery('#punit').val());
		var cant = parseFloat(jQuery('#cant').val());
		var total = (punit * cant).toFixed(2);
		jQuery('#totalprod').val(total);
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
			'<td name="tdcantprod">' + cant + '</td>' +
			'<td name="tddetprod">' + det + '</td>' +
			'<td name="tdpunitprod">' + punit + '</td>' +
			'<td name="tdtotalprod">' + total + '</td>' +
			'<td align="center"><span class="stdbtn" name="removeprod">Eliminar</span></td>' +
			'</tr>');
		jQuery('#cant').val('');
		jQuery('#det').val('');
		jQuery('#punit').val('');
		jQuery('#totalprod').val('');
		
		updatetotalventa();
	});
	
	jQuery(document).on('click', '[name=removeprod]', function() {
    	var tr = jQuery(this).closest('tr');
		tr.css("background-color","#FF3700");

        tr.fadeOut(400, function(){
            tr.remove();
            updatetotalventa();
        });
	});
	
	function updatetotalventa(){
		var tot = 0;
		jQuery('#tableprod tbody tr').each(function(index){
			tot = tot + parseFloat(jQuery(this).find('td[name=tdtotalprod]').html());
		});
		jQuery('#total').val(tot);
	}
});