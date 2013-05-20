<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-19 23:01:31 --- CRITICAL: Kohana_Exception [ 0 ]: The Numero property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-19 23:01:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Numero')
#1 C:\wamp\www\mfarm\application\views\editservicio.php(32): Kohana_ORM->__get('Numero')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(56): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600