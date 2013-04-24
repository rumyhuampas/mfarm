<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-05 00:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\views\_headerbar.php [ 41 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:41
2013-04-05 00:20:16 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 41, Array)
#1 C:\wamp\www\mfarm\application\views\perfil.php(5): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmusers.php(12): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMUsers->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMUsers))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:41
2013-04-05 00:21:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estados ~ APPPATH\views\perfil.php [ 62 ] in C:\wamp\www\mfarm\application\views\perfil.php:62
2013-04-05 00:21:51 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\perfil.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 62, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmusers.php(13): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMUsers->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMUsers))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\perfil.php:62
2013-04-05 00:22:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estados ~ APPPATH\views\perfil.php [ 62 ] in C:\wamp\www\mfarm\application\views\perfil.php:62
2013-04-05 00:22:05 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\perfil.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 62, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmusers.php(13): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMUsers->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMUsers))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\perfil.php:62
2013-04-05 00:24:59 --- CRITICAL: Kohana_Exception [ 0 ]: The Estado property does not exist in the Model_CerdaAudit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:699
2013-04-05 00:24:59 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Estado', '3')
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerda.php(23): Kohana_ORM->__set('Estado', '3')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerda->action_altacerda()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerda))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:699