<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-11 19:55:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: biggestweights ~ APPPATH\views\home.php [ 112 ] in C:\wamp\www\mfarm\application\views\home.php:112
2013-04-11 19:55:35 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\home.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 112, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(11): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\home.php:112
2013-04-11 19:56:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Helpers_DB::getUser() must be an instance of string, string given, called in C:\wamp\www\mfarm\application\classes\Controller\login.php on line 18 and defined ~ APPPATH\classes\Helpers\db.php [ 5 ] in C:\wamp\www\mfarm\application\classes\Helpers\db.php:5
2013-04-11 19:56:08 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\db.php(5): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\mfa...', 5, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\login.php(18): Helpers_DB::getUser('javo', '12')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\db.php:5
2013-04-11 19:58:50 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\abmusers.php [ 51 ] in C:\wamp\www\mfarm\application\classes\Controller\abmusers.php:51
2013-04-11 19:58:50 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmusers.php(51): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\mfa...', 51, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMUsers->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMUsers))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmusers.php:51
2013-04-11 21:08:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menuid ~ APPPATH\views\_menu.php [ 6 ] in C:\wamp\www\mfarm\application\views\_menu.php:6
2013-04-11 21:08:23 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_menu.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 6, Array)
#1 C:\wamp\www\mfarm\application\views\editcerda.php(11): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(44): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_menu.php:6