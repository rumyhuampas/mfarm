<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-03 00:00:38 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-03 00:00:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 00:01:14 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-08-03 00:01:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 00:03:48 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-03 00:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 00:05:18 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-03 00:05:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 00:12:42 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-03 00:12:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 01:04:00 --- CRITICAL: Kohana_Exception [ 0 ]: The Nombre property does not exist in the Model_Venta class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-03 01:04:00 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Nombre')
#1 C:\xampp\htdocs\MFarm\application\views\reports\factura.php(57): Kohana_ORM->__get('Nombre')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(82): Kohana_View->render(NULL)
#5 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(20): View_mPDF_Core->inline('PorkMan - venta...')
#6 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(56): Helpers_Reportes::show(Object(View_mPDF))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printfactura()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600