<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-07 20:34:35 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:47
2013-05-07 20:34:35 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(47): Kohana_Database_Query_Builder_Select->union(NULL)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:47
2013-05-07 20:34:52 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:47
2013-05-07 20:34:52 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(47): Kohana_Database_Query_Builder_Select->union(NULL)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:47
2013-05-07 20:35:19 --- CRITICAL: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ APPPATH\classes\Helpers\charts.php [ 91 ] in :
2013-05-07 20:35:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'C:\wamp\www\mfa...', 91, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(91): array_merge(Array, '')
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-07 20:36:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\Helpers\charts.php [ 91 ] in :
2013-05-07 20:36:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 20:44:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\Helpers\charts.php [ 91 ] in :
2013-05-07 20:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 20:46:57 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:88
2013-05-07 20:46:57 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(88): Kohana_Database_Query_Builder_Select->union(NULL)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:88
2013-05-07 20:47:40 --- CRITICAL: Kohana_Exception [ 0 ]: first parameter must be a string or an instance of Database_Query_Builder_Select ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php [ 299 ] in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:88
2013-05-07 20:47:40 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(88): Kohana_Database_Query_Builder_Select->union(NULL)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\charts.php:88
2013-05-07 20:51:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Helpers\charts.php [ 71 ] in :
2013-05-07 20:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 20:51:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Helpers\charts.php [ 71 ] in :
2013-05-07 20:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 20:51:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Helpers\charts.php [ 71 ] in :
2013-05-07 20:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 20:51:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Helpers\charts.php [ 71 ] in :
2013-05-07 20:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 20:51:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Helpers\charts.php [ 71 ] in :
2013-05-07 20:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 21:00:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdaauditPeso' in 'field list' [ SELECT `cerdaauditPeso`, DATE(cerdaaudit.Fecha) FROM `cerdaaudit` WHERE `IdCerda` = '14' ORDER BY `Fecha` LIMIT 20 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 21:00:17 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cerdaau...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(11): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(154): Helpers_Charts::getCerdaPesoData('14')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 21:03:19 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Helpers\charts.php [ 16 ] in :
2013-05-07 21:03:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\wamp\www\mfa...', 16, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(16): array_push(NULL, Array)
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(154): Helpers_Charts::getCerdaPesoData('14')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-07 21:36:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\Helpers\charts.php [ 121 ] in :
2013-05-07 21:36:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 22:24:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cnt' in 'order clause' [ SELECT `Macho`, ROUND(((count(Id) * 100)/(select count(Id) from servicios)), 2) porc FROM `servicios` WHERE DATE(FechaServicio) >= DATE_SUB(NOW(), INTERVAL 30 DAY) GROUP BY `Macho` ORDER BY `cnt` DESC, `Macho` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 22:24:36 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Macho`,...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(128): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(38): Helpers_Charts::getMaxMachosData()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_getMaxMachoServicios()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 22:57:57 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC' at line 1 [ SELECT CONCAT('Cerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#00ACE9' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY))) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 22:57:57 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(43): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251