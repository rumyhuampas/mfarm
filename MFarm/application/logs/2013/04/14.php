<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-14 00:33:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdas.IdEstado' in 'where clause' [ SELECT (SELECT Nombre FROM estados WHERE estados.Id=cerdas.IdEstado) AS `Estado`, `cerda`.`Id` AS `Id`, `cerda`.`Numero` AS `Numero`, `cerda`.`IdEstado` AS `IdEstado`, `cerda`.`Peso` AS `Peso`, `cerda`.`Modified_On` AS `Modified_On` FROM `cerdas` AS `cerda` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-14 00:33:40 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(66): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(11): Helpers_DB::getCerdas()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-14 13:44:37 --- CRITICAL: Kohana_Exception [ 0 ]: The Username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:699
2013-04-14 13:44:37 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Username', 'javo')
#1 C:\wamp\www\mfarm\application\classes\Controller\login.php(54): Kohana_ORM->__set('Username', 'javo')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_createfirstuser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:699
2013-04-14 22:01:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mfarm.cerda' doesn't exist [ SELECT (SELECT Numero FROM cerdas WHERE servicio.IdCerda=cerdas.id) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` JOIN `cerda` ON (`cerda`.`Id` = `servicios`.`IdCerda`) WHERE `cerda`.`Id`  '8' AND YEAR(FechaServicio) >= YEAR(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-14 22:01:05 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(48): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(22): Helpers_DB::getHomeServicios()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-14 22:01:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'on clause' [ SELECT (SELECT Numero FROM cerdas WHERE servicio.IdCerda=cerdas.id) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`Id`  '8' AND YEAR(FechaServicio) >= YEAR(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-14 22:01:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(48): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(22): Helpers_DB::getHomeServicios()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-14 22:24:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cerda ~ APPPATH\views\editcerda.php [ 94 ] in C:\wamp\www\mfarm\application\views\editcerda.php:94
2013-04-14 22:24:46 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\editcerda.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 94, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(145): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\editcerda.php:94