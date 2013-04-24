<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<title><?php echo $title ?></title>
	
		<link href=<?php echo URL::base()."/assets/css/style.css" ?> rel="stylesheet" type="text/css" />
		<script src=<?php echo URL::base()."/scripts/plugins/jquery-1.7.min.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/plugins/jquery-ui-1.8.16.custom.min.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/custom/general.js" ?> type="text/javascript"></script>
		<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.loginform button').hover(function(){
				jQuery(this).stop().switchClass('default','hover');
			},function(){
				jQuery(this).stop().switchClass('hover','default');
			});
			
			jQuery('#login').submit(function(){
				var u = jQuery(this).find('#username');
				if(u.val() == '') {
					jQuery('.loginerror').slideDown();
					u.focus();
					return false;	
				}
			});
			
			jQuery('#username').keypress(function(){
				jQuery('.loginerror').slideUp();
			});
		});
		</script>
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
	</head>
