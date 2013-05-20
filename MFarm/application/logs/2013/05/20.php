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