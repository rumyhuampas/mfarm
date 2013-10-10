jQuery(document).ready(function(){
	jQuery('[name=editcliente]').click(function(){
		jQuery(this).closest("form").submit();
	});
});