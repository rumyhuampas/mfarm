jQuery(document).ready(function(){
	jQuery('[name=reprint]').click (function ()
	{
		jQuery(this).closest("form").submit();
	});
	jQuery('[name=delete]').click(function(){
		var thisform = jQuery(this).closest('form');
        jQuery('#overlay').fadeIn('fast',function(){
            jQuery('#box').animate({'top':'160px'},500);
        });
        
        jQuery('#boxclose').click(function(){
	        jQuery('#box').animate({'top':'-200px'},500,function(){
	            jQuery('#overlay').fadeOut('fast');
	        });
	    });
	    
	    jQuery('#boxyes').click (function (){
			thisform.submit();
		});
    });
});