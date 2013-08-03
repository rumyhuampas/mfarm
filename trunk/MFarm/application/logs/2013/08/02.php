<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-02 21:48:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Helpers_Reportes::createVenta(), called in C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php on line 54 and defined ~ APPPATH\classes\Helpers\reportes.php [ 23 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php:23
2013-08-02 21:48:35 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(54): Helpers_Reportes::createVenta('1')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printventa()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php:23
2013-08-02 21:49:22 --- CRITICAL: View_Exception [ 0 ]: The requested view reports/venta could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php:137
2013-08-02 21:49:22 --- DEBUG: #0 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('reports/venta')
#1 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(19): Kohana_View->__construct('reports/venta', NULL)
#2 C:\xampp\htdocs\MFarm\modules\mpdf\classes\view\mpdf\core.php(41): View_mPDF_Core->__construct('reports/venta', NULL, Array)
#3 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(16): View_mPDF_Core::factory('reports/venta', NULL, Array)
#4 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(24): Helpers_Reportes::create('reports/venta', 'A4-L')
#5 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(54): Helpers_Reportes::createVenta('1')
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printventa()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php:137
2013-08-02 22:22:43 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 22:22:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:05:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method mPDF::_i-ageError() ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 9283 ] in :
2013-08-02 23:05:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:49:44 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 23:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:50:52 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 984 ] in :
2013-08-02 23:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:52:14 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 23:52:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:52:46 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 23:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:53:26 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 23:53:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:56:29 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 23:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:57:03 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 23:57:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 23:58:43 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 30863 ] in :
2013-08-02 23:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :