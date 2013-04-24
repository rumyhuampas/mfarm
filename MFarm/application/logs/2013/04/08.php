<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-08 19:25:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\editcerda.php [ 46 ] in :
2013-04-08 19:25:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-08 19:26:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Numero' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=IdCerda) AS `Numero`, `cerdaaudit`.`Id` AS `Id`, `cerdaaudit`.`IdCerda` AS `IdCerda`, `cerdaaudit`.`Fecha` AS `Fecha`, `cerdaaudit`.`IdEstado` AS `IdEstado`, `cerdaaudit`.`Peso` AS `Peso` FROM `cerdaaudit` AS `cerdaaudit` WHERE `Numero` = '1234' ORDER BY `Fecha` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:26:36 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(44): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:26:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdas.Numero' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=IdCerda) AS `Numero`, `cerdaaudit`.`Id` AS `Id`, `cerdaaudit`.`IdCerda` AS `IdCerda`, `cerdaaudit`.`Fecha` AS `Fecha`, `cerdaaudit`.`IdEstado` AS `IdEstado`, `cerdaaudit`.`Peso` AS `Peso` FROM `cerdaaudit` AS `cerdaaudit` WHERE `cerdas`.`Numero` = '1234' ORDER BY `Fecha` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:26:53 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(44): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:33:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdas.id' in 'where clause' [ SELECT (SELECT Fecha FROM cerdaaudit WHERE cerdas.id=IdCerda) AS `Fecha`, (SELECT IdEstado FROM cerdaaudit WHERE cerdas.id=IdCerda) AS `IdEstado`, (SELECT Peso FROM cerdaaudit WHERE cerdas.id=IdCerda) AS `Peso`, `cerda`.`Id` AS `Id`, `cerda`.`Numero` AS `Numero` FROM `cerdas` AS `cerda` WHERE `Numero` = '1234' ORDER BY `Fecha` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:33:27 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(46): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:33:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdas.id' in 'where clause' [ SELECT (SELECT Fecha FROM cerdaaudit WHERE id=IdCerda) AS `Fecha`, (SELECT IdEstado FROM cerdaaudit WHERE cerdas.id=IdCerda) AS `IdEstado`, (SELECT Peso FROM cerdaaudit WHERE cerdas.id=IdCerda) AS `Peso`, `cerda`.`Id` AS `Id`, `cerda`.`Numero` AS `Numero` FROM `cerdas` AS `cerda` WHERE `Numero` = '1234' ORDER BY `Fecha` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:33:37 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(46): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:33:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdas.id' in 'where clause' [ SELECT (SELECT Fecha FROM cerdaaudit WHERE id=cerdaaudit.IdCerda) AS `Fecha`, (SELECT IdEstado FROM cerdaaudit WHERE cerdas.id=IdCerda) AS `IdEstado`, (SELECT Peso FROM cerdaaudit WHERE cerdas.id=IdCerda) AS `Peso`, `cerda`.`Id` AS `Id`, `cerda`.`Numero` AS `Numero` FROM `cerdas` AS `cerda` WHERE `Numero` = '1234' ORDER BY `Fecha` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 19:33:58 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(46): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 20:23:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cerda ~ APPPATH\classes\Controller\abmcerdas.php [ 66 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:66
2013-04-08 20:23:42 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 66, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:66
2013-04-08 20:45:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: IdCerda ~ APPPATH\classes\Controller\abmcerdas.php [ 66 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:66
2013-04-08 20:45:15 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(66): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 66, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:66
2013-04-08 20:50:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: IdCerda ~ APPPATH\classes\Controller\abmcerdas.php [ 66 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:66
2013-04-08 20:50:36 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(66): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 66, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:66
2013-04-08 21:10:08 --- CRITICAL: Kohana_Exception [ 0 ]: The Estado property does not exist in the Model_Cerda class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-08 21:10:08 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Estado')
#1 C:\wamp\www\mfarm\application\views\editcerda.php(57): Kohana_ORM->__get('Estado')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(51): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-08 21:37:14 --- CRITICAL: Database_Exception [ 1242 ]: Subquery returns more than 1 row [ SELECT (SELECT Fecha FROM cerdaaudit WHERE cerda.id=cerdaaudit.IdCerda) AS `Fecha`, (SELECT IdEstado FROM cerdaaudit WHERE cerda.id=cerdaaudit.IdCerda) AS `IdEstado`, (SELECT Peso FROM cerdaaudit WHERE cerda.id=cerdaaudit.IdCerda) AS `Peso`, `cerda`.`Id` AS `Id`, `cerda`.`Numero` AS `Numero` FROM `cerdas` AS `cerda` WHERE `Numero` = '1234' ORDER BY `Fecha` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 21:37:14 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(46): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 22:01:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(FechaServicio) >= YEAR(Now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 22:01:46 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 22:02:54 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE servicios.IdCerda=cerdas.id) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE YEAR(FechaServicio) >= YEAR(Now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-08 22:02:54 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251