<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-13 22:28:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_servicios' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-13 22:28:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 22:28:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicios.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE `IdCerda` = '14' ORDER BY `FechaServicio` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 22:28:52 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Helpers\servicio.php(17): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\application\classes\Controller\abmcerdacelos.php(64): Helpers_Servicio::getLast('14')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdaCelos->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdaCelos))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-13 23:27:20 --- CRITICAL: Kohana_Exception [ 0 ]: The FechaProbableCelo21 property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-13 23:27:20 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('FechaProbableCe...')
#1 C:\wamp\www\mfarm\application\views\newcelo.php(96): Kohana_ORM->__get('FechaProbableCe...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmcerdacelos.php(68): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdaCelos->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdaCelos))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600