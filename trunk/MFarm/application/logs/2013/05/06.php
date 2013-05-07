<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-06 19:52:37 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\home.php [ 33 ] in C:\wamp\www\mfarm\application\classes\Controller\home.php:33
2013-05-06 19:52:37 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\home.php(33): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\mfa...', 33, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\home.php:33
2013-05-06 19:57:53 --- CRITICAL: ErrorException [ 2 ]: array_map() [function.array-map]: Argument #2 should be an array ~ MODPATH\database\classes\Kohana\Database\Expression.php [ 129 ] in :
2013-05-06 19:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map() [<a...', 'C:\wamp\www\mfa...', 129, Array)
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Expression.php(129): array_map(Array, 'field')
#2 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database.php(519): Kohana_Database_Expression->compile(Object(Database_MySQL))
#3 [internal function]: Kohana_Database->quote_column(Object(Database_Expression))
#4 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#5 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 C:\wamp\www\mfarm\application\classes\Controller\home.php(189): Kohana_Database_Query->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-05-06 20:09:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'CONCAT("Cerda:"Id)' in 'field list' [ SELECT `CONCAT("Cerda:"Id)` AS `title` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:09:07 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `CONCAT(...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:09:39 --- CRITICAL: Database_Exception [ 1583 ]: Incorrect parameters in the call to native function 'CONCAT' [ SELECT CONCAT("Cerda:"Id) AS `title` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:09:39 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT("...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:11:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\nMacho:Macho) AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE' at line 1 [ SELECT CONCAT("Cerda:",Id,\nMacho:Macho) AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:11:23 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT("...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:11:49 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\nMacho:,Macho) AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DAT' at line 1 [ SELECT CONCAT("Cerda:",Id,\nMacho:,Macho) AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:11:49 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT("...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:12:10 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\nMacho:,Macho) AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DAT' at line 1 [ SELECT CONCAT("Cerda:",Id,\nMacho:,Macho) AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:12:10 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT("...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:13:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '"Cerda:,Id,-Macho:,Macho")' in 'field list' [ SELECT `"Cerda:,Id,-Macho:,Macho")` AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:13:50 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `"Cerda:...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:16:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '"Cerda:,Id,-Macho:,Macho"' in 'field list' [ SELECT `"Cerda:,Id,-Macho:,Macho"` AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:16:52 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `"Cerda:...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:20:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '"Cerda:IdMacho:Macho"' in 'field list' [ SELECT `"Cerda:IdMacho:Macho"` AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:20:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `"Cerda:...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:20:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '\"Cerda:IdMacho:Macho"' in 'field list' [ SELECT `\"Cerda:IdMacho:Macho"` AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:20:59 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `\"Cerda...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:28:35 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Macho,'"') AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(Fec' at line 1 [ SELECT CONCAT('"Cerda:',Id',Macho:,'Macho,'"') AS `title`, `FechaServicio` AS `date` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:28:35 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(190): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:34:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '#00ACE9' in 'field list' [ SELECT CONCAT('Cerda:',Id,'\nMacho:',Macho) AS `title`, `FechaServicio` AS `date`, `#00ACE9` AS `backgroundColor`, `404040` AS `borderColor`, `#303030` AS `textColor` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:34:57 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(194): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:35:31 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT CONCAT('Cerda:',Id,'\nMacho:',Macho) AS `title`, `FechaServicio` AS `date`, #00ACE9 AS `backgroundColor`, 404040 AS `borderColor`, #303030 AS `textColor` FROM `servicios` WHERE DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 20:35:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(194): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 21:31:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Fecha' in 'field list' [ SELECT CONCAT('Cerda: ',Id,'\\nPeso: ',Peso) AS `title`, `Fecha` AS `date`, '#FF9900' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `cerdas` WHERE DATE(Fecha) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 21:31:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(238): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 21:32:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Fecha' in 'field list' [ SELECT CONCAT('Cerda: ',Id,'\\nPeso: ',Peso) AS `title`, `Fecha` AS `date`, '#FF9900' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `cerdas` WHERE DATE(Created_On) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `Created_On` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 21:32:16 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(238): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 21:41:49 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'ALTA' ~ APPPATH\classes\Controller\home.php [ 187 ] in :
2013-05-06 21:41:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-06 21:42:11 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'ALTA' ~ APPPATH\classes\Controller\home.php [ 187 ] in :
2013-05-06 21:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-06 21:45:45 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'CELO21' ~ APPPATH\classes\Controller\home.php [ 196 ] in :
2013-05-06 21:45:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-06 23:41:12 --- CRITICAL: Database_Exception [ 1052 ]: Column 'Id' in field list is ambiguous [ SELECT CONCAT('Cerda: ',Id,'\\nMacho: ',Macho) AS `title`, `FechaServicio` AS `date`, '#00ACE9' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 23:41:12 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(43): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(17): Helpers_Charts::getHomeCalendarData()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 23:45:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'serviciosId' in 'field list' [ SELECT CONCAT('Cerda: ',serviciosId,'\\nMacho: ',Macho) AS `title`, `FechaServicio` AS `date`, '#00ACE9' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 23:45:17 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(43): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(17): Helpers_Charts::getHomeCalendarData()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 23:45:38 --- CRITICAL: Database_Exception [ 1052 ]: Column 'Id' in field list is ambiguous [ SELECT CONCAT('Cerda: ',Id,'\\nMacho: ',Macho) AS `title`, `FechaServicio` AS `date`, '#00ACE9' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 23:45:38 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(43): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(17): Helpers_Charts::getHomeCalendarData()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 23:48:22 --- CRITICAL: Database_Exception [ 1052 ]: Column 'Id' in field list is ambiguous [ SELECT CONCAT('Cerda: ',Id,'\\nMacho: ',Macho) AS `title`, `ProbableFechaCelo21` AS `date`, '#DB5800' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(FechaServicio) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-06 23:48:22 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(56): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(17): Helpers_Charts::getHomeCalendarData()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251