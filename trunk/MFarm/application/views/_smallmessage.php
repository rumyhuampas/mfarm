<?php
$msgtext = Request::current()->param('msgtext');
$msgtype = Request::current()->param('msgtype');
if(isset($msgtext)){
	echo '<div class="smallnotification noimg'.$msgtype.'">';
    	echo '<a class="close"></a>';
    	echo '<p>'.$msgtext.'</p>';
	echo '</div>';
}
?>