<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-17 20:24:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\views\editcerda.php [ 36 ] in :
2013-04-17 20:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 20:24:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\views\editcerda.php [ 36 ] in :
2013-04-17 20:24:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 20:24:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\views\editcerda.php [ 36 ] in :
2013-04-17 20:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 20:26:07 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: abmservicios/search ~ SYSPATH\classes\Kohana\Route.php [ 106 ] in C:\wamp\www\mfarm\system\classes\Kohana\Route.php:212
2013-04-17 20:26:07 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\Route.php(212): Kohana_Route::get('abmservicios/se...')
#1 C:\wamp\www\mfarm\application\views\editcerda.php(36): Kohana_Route::url('abmservicios/se...', Array)
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(51): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\system\classes\Kohana\Route.php:212
2013-04-17 20:39:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function post_request() ~ APPPATH\views\editcerda.php [ 37 ] in :
2013-04-17 20:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 23:00:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estado ~ APPPATH\views\newparto.php [ 48 ] in C:\wamp\www\mfarm\application\views\newparto.php:48
2013-04-17 23:00:41 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newparto.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 48, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newparto.php:48