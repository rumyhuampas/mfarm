<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-15 21:25:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estados ~ APPPATH\views\newservicio.php [ 66 ] in C:\wamp\www\mfarm\application\views\newservicio.php:66
2013-04-15 21:25:10 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newservicio.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 66, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(49): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newservicio.php:66