<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-10 16:34:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_VentaPago::getVentaSaldo() ~ APPPATH\views\newventa.php [ 202 ] in :
2013-08-10 16:34:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 16:40:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\Helpers\ventapago.php [ 29 ] in :
2013-08-10 16:40:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 16:49:22 --- CRITICAL: Kohana_Exception [ 0 ]: The Saldo property does not exist in the Model_Venta class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-10 16:49:22 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Saldo')
#1 C:\xampp\htdocs\MFarm\application\views\addpago.php(74): Kohana_ORM->__get('Saldo')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(83): Kohana_View->render()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_addpago()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-10 16:55:47 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `IdVenta` = '3' ORDER BY `Fecha` ASC, `Id` ASC' at line 1 [ SELECT `ventapagos` WHERE `IdVenta` = '3' ORDER BY `Fecha` ASC, `Id` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 16:55:47 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ventapa...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\ventapago.php(29): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\views\addpago.php(74): Helpers_VentaPago::getSaldoVenta('3')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(83): Kohana_View->render()
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_addpago()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 17:11:25 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`mfarm`.`ventapagos`, CONSTRAINT `FK_ventapagos_ventas` FOREIGN KEY (`IdVenta`) REFERENCES `ventas` (`Id`)) [ INSERT INTO `ventapagos` (`Fecha`, `Tipo`, `Monto`, `Concepto`, `Observaciones`) VALUES ('2013-08-10', '0', '1', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 17:11:25 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ve...', false, Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(95): Kohana_ORM->create()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_addpago()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 17:13:27 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`mfarm`.`ventapagos`, CONSTRAINT `FK_ventapagos_ventas` FOREIGN KEY (`IdVenta`) REFERENCES `ventas` (`Id`)) [ INSERT INTO `ventapagos` (`Fecha`, `Tipo`, `Monto`, `Concepto`, `Observaciones`) VALUES ('2013-08-10', '0', '1', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 17:13:27 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ve...', false, Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(95): Kohana_ORM->create()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_addpago()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 17:15:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\ventas.php [ 123 ] in :
2013-08-10 17:15:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 19:53:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Saldo' in 'where clause' [ SELECT (SELECT SUM(monto) FROM ventapagos WHERE ventapagos.IdVenta=venta.Id) AS `Saldo`, `venta`.`Id` AS `Id`, `venta`.`Fecha` AS `Fecha`, `venta`.`IdCliente` AS `IdCliente`, `venta`.`Total` AS `Total` FROM `ventas` AS `venta` WHERE `Saldo` > '0' ORDER BY `Fecha` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 19:53:45 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Venta', Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(20): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 21:26:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\ventas.php [ 46 ] in :
2013-08-10 21:26:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 21:26:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\ventas.php [ 46 ] in :
2013-08-10 21:26:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 21:29:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\ventas.php [ 46 ] in :
2013-08-10 21:29:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 21:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Venta::union() ~ APPPATH\classes\Helpers\venta.php [ 25 ] in :
2013-08-10 21:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 21:45:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'venta.Id' in 'where clause' [ SELECT * FROM `ventas` LEFT JOIN `ventapagos` ON (`ventapagos`.`IdVenta` = `venta`.`Id`) WHERE (SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=venta.Id) = '0' UNION ALL SELECT * FROM `ventas` WHERE (SELECT SUM(monto) FROM ventapagos WHERE ventapagos.IdVenta=venta.Id) > 'venta.Total' ORDER BY `Fecha` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 21:45:57 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(25): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 21:46:25 --- CRITICAL: Database_Exception [ 1222 ]: The used SELECT statements have a different number of columns [ SELECT * FROM `ventas` LEFT JOIN `ventapagos` ON (`ventapagos`.`IdVenta` = `ventas`.`Id`) WHERE (SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id) = '0' UNION ALL SELECT * FROM `ventas` WHERE (SELECT SUM(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id) > 'ventas.Total' ORDER BY `Fecha` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 21:46:25 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(25): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 21:47:01 --- CRITICAL: Database_Exception [ 1222 ]: The used SELECT statements have a different number of columns [ SELECT * FROM `ventas` LEFT JOIN `ventapagos` ON (`ventapagos`.`IdVenta` = `ventas`.`Id`) WHERE (SELECT COUNT(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id) = '0' UNION ALL SELECT * FROM `ventas` WHERE (SELECT SUM(monto) FROM ventapagos WHERE ventapagos.IdVenta=ventas.Id) > 'ventas.Total' ORDER BY `Fecha` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 21:47:01 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(25): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(11): Helpers_Venta::getActive()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-10 21:57:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\ventas.php [ 46 ] in :
2013-08-10 21:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-10 22:42:29 --- CRITICAL: View_Exception [ 0 ]: The requested view oldventa could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php:137
2013-08-10 22:42:29 --- DEBUG: #0 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('oldventa')
#1 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(30): Kohana_View->__construct('oldventa', NULL)
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(137): Kohana_View::factory('oldventa')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_history()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php:137
2013-08-10 22:52:40 --- CRITICAL: Kohana_Exception [ 0 ]: The Fecha property does not exist in the Model_Cliente class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-10 22:52:40 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Fecha')
#1 C:\xampp\htdocs\MFarm\application\views\oldventas.php(64): Kohana_ORM->__get('Fecha')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(141): Kohana_View->render()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_history()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600