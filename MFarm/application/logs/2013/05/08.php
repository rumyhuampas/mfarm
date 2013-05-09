<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-08 21:33:30 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\reports\reporte.php [ 20 ] in C:\wamp\www\mfarm\application\views\reports\reporte.php:20
2013-05-08 21:33:30 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\reports\reporte.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\mfa...', 20, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(82): Kohana_View->render(NULL)
#4 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(204): View_mPDF_Core->inline('MFarm - Reporte...')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporcerda()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\reports\reporte.php:20
2013-05-08 21:48:13 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 27 ] in :
2013-05-08 21:48:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 21:48:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\reports\reporte.php [ 37 ] in :
2013-05-08 21:48:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 21:50:09 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 27 ] in :
2013-05-08 21:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 21:52:10 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 27 ] in :
2013-05-08 21:52:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 21:53:25 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 27 ] in :
2013-05-08 21:53:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 22:39:23 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 27 ] in :
2013-05-08 22:39:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 23:05:36 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 27 ] in :
2013-05-08 23:05:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 23:05:59 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 37 ] in :
2013-05-08 23:05:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 23:06:16 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\views\reports\reporte.php [ 49 ] in :
2013-05-08 23:06:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :