<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-09 01:42:19 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'servicios.IdCerda' in 'where clause' ( SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-09 01:42:19 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-09 02:45:10 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\classes\Helpers\venta.php [ 70 ] in :
2014-02-09 02:45:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 02:48:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\classes\Helpers\venta.php [ 69 ] in :
2014-02-09 02:48:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 02:49:27 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\classes\Helpers\venta.php [ 69 ] in :
2014-02-09 02:49:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:06:14 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\classes\Helpers\venta.php [ 69 ] in :
2014-02-09 12:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:06:54 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\classes\Helpers\venta.php [ 69 ] in :
2014-02-09 12:06:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:07:10 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'FVMONTH' ~ APPPATH\classes\Controller\ventas.php [ 204 ] in :
2014-02-09 12:07:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:07:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getVentasData() ~ APPPATH\classes\Controller\ventas.php [ 212 ] in :
2014-02-09 12:07:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:07:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getVentasTotData() ~ APPPATH\classes\Controller\ventas.php [ 219 ] in :
2014-02-09 12:07:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:07:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getVentasData() ~ APPPATH\classes\Controller\ventas.php [ 212 ] in :
2014-02-09 12:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:07:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getVentasTotData() ~ APPPATH\classes\Controller\ventas.php [ 219 ] in :
2014-02-09 12:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-09 12:17:43 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\reportesdeventa.php [ 72 ] in C:\xampp\htdocs\MFarm\application\views\reportesdeventa.php:72
2014-02-09 12:17:43 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\views\reportesdeventa.php(72): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 72, Array)
#1 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(208): Kohana_View->render()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_reportes()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MFarm\application\views\reportesdeventa.php:72
2014-02-09 12:44:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '`' ~ APPPATH\classes\Helpers\venta.php [ 64 ] in :
2014-02-09 12:44:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :