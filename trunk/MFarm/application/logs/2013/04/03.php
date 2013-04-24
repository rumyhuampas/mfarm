<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-03 22:27:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\mfarm\system\classes\Kohana\Cookie.php:67
2013-04-03 22:27:21 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\mfarm\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\mfarm\system\classes\Kohana\Cookie.php:67
2013-04-03 23:14:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\_headerbar.php [ 37 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:37
2013-04-03 23:14:53 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 37, Array)
#1 C:\wamp\www\mfarm\application\views\altacerda.php(5): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmcerda.php(15): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerda->action_altacerda()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerda))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:37