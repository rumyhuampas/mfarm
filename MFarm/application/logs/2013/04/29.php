<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-29 00:01:02 --- CRITICAL: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Compilation failed: regular expression is too large at offset 83006 ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 22076 ] in :
2013-04-29 00:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', 'C:\wamp\www\mfa...', 22076, Array)
#1 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(22076): preg_replace('/ html, body, d...', ' html, body, di...', '<style> html, b...')
#2 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(12359): mPDF->ReadCSS('<style> html, b...')
#3 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(84): mPDF->WriteHTML('html, body, div...', 1)
#4 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(116): View_mPDF_Core->inline('MFarm - Reporte...')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporcerda()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-04-29 00:02:40 --- CRITICAL: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Compilation failed: regular expression is too large at offset 73450 ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 22076 ] in :
2013-04-29 00:02:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', 'C:\wamp\www\mfa...', 22076, Array)
#1 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(22076): preg_replace('/ html, body, d...', ' html, body, di...', '<style> html, b...')
#2 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(12359): mPDF->ReadCSS('<style> html, b...')
#3 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(84): mPDF->WriteHTML('html, body, div...', 1)
#4 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(116): View_mPDF_Core->inline('MFarm - Reporte...')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporcerda()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-04-29 00:05:30 --- CRITICAL: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Compilation failed: regular expression is too large at offset 62824 ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 22076 ] in :
2013-04-29 00:05:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', 'C:\wamp\www\mfa...', 22076, Array)
#1 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(22076): preg_replace('/ html, body, d...', ' html, body, di...', '<style> html, b...')
#2 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(12359): mPDF->ReadCSS('<style> html, b...')
#3 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(84): mPDF->WriteHTML('html, body, div...', 1)
#4 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(116): View_mPDF_Core->inline('MFarm - Reporte...')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporcerda()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-04-29 00:08:04 --- CRITICAL: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Compilation failed: regular expression is too large at offset 54663 ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 22076 ] in :
2013-04-29 00:08:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', 'C:\wamp\www\mfa...', 22076, Array)
#1 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(22076): preg_replace('/ html, body, d...', ' html, body, di...', '<style> html, b...')
#2 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(12359): mPDF->ReadCSS('<style> html, b...')
#3 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(84): mPDF->WriteHTML('html, body, div...', 1)
#4 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(116): View_mPDF_Core->inline('MFarm - Reporte...')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporcerda()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-04-29 21:51:32 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(views/reports/_pdfheader) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:51:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('views/reports/_...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:51:46 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(views/reports/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:51:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('views/reports/_...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:52:14 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(reports/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:52:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('reports/_pdfhea...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:52:25 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/views/reports/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('/views/reports/...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:52:49 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/mfarm//views/reports/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:52:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('/mfarm//views/r...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:52:56 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/mfarm/views/reports/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:52:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('/mfarm/views/re...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:53:09 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/mfarm//reports/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('/mfarm//reports...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:53:16 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/mfarm/reports/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:53:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('/mfarm/reports/...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:53:24 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/mfarm/_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:53:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('/mfarm/_pdfhead...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 21:53:36 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(_pdfheader.php) [function.file-get-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\reportes.php [ 28 ] in :
2013-04-29 21:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\wamp\www\mfa...', 28, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(28): file_get_contents('_pdfheader.php')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-29 22:01:09 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\reportes.php [ 29 ] in :
2013-04-29 22:01:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :