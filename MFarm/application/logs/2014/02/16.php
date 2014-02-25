<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-16 16:28:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getLastBirthsPercentage() ~ APPPATH\classes\Controller\home.php [ 24 ] in :
2014-02-16 16:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-16 16:28:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getLastBirthsData() ~ APPPATH\classes\Controller\home.php [ 31 ] in :
2014-02-16 16:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-16 16:28:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getMaxMachosData() ~ APPPATH\classes\Controller\home.php [ 38 ] in :
2014-02-16 16:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-16 16:28:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getLastDestetesData() ~ APPPATH\classes\Controller\home.php [ 45 ] in :
2014-02-16 16:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-16 16:28:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getCalendarData() ~ APPPATH\classes\Controller\home.php [ 17 ] in :
2014-02-16 16:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-16 16:28:34 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column '' in 'field list' ( SELECT `v`.`Fecha`, `c`.`Nombre`, `vd`.`Cant`, `vd`.`Detalle`, `vd`.`PUnit`, `` AS ``, `v`.`Total`, CONCAT(CONCAT(MONTH(v.Fecha), "-"), YEAR(v.Fecha)) AS `Month` FROM `ventas` AS `v`, `clientes` AS `c`, `ventadetalle` AS `vd` WHERE `v`.`Fecha` > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND `v`.`Deleted`  'Y' ORDER BY `v`.`Fecha` ASC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-16 16:28:34 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `v`.`Fec...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(86): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(97): Helpers_Venta::getByPreviousMonths(1)
#3 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(231): Helpers_Reportes::createVentaTotals()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printtotals()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-02-16 17:54:45 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 3125 ] in :
2014-02-16 17:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-02-16 17:56:32 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7976 ] in :
2014-02-16 17:56:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :