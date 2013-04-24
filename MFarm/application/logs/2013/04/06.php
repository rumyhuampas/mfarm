<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-06 10:21:39 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\Controller\home.php [ 26 ] in C:\wamp\www\mfarm\application\classes\Controller\home.php:26
2013-04-06 10:21:39 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\home.php(26): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\mfa...', 26, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\home.php:26
2013-04-06 10:32:32 --- CRITICAL: Kohana_Exception [ 0 ]: The Estado property does not exist in the Model_CerdaAudit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:699
2013-04-06 10:32:32 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Estado', '5')
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerda.php(23): Kohana_ORM->__set('Estado', '5')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerda->action_altacerda()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerda))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:699
2013-04-06 11:16:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\abmcerda.php [ 12 ] in :
2013-04-06 11:16:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-06 11:27:35 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mfarm.cerda' doesn't exist [ SELECT (SELECT Numero FROM cerda WHERE cerda.id=cerdaaudit.IdCerda) AS `Numero`, (SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstado) AS `NombreEstado`, `cerdaaudit`.`Id` AS `Id`, `cerdaaudit`.`IdCerda` AS `IdCerda`, `cerdaaudit`.`Fecha` AS `Fecha`, `cerdaaudit`.`IdEstado` AS `IdEstado`, `cerdaaudit`.`Peso` AS `Peso` FROM `cerdaaudit` AS `cerdaaudit` ORDER BY `cerdaaudit`.`fecha` DESC LIMIT 5 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:27:35 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_CerdaAudi...', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:27:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerda.id' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerda.id=cerdaaudit.IdCerda) AS `Numero`, (SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstado) AS `NombreEstado`, `cerdaaudit`.`Id` AS `Id`, `cerdaaudit`.`IdCerda` AS `IdCerda`, `cerdaaudit`.`Fecha` AS `Fecha`, `cerdaaudit`.`IdEstado` AS `IdEstado`, `cerdaaudit`.`Peso` AS `Peso` FROM `cerdaaudit` AS `cerdaaudit` ORDER BY `cerdaaudit`.`fecha` DESC LIMIT 5 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:27:51 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_CerdaAudi...', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:28:05 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(FechaServicio) >= YEAR(Now())) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:28:05 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `servici...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(29): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:32:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(FechaServicio) >= YEAR(Now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:32:12 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(30): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:33:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(servicios.FechaServicio) >= YEAR(Now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:33:28 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(30): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:34:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT (SELECT cerdas.Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(servicios.FechaServicio) >= YEAR(Now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:34:41 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(30): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:35:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.FechaServicio' in 'where clause' [ SELECT (SELECT cerdas.Numero FROM cerdas, servicios WHERE cerdas.id=servicios.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(servicios.FechaServicio) >= YEAR(Now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:35:23 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(30): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:36:03 --- CRITICAL: ErrorException [ 2 ]: mysql_query() [function.mysql-query]: Unable to save result set ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-04-06 11:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query() [...', 'C:\wamp\www\mfa...', 186, Array)
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('SELECT (SELECT ...', Resource id #67)
#2 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#3 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#5 C:\wamp\www\mfarm\application\classes\Controller\home.php(30): Kohana_ORM->find_all()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-04-06 11:36:41 --- CRITICAL: ErrorException [ 2 ]: mysql_query() [function.mysql-query]: Unable to save result set ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-04-06 11:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query() [...', 'C:\wamp\www\mfa...', 186, Array)
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('SELECT (SELECT ...', Resource id #67)
#2 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#3 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#5 C:\wamp\www\mfarm\application\classes\Controller\home.php(30): Kohana_ORM->find_all()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-04-06 11:38:01 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(FechaServicio) >= YEAR(Now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:38:01 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(30): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-06 11:41:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function push() ~ APPPATH\classes\Controller\home.php [ 33 ] in :
2013-04-06 11:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-06 12:22:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: servicioColors ~ APPPATH\classes\Controller\home.php [ 36 ] in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:22:50 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\home.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 36, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:23:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: servicioColors ~ APPPATH\classes\Controller\home.php [ 36 ] in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:23:32 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\home.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 36, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:24:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: servicioColors ~ APPPATH\classes\Controller\home.php [ 36 ] in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:24:44 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\home.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 36, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:31:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: servicioColors ~ APPPATH\classes\Controller\home.php [ 36 ] in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:31:00 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\home.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 36, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\home.php:36
2013-04-06 12:37:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: servicioColors ~ APPPATH\classes\Helpers\calendar.php [ 12 ] in C:\wamp\www\mfarm\application\classes\Helpers\calendar.php:12
2013-04-06 12:37:12 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\calendar.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 12, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(20): Helpers_Calendar::getServicioColors()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\application\classes\Helpers\calendar.php:12
2013-04-06 12:45:57 --- CRITICAL: ErrorException [ 1 ]: Undefined constant 'n' ~ APPPATH\classes\Controller\home.php [ 32 ] in :
2013-04-06 12:45:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-06 16:05:42 --- CRITICAL: Kohana_Exception [ 0 ]: The Nombre property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-06 16:05:42 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Nombre')
#1 C:\wamp\www\mfarm\application\views\perfil.php(33): Kohana_ORM->__get('Nombre')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmusers.php(10): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMUsers->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMUsers))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-06 22:49:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\abmusers.php [ 50 ] in C:\wamp\www\mfarm\application\classes\Controller\abmusers.php:50
2013-04-06 22:49:39 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmusers.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 50, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMUsers->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMUsers))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmusers.php:50