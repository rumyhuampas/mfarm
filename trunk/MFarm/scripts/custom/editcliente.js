jQuery(document).ready(function(){
	jQuery('#cuildnisearch').focus();
	
	jQuery('[name=clientresult]').click (function ()
	{
		if(jQuery(this).attr('clientcuil') != undefined){
			jQuery('#cuildnisearch').val(jQuery(this).attr('clientcuil'));
			jQuery('#formsearchcliente').submit();	
		}
	});
});