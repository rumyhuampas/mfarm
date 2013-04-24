<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-16 00:13:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: obs ~ APPPATH\classes\Controller\abmservicios.php [ 20 ] in C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php:20
2013-04-16 00:13:03 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 20, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php:20
2013-04-16 00:13:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: obs ~ APPPATH\classes\Controller\abmservicios.php [ 20 ] in C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php:20
2013-04-16 00:13:48 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 20, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php:20
2013-04-16 00:14:08 --- CRITICAL: Kohana_Exception [ 0 ]: The create property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-16 00:14:08 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('create')
#1 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(21): Kohana_ORM->__get('create')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-16 20:50:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estados ~ APPPATH\views\newservicio.php [ 73 ] in C:\wamp\www\mfarm\application\views\newservicio.php:73
2013-04-16 20:50:24 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newservicio.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 73, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(10): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newservicio.php:73
2013-04-16 21:06:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\editcerda.php [ 186 ] in :
2013-04-16 21:06:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 21:34:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::exp() ~ APPPATH\views\newservicio.php [ 69 ] in :
2013-04-16 21:34:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :