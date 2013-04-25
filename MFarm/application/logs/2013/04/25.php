<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-25 00:05:30 --- CRITICAL: View_Exception [ 0 ]: The requested view reports/testpdf could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-25 00:05:30 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('reports/testpdf')
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(19): Kohana_View->__construct('reports/testpdf', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(25): View_mPDF_Core->__construct('reports/testpdf', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(6): View_mPDF_Core::factory('reports/testpdf')
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137