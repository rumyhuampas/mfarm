<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-20 19:59:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Celo' not found ~ APPPATH\classes\Controller\abmcerdacelos.php [ 75 ] in :
2013-05-20 19:59:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-20 19:59:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerda.Numero' in 'field list' [ SELECT `cerda`.`Numero`, `servicios`.`FechaServicio`, `servicios`.`ProbableFechaCelo21`, `servicios`.`ProbableFechaCelo42`, `cerdacelos`.`Fecha`, `cerdacelos`.`Observaciones`, (SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS `Numero` FROM `cerdacelos` JOIN `servicios` ON (`servicios`.`Id` = `cerdacelos`.`IdServicio`) JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) ORDER BY `cerdacelos`.`Fecha` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-20 19:59:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cerda`....', true, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\celo.php(22): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdacelos.php(75): Helpers_Celo::get(NULL)
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdaCelos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdaCelos))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-20 19:59:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\editcelo.php [ 32 ] in :
2013-05-20 19:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-20 20:44:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdas.Numero' in 'field list' [ SELECT `cerdacelos`.`Id`, `cerdas`.`Numero`, `servicios`.`FechaServicio`, `servicios`.`ProbableFechaCelo21`, `servicios`.`ProbableFechaCelo42`, `cerdacelos`.`Fecha`, `cerdacelos`.`Observaciones` FROM `cerdacelos` JOIN `servicios` ON (`servicios`.`Id` = `cerdacelos`.`IdServicio`) WHERE `cerdacelos`.`Id` = '1' GROUP BY `cerdacelos`.`Id` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-20 20:44:00 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cerdace...', true, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\celo.php(13): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdacelos.php(75): Helpers_Celo::get('1')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdaCelos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdaCelos))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-20 20:52:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_celo' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-20 20:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-20 21:51:27 --- CRITICAL: Kohana_Exception [ 0 ]: The Numero property does not exist in the Model_Parto class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-20 21:51:27 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Numero')
#1 C:\wamp\www\mfarm\application\views\editparto.php(38): Kohana_ORM->__get('Numero')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(91): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-20 21:52:35 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update cerdaaudit model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php:101
2013-05-20 21:52:35 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(101): Kohana_ORM->update()
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php:101
2013-05-20 21:53:21 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update cerdaaudit model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php:101
2013-05-20 21:53:21 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(101): Kohana_ORM->update()
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php:101
2013-05-20 22:51:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update cerdaaudit model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php:101
2013-05-20 22:51:51 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(101): Kohana_ORM->update()
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php:101
2013-05-20 23:02:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicio.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS `Numero`, `parto`.`Id` AS `Id`, `parto`.`IdCerda` AS `IdCerda`, `parto`.`Fecha` AS `Fecha`, `parto`.`Vivos` AS `Vivos`, `parto`.`Muertos` AS `Muertos`, `parto`.`Momificados` AS `Momificados`, `parto`.`Observaciones` AS `Observaciones` FROM `partos` AS `parto` WHERE `IdCerda` = '28' ORDER BY `Fecha` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-20 23:02:51 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Helpers\parto.php(21): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\application\classes\Controller\abmlactancias.php(53): Helpers_Parto::getLast('28')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMLactancias->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMLactancias))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251