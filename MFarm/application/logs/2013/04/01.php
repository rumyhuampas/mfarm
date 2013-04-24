<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-01 23:12:14 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH\views\home.php [ 1 ] in C:\wamp\www\mfarm\application\views\home.php:1
2013-04-01 23:12:14 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\home.php(1): Kohana_Core::error_handler(2, 'include() [<a h...', 'C:\wamp\www\mfa...', 1, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(1): include()
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(8): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\home.php:1
2013-04-01 23:12:20 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH\views\home.php [ 1 ] in C:\wamp\www\mfarm\application\views\home.php:1
2013-04-01 23:12:20 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\home.php(1): Kohana_Core::error_handler(2, 'include() [<a h...', 'C:\wamp\www\mfa...', 1, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(1): include()
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(8): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\home.php:1