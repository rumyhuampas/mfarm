jQuery(document).ready(function(){
	jQuery('[name=reprint]').click (function ()
	{
		jQuery(this).closest("form").submit();
	});
});