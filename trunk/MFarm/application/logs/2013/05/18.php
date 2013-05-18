<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-18 10:13:43 --- CRITICAL: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\Helpers\charts.php [ 48 ] in :
2013-05-18 10:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'C:\wamp\www\mfa...', 48, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(48): array_merge(Array, Object(Database_Query_Builder_Select))
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(71): Helpers_Charts::getCalendarData('26', 'false')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-18 10:13:58 --- CRITICAL: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\Helpers\charts.php [ 48 ] in :
2013-05-18 10:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'C:\wamp\www\mfa...', 48, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(48): array_merge(Array, Object(Database_Query_Builder_Select))
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(71): Helpers_Charts::getCalendarData('26', 'false')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-18 10:19:30 --- CRITICAL: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\Helpers\charts.php [ 48 ] in :
2013-05-18 10:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'C:\wamp\www\mfa...', 48, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(48): array_merge(Array, Object(Database_Query_Builder_Select))
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(71): Helpers_Charts::getCalendarData('26', 'false')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in :