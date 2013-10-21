jQuery(document).ready(function(){
	jQuery('[name=editcerda]').click(function(){
		jQuery(this).closest("form").submit();
	});
});