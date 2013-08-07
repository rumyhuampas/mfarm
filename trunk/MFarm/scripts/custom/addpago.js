jQuery(document).ready(function(){
	
	jQuery('#btnsave').click(function(){
		var idventa = jQuery('[name=idventa]').val()
		jQuery.post( 
	    	'/mfarm/ventas/addpago/' + idventa,
	    	{
	    		idventa: idventa,
		    	date: jQuery('[name=date]').val(),
		    	cuil: jQuery('[name=cuil]').val(),
		    	tpago: jQuery('[name=tpago]').val(),
		    	saldo: jQuery('[name=saldo]').val(),
		    	monto: jQuery('[name=monto]').val(),
		    	conc: jQuery('[name=conc]').val(),
		    	obs: jQuery('[name=obs]').val()
	    	},
		    function( data ){
		    	window.location.replace(data);
		    }
    	);
	});
	
	var pagoid = jQuery('[name=_pagoid]');
	if(pagoid.attr('value') != undefined){
		jQuery('#formprintrecibo' + pagoid.attr('value')).submit();	
	}
});