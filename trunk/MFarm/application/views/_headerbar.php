<?php 
	$_sess = Session::instance();
	$_username = $_sess->get('currentuser');
	$_userid = $_sess->get('currentuserid');
	if($_userid == ''){
		HTTP::redirect(URL::base()."../mmain/");
		//HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));	
	}
	$_altasCount = count(Helpers_Cerda::getAltas('Now()'));
	$_serviciosCount = count(Helpers_Cerda::getServicios(NULL, 'Now()'));
	$_partosCount = count(Helpers_Cerda::getPartos(NULL, 'Now()'));
	$_destetesCount = count(Helpers_Cerda::getDestetes(NULL, 'Now()'));
	$_celosCount = count(Helpers_Cerda::getCelos(NULL,NULL,true,true));
	$_probpartoCount = count(Helpers_Cerda::getProbPartos('Now()'));
	$_eventsCount = $_altasCount + $_serviciosCount + $_partosCount + $_destetesCount + $_celosCount + $_probpartoCount;
?>

<!-- START OF HEADER -->
<div class="header radius3">
	<div class="headerinner">
    	
        <a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
        	<img src=<?php echo URL::base()."assets/images/porkman2.png" ?> alt="" />
        </a>
        <!--<div class="title">PORKMAN</div>-->
        
          
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
                	<?php if($_eventsCount > 0){
                    	echo '<a href="'.URL::base().'headerbar/getTodayNewCerdas" class="notialert radius2">'.$_eventsCount.'</a>';
                    }
					else{
						echo '<a href="#" class="noalert radius2">'.$_eventsCount.'</a>';
					}
                    ?>
                    <div class="notibox">
                        <ul class="tabmenu">
                        	<li class="current"><a href="<?php echo URL::base().'headerbar/getTodayNewCerdas'?>" class="msg">Altas(<?php echo $_altasCount ?>)</a></li>
                            <li class="current"><a href="<?php echo URL::base().'headerbar/getTodayServicios'?>" class="msg">Servicios(<?php echo $_serviciosCount ?>)</a></li>
                            <li><a href="<?php echo URL::base().'headerbar/getTodayPartos'?>" class="msg">Partos(<?php echo $_partosCount ?>)</a></li>
                        	<br clear="all" />
                        	<li><a href="<?php echo URL::base().'headerbar/getTodayDestetes'?>" class="msg">Destetes(<?php echo $_destetesCount ?>)</a></li>
                            <li><a href="<?php echo URL::base().'headerbar/getTodayCelos'?>" class="msg">Celos(<?php echo $_celosCount ?>)</a></li>
                            <li><a href="<?php echo URL::base().'headerbar/getTodayProbParto'?>" class="msg">Prob Parto(<?php echo $_probpartoCount ?>)</a></li>
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
                    <span><strong><?php echo $_username ?></strong></span>
                </a>
                <div class="userdrop">
                    <ul>
                        <li><a href=<?php echo URL::base()."../mmain/abmusers/edit" ?>>Perfil</a></li>
                        <li><a href=<?php echo URL::base()."../mmain/abmusers/new" ?>>Usuarios del sistema</a></li>
                        <li><a href=<?php echo URL::base()."../mmain/welcome" ?> >Menu principal</a></li>
                        <li><a href=<?php echo URL::base()."../mmain/login/exit" ?> >Salir</a></li>
                    </ul>
                </div><!--userdrop-->
            </div><!--headercolumn-->
        </div><!--headright-->
    
    </div><!--headerinner-->
</div><!--header-->
<!-- END OF HEADER -->