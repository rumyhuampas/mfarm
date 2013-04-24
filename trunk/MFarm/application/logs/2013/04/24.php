<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-24 19:05:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Macho ~ APPPATH\classes\Controller\headerbar.php [ 13 ] in C:\wamp\www\mfarm\application\classes\Controller\headerbar.php:13
2013-04-24 19:05:14 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\headerbar.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\mfa...', 13, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_HeaderBar->action_getTodayEvents()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_HeaderBar))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\headerbar.php:13
2013-04-24 19:34:39 --- CRITICAL: Kohana_Exception [ 0 ]: The Numero property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-24 19:34:39 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Numero')
#1 C:\wamp\www\mfarm\application\classes\Controller\headerbar.php(14): Kohana_ORM->__get('Numero')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_HeaderBar->action_getTodayEvents()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_HeaderBar))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600