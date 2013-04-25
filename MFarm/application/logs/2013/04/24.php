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
2013-04-24 21:31:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Helpers\pdf.php [ 116 ] in :
2013-04-24 21:31:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:31:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Helpers\pdf.php [ 116 ] in :
2013-04-24 21:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:34:54 --- CRITICAL: ErrorException [ 1 ]: Class 'TCPDF' not found ~ APPPATH\classes\Helpers\pdf.php [ 84 ] in :
2013-04-24 21:34:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:36:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method TCPDF::getPageSizeFromFormat() ~ APPPATH\classes\Helpers\pdf.php [ 122 ] in :
2013-04-24 21:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:36:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method TCPDF::getPageSizeFromFormat() ~ APPPATH\classes\Helpers\pdf.php [ 122 ] in :
2013-04-24 21:36:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:37:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH\classes\Helpers\pdf.php [ 65 ] in :
2013-04-24 21:37:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:41:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$response ~ APPPATH\classes\Helpers\pdf.php [ 66 ] in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:66
2013-04-24 21:41:14 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\pdf.php(66): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\mfa...', 66, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(10): Helpers_Pdf->save('test')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:66
2013-04-24 21:43:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Pdf::response() ~ APPPATH\classes\Helpers\pdf.php [ 66 ] in :
2013-04-24 21:43:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:44:38 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$response ~ APPPATH\classes\Helpers\pdf.php [ 66 ] in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:66
2013-04-24 21:44:38 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\pdf.php(66): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\mfa...', 66, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(10): Helpers_Pdf->save('test')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:66
2013-04-24 21:46:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH\classes\Helpers\pdf.php [ 66 ] in :
2013-04-24 21:46:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:48:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH\classes\Helpers\pdf.php [ 66 ] in :
2013-04-24 21:48:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:49:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH\classes\Helpers\pdf.php [ 67 ] in :
2013-04-24 21:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:49:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH\classes\Helpers\pdf.php [ 67 ] in :
2013-04-24 21:49:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 21:50:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Helpers\pdf.php [ 66 ] in :
2013-04-24 21:50:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 22:03:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ APPPATH\classes\Controller\reportes.php [ 12 ] in :
2013-04-24 22:03:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 22:09:58 --- CRITICAL: ErrorException [ 4096 ]: Object of class TCPDF could not be converted to string ~ APPPATH\classes\Helpers\pdf.php [ 65 ] in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:65
2013-04-24 22:09:58 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\pdf.php(65): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 65, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(11): Helpers_Pdf->save('test')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:65
2013-04-24 22:10:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ APPPATH\classes\Controller\reportes.php [ 12 ] in :
2013-04-24 22:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 22:12:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ APPPATH\classes\Controller\reportes.php [ 12 ] in :
2013-04-24 22:12:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 22:18:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: l ~ APPPATH\classes\Helpers\pdf.php [ 129 ] in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:129
2013-04-24 22:18:14 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\pdf.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 129, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(9): Helpers_Pdf->__construct()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:129
2013-04-24 22:19:03 --- CRITICAL: ErrorException [ 1 ]: Call to private method Helpers_Pdf::setHeaders() from context 'Controller_Reportes' ~ APPPATH\classes\Controller\reportes.php [ 12 ] in :
2013-04-24 22:19:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 22:21:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Reportes::getName() ~ APPPATH\classes\Controller\reportes.php [ 20 ] in :
2013-04-24 22:21:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 22:33:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Helpers\pdf.php [ 234 ] in :
2013-04-24 22:33:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 23:17:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Helpers\pdf.php [ 177 ] in :
2013-04-24 23:17:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 23:17:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Helpers\pdf.php [ 179 ] in :
2013-04-24 23:17:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 23:20:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Helpers\pdf.php [ 179 ] in :
2013-04-24 23:20:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 23:20:50 --- CRITICAL: ErrorException [ 1 ]: Class 'TCPDF' not found ~ APPPATH\classes\Helpers\pdf.php [ 81 ] in :
2013-04-24 23:20:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 23:21:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: l ~ APPPATH\classes\Helpers\pdf.php [ 121 ] in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:121
2013-04-24 23:21:01 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\pdf.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 121, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(8): Helpers_Pdf->__construct()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\pdf.php:121
2013-04-24 23:21:13 --- CRITICAL: ErrorException [ 4096 ]: Object of class Helpers_Pdf could not be converted to string ~ APPPATH\classes\Controller\reportes.php [ 20 ] in C:\wamp\www\mfarm\application\classes\Controller\reportes.php:20
2013-04-24 23:21:13 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(20): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 20, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\reportes.php:20
2013-04-24 23:21:46 --- CRITICAL: ErrorException [ 4096 ]: Object of class Helpers_Pdf could not be converted to string ~ APPPATH\classes\Controller\reportes.php [ 20 ] in C:\wamp\www\mfarm\application\classes\Controller\reportes.php:20
2013-04-24 23:21:46 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(20): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 20, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\reportes.php:20
2013-04-24 23:47:52 --- CRITICAL: View_Exception [ 0 ]: The requested view pdf/example could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:47:52 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pdf/example')
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(19): Kohana_View->__construct('pdf/example', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(25): View_mPDF_Core->__construct('pdf/example', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(23): View_mPDF_Core::factory('pdf/example')
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:48:41 --- CRITICAL: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:48:41 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('<html>test</htm...')
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(19): Kohana_View->__construct('<html>test</htm...', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(25): View_mPDF_Core->__construct('<html>test</htm...', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(23): View_mPDF_Core::factory('<html>test</htm...')
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:48:54 --- CRITICAL: View_Exception [ 0 ]: The requested view parto could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:48:54 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('parto')
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(19): Kohana_View->__construct('parto', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(25): View_mPDF_Core->__construct('parto', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(23): View_mPDF_Core::factory('parto')
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:49:01 --- CRITICAL: View_Exception [ 0 ]: The requested view partos could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:49:01 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('partos')
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(19): Kohana_View->__construct('partos', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(25): View_mPDF_Core->__construct('partos', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(23): View_mPDF_Core::factory('partos')
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-24 23:52:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method form::open() ~ APPPATH\views\newcerda.php [ 29 ] in :
2013-04-24 23:52:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 23:54:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH\classes\Controller\reportes.php [ 27 ] in :
2013-04-24 23:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 23:55:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View_mPDF::headers() ~ APPPATH\classes\Controller\reportes.php [ 29 ] in :
2013-04-24 23:55:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :