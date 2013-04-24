<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-13 15:54:53 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\abmcerdas.php [ 102 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:102
2013-04-13 15:54:53 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(102): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\mfa...', 102, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:102