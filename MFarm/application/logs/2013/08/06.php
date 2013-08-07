<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-06 19:47:34 --- CRITICAL: Kohana_Exception [ 0 ]: Required route parameter not passed: id ~ SYSPATH\classes\Kohana\Route.php [ 599 ] in C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php:108
2013-08-06 19:47:34 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(108): Kohana_Route->uri(Array)
#1 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_addpago()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php:108
2013-08-06 20:34:05 --- CRITICAL: Kohana_Exception [ 0 ]: The IdVenta property does not exist in the Model_Venta class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-06 20:34:05 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('IdVenta')
#1 C:\xampp\htdocs\MFarm\application\views\reports\recibo.php(5): Kohana_ORM->__get('IdVenta')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(82): Kohana_View->render(NULL)
#5 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(20): View_mPDF_Core->inline('PorkMan - recib...')
#6 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(120): Helpers_Reportes::show(Object(View_mPDF))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printrecibo()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-06 20:34:30 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\reports\recibo.php [ 85 ] in C:\xampp\htdocs\MFarm\application\views\reports\recibo.php:85
2013-08-06 20:34:30 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\views\reports\recibo.php(85): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(82): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(20): View_mPDF_Core->inline('PorkMan - recib...')
#5 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(120): Helpers_Reportes::show(Object(View_mPDF))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printrecibo()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\MFarm\application\views\reports\recibo.php:85
2013-08-06 22:02:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function initVector() ~ APPPATH\classes\Helpers\convertidor.php [ 11 ] in :
2013-08-06 22:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-06 22:03:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function length() ~ APPPATH\classes\Helpers\convertidor.php [ 13 ] in :
2013-08-06 22:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-06 22:03:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function indexOf() ~ APPPATH\classes\Helpers\convertidor.php [ 13 ] in :
2013-08-06 22:03:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-06 22:04:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function indexOf() ~ APPPATH\classes\Helpers\convertidor.php [ 13 ] in :
2013-08-06 22:04:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-06 22:04:39 --- CRITICAL: ErrorException [ 2 ]: strpos() expects at least 2 parameters, 1 given ~ APPPATH\classes\Helpers\convertidor.php [ 13 ] in :
2013-08-06 22:04:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\convertidor.php(13): strpos('.')
#2 C:\xampp\htdocs\MFarm\application\views\reports\recibo.php(43): Helpers_Convertidor::readNumber('10', '.', 'pesos')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(82): Kohana_View->render(NULL)
#6 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(20): View_mPDF_Core->inline('PorkMan - recib...')
#7 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(120): Helpers_Reportes::show(Object(View_mPDF))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printrecibo()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#14 {main} in :
2013-08-06 22:05:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function substring() ~ APPPATH\classes\Helpers\convertidor.php [ 16 ] in :
2013-08-06 22:05:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-06 22:10:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function equals() ~ APPPATH\classes\Helpers\convertidor.php [ 85 ] in :
2013-08-06 22:10:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-06 22:26:02 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Helpers\convertidor.php [ 173 ] in :
2013-08-06 22:26:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-06 22:47:58 --- CRITICAL: Kohana_Exception [ 0 ]: The obs property does not exist in the Model_VentaPago class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-06 22:47:58 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('obs')
#1 C:\xampp\htdocs\MFarm\application\views\reports\recibo.php(44): Kohana_ORM->__get('obs')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(82): Kohana_View->render(NULL)
#5 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(20): View_mPDF_Core->inline('PorkMan - recib...')
#6 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(120): Helpers_Reportes::show(Object(View_mPDF))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printrecibo()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600