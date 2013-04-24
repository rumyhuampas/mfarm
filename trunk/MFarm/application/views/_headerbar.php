<?php 
	$session = Session::instance();
	$username = $session->get('currentuser');
	$userid = $session->get('currentuserid');
	if($userid == ''){
		HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));	
	}
	$eventsCount = Helpers_DB::getTodayEventsCount();
?>

<!-- START OF HEADER -->
<div class="header radius3">
	<div class="headerinner">
    	
        <a href="#"><img src=<?php echo URL::base()."assets/images/starlight_admin_template_logo_small.png" ?> alt="" /></a>
        
          
        <div class="headright">
        	<div class="headercolumn">&nbsp;</div>
        	<div id="searchPanel" class="headercolumn">
            	<div class="searchbox">
                    <form action="<?php echo URL::base().'abmcerdas/search' ?>" method="post">
                        <input type="text" id="keyword" name="numbersearch" class="radius2" value="Buscar cerda..." /> 
                    </form>
                </div><!--searchbox-->
            </div><!--headercolumn-->
        	
        	
        	<div id="notiPanel" class="headercolumn">
                <div class="notiwrapper">
                	<?php if($eventsCount > 0){
                    	echo '<a href="'.URL::base().'headerbar/getTodayEvents" class="notialert radius2">'.$eventsCount.'</a>';
                    }
					else{
						echo '<a href="#" class="noalert radius2">'.$eventsCount.'</a>';
					}
                    ?>
                    <div class="notibox">
                        <ul class="tabmenu">
                            <li class="current"><div class="title">Eventos</div></li>
                        </ul>
                        <br clear="all" />
                        <div class="loader"><img src=<?php echo URL::base()."assets/images/loaders/loader3.gif" ?> alt="Loading Icon" /> Loading...</div>
                        <div class="noticontent"></div><!--noticontent-->
                    </div><!--notibox-->
                </div><!--notiwrapper-->
            </div><!--headercolumn-->
            
            <div id="userPanel" class="headercolumn">
                <a href="#" class="userinfo radius2">
                    <img src=<?php echo URL::base()."assets/images/avatar.png" ?> alt="" class="radius2" />
                    <span><strong><?php echo $username ?></strong></span>
                </a>
                <div class="userdrop">
                    <ul>
                        <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmusers', 'action' => 'edit')); ?>>Perfil</a></li>
                        <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'abmusers', 'action' => 'new')); ?>>Usuarios del sistema</a></li>
                        <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'login', 'action' => 'exit')); ?> >Salir</a></li>
                    </ul>
                </div><!--userdrop-->
            </div><!--headercolumn-->
        </div><!--headright-->
    
    </div><!--headerinner-->
</div><!--header-->
<!-- END OF HEADER -->