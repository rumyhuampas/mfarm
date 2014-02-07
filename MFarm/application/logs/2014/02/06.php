<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-06 23:02:59 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'ventas.Deleted' in 'where clause' ( SELECT CONCAT("Corriente mes: ", CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha))) AS `Key`, ROUND(SUM(v.Total), 2) AS `Total`, (select sum(vp.monto) from ventapagos vp where concat(month(vp.fecha), year(vp.fecha)) = concat(month(v.fecha), year(v.fecha))) as Pagos FROM `ventas` AS `v` WHERE MONTH(v.Fecha) = MONTH(NOW()) AND `ventas`.`Deleted`  'Y' GROUP BY YEAR(v.Fecha), MONTH(v.Fecha) ORDER BY `v`.`Fecha` ASC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-06 23:02:59 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT CONCAT("...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(41): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(203): Helpers_Venta::getTotals()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_reportes()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-06 23:09:34 --- CRITICAL: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as Pagos FROM `ventas` AS `v` WHERE MONTH(v.Fecha) = MONTH(NOW()) AND `v`.`Delet' at line 1 ( SELECT CONCAT("Corriente mes: ", CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha))) AS `Key`, ROUND(SUM(v.Total), 2) AS `Total`, (select sum(vp.monto) from ventapagos vp where vp.IdVenta = v.Id as Pagos FROM `ventas` AS `v` WHERE MONTH(v.Fecha) = MONTH(NOW()) AND `v`.`Deleted`  'Y' GROUP BY YEAR(v.Fecha), MONTH(v.Fecha) ORDER BY `v`.`Fecha` ASC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-06 23:09:34 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT CONCAT("...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(42): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(203): Helpers_Venta::getTotals()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_reportes()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-06 23:22:00 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'ventas.Deleted' in 'where clause' ( SELECT CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha)) AS `Year`, ROUND(SUM(v.Total), 2) AS `Total`, (select ROUND(sum(vp.monto), 2) from ventapagos vp where vp.IdVenta = v.Id) as Pagos FROM `ventas` AS `v` WHERE `v`.`Fecha` > DATE_SUB(NOW(), INTERVAL 12 MONTH) AND `ventas`.`Deleted`  'Y' GROUP BY YEAR(v.Fecha), MONTH(v.Fecha) ORDER BY `v`.`Fecha` ASC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-06 23:22:00 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT CONCAT(C...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(251): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(209): Helpers_Charts::getVentasData()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_getventachartdata()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251