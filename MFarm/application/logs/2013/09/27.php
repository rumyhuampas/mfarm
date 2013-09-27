<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-27 18:53:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 18:53:37 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 19:03:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Expression::execute() ~ APPPATH\classes\Helpers\venta.php [ 35 ] in :
2013-09-27 19:03:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-27 19:16:29 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 19:16:29 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 19:16:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Expression::execute() ~ APPPATH\classes\Helpers\venta.php [ 35 ] in :
2013-09-27 19:16:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-27 19:19:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\newventa.php [ 204 ] in :
2013-09-27 19:19:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-27 19:20:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\newventa.php [ 204 ] in :
2013-09-27 19:20:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-27 19:20:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\newventa.php [ 204 ] in :
2013-09-27 19:20:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-27 19:25:35 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\newventa.php [ 206 ] in C:\xampp\htdocs\MFarm\application\views\newventa.php:206
2013-09-27 19:25:35 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\views\newventa.php(206): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 206, Array)
#1 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(12): Kohana_View->render()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MFarm\application\views\newventa.php:206
2013-09-27 19:29:36 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 19:29:36 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(40): Kohana_Database_Query_Builder_Select->union(Object(Database_Query))
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 20:03:26 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 20:03:26 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(40): Kohana_Database_Query_Builder_Select->union(Object(Database_Expression))
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 20:03:29 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 20:03:29 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(40): Kohana_Database_Query_Builder_Select->union(Object(Database_Expression))
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 20:04:07 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:39
2013-09-27 20:04:07 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(39): Kohana_Database_Query_Builder_Select->union(Object(Database_Expression))
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:39
2013-09-27 20:04:30 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 20:04:30 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(40): Kohana_Database_Query_Builder_Select->union(Object(Database_Query))
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:40
2013-09-27 20:07:53 --- CRITICAL: ErrorException [ 4096 ]: Method Database_Query::__toString() must return a string value ~ APPPATH\classes\Helpers\venta.php [ 44 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:44
2013-09-27 20:07:53 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(44): Kohana_Core::error_handler(4096, 'Method Database...', 'C:\xampp\htdocs...', 44, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:44
2013-09-27 20:08:31 --- CRITICAL: ErrorException [ 4096 ]: Method Database_Query::__toString() must return a string value ~ APPPATH\classes\Helpers\venta.php [ 45 ] in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:45
2013-09-27 20:08:31 --- DEBUG: #0 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(45): Kohana_Core::error_handler(4096, 'Method Database...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php:45
2013-09-27 20:09:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Helpers\venta.php [ 45 ] in :
2013-09-27 20:09:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-27 20:09:13 --- CRITICAL: Database_Exception [ 1222 ]: The used SELECT statements have a different number of columns [ select *, round(sum(ventapagos.monto), 2) as saldo from ventas, ventapagos where ventapagos.IdVenta = ventas.Id
				group by ventas.Id having saldo < ventas.total UNION ALL SELECT `ventas`.* FROM `ventas` LEFT JOIN `ventapagos` ON (`ventapagos`.`IdVenta` = `ventas`.`Id`) WHERE (SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id) = '0' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 20:09:13 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select *, round...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(45): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 20:14:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '' in 'field list' [ select ventas.*, round(sum(ventapagos.monto), 2) as saldo from ventas, ventapagos where ventapagos.IdVenta = ventas.Id
				group by ventas.Id having saldo < ventas.total UNION ALL SELECT `ventas`.*, `` AS `saldo` FROM `ventas` LEFT JOIN `ventapagos` ON (`ventapagos`.`IdVenta` = `ventas`.`Id`) WHERE (SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id) = '0' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 20:14:19 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select ventas.*...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(45): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 20:14:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column ' ' in 'field list' [ select ventas.*, round(sum(ventapagos.monto), 2) as saldo from ventas, ventapagos where ventapagos.IdVenta = ventas.Id
				group by ventas.Id having saldo < ventas.total UNION ALL SELECT `ventas`.*, ` ` AS `saldo` FROM `ventas` LEFT JOIN `ventapagos` ON (`ventapagos`.`IdVenta` = `ventas`.`Id`) WHERE (SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id) = '0' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-09-27 20:14:30 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select ventas.*...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(45): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251