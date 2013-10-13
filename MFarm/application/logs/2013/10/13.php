<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-13 17:47:29 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:47:29 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(21): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:50:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:50:15 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(23): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:51:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:51:37 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(23): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:51:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:51:59 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(23): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:54:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:54:50 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(23): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:55:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:55:06 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(23): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:55:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 17:55:30 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(23): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:00:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:00:32 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(23): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:03:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:03:41 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:05:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:05:18 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:05:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-13 18:05:21 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251