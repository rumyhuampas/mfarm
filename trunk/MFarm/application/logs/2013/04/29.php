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