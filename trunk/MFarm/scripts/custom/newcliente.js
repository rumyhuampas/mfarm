jQuery(document).ready(function(){
	jQuery('#cuil').focus();
	
	jQuery('[name=editcliente]').click(function(){
		jQuery(this).closest("form").submit();
	});
});