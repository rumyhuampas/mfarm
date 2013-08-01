<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-31 21:01:30 --- CRITICAL: View_Exception [ 0 ]: The requested view newventa could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php:137
2013-07-31 21:01:30 --- DEBUG: #0 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('newventa')
#1 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(30): Kohana_View->__construct('newventa', NULL)
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(7): Kohana_View::factory('newventa')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php:137
2013-07-31 21:01:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Venta' not found ~ APPPATH\classes\Controller\ventas.php [ 10 ] in :
2013-07-31 21:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :