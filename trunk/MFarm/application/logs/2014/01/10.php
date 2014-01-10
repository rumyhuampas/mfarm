<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-10 12:54:24 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:171
2014-01-10 12:54:24 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('cerdaaudit')
#3 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\MFarm\application\classes\Helpers\cerda.php(229): Kohana_ORM::factory('cerdaaudit')
#8 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(10): Helpers_Cerda::getLastModifications()
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:171
2014-01-10 13:29:08 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'servicios.IdCerda' in 'where clause' ( SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  NULL AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 13:29:08 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 13:31:17 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'servicios.IdCerda' in 'where clause' ( SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  NULL AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 13:31:17 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 16:19:06 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'servicios.IdCerda' in 'where clause' ( SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  NULL AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 16:19:06 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 16:55:36 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mfarm`.`cerdas`, CONSTRAINT `FK_cerdas_estados` FOREIGN KEY (`IdEstado`) REFERENCES `estados` (`Id`)) ( INSERT INTO `cerdas` (`Numero`, `Peso`, `Modified_On`, `Created_On`) VALUES ('1', '100', Now(), Now()) ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 16:55:36 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ce...', false, Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\abmcerdas.php(30): Kohana_ORM->create()
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-10 17:04:28 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'ESTPRENADA' ~ APPPATH\views\newparto.php [ 46 ] in :
2014-01-10 17:04:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-01-10 17:04:41 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'ESTCELO' ~ APPPATH\classes\Controller\abmcerdacelos.php [ 32 ] in :
2014-01-10 17:04:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-01-10 17:05:20 --- CRITICAL: Kohana_Exception [ 0 ]: The IdCerda property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2014-01-10 17:05:20 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('IdCerda', '2')
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\abmservicios.php(14): Kohana_ORM->__set('IdCerda', '2')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2014-01-10 17:21:45 --- CRITICAL: ErrorException [ 8192 ]: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 66 ] in :
2014-01-10 17:21:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'preg_replace():...', 'C:\xampp\htdocs...', 66, Array)
#1 C:\xampp\htdocs\MFarm\modules\mpdf\vendor\mpdf\includes\functions.php(66): preg_replace('/\&\#([0-9]+)\;...', 'code2utf('\1',0...', '<style> html, b...')
#2 C:\xampp\htdocs\MFarm\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<style> html, b...', false)
#3 C:\xampp\htdocs\MFarm\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<style> html, b...', false)
#4 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(26): mPDF->WriteHTML('html, body, div...', 1)
#5 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(80): Helpers_Reportes::createFactura('1')
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printfactura()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2014-01-10 17:26:51 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, 'code2utf('\1',0)', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 68 ] in :
2014-01-10 17:26:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\MFarm\modules\mpdf\vendor\mpdf\includes\functions.php(68): preg_replace_callback('/\&\#([0-9]+)\;...', 'code2utf('\1',0...', '<style> html, b...')
#2 C:\xampp\htdocs\MFarm\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<style> html, b...', false)
#3 C:\xampp\htdocs\MFarm\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<style> html, b...', false)
#4 C:\xampp\htdocs\MFarm\application\classes\Helpers\reportes.php(26): mPDF->WriteHTML('html, body, div...', 1)
#5 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(80): Helpers_Reportes::createFactura('1')
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_printfactura()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#12 {main} in :