<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-04 13:33:54 --- CRITICAL: Kohana_Exception [ 0 ]: The Kilos property does not exist in the Model_Venta class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-04 13:33:54 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Kilos')
#1 C:\xampp\htdocs\MFarm\application\views\reports\factura.php(99): Kohana_ORM->__get('Kilos')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(82): Kohana_View->render(NULL)
#5 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(20): View_mPDF_Core->inline('PorkMan - venta...')
#6 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(57): Helpers_Reportes::show(Object(View_mPDF))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printfactura()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-04 17:51:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function create() ~ APPPATH\classes\Controller\ventas.php [ 31 ] in :
2013-08-04 17:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-04 18:45:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Config' not found ~ APPPATH\classes\Controller\config.php [ 9 ] in :
2013-08-04 18:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-04 21:01:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_config' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-08-04 21:01:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-04 21:02:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\config.php [ 32 ] in :
2013-08-04 21:02:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-04 21:14:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Config as array ~ APPPATH\views\config.php [ 36 ] in :
2013-08-04 21:14:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-04 21:20:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Config as array ~ APPPATH\views\config.php [ 39 ] in :
2013-08-04 21:20:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :