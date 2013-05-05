<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-04 16:57:40 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No connection could be made because the target machine actively refused it.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-04 16:57:40 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\mfarm\application\classes\Helpers\db.php(14): Kohana_ORM::factory('user')
#8 C:\wamp\www\mfarm\application\classes\Controller\login.php(7): Helpers_DB::isAnyUser()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-04 17:50:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Asset' not found ~ APPPATH\views\_header.php [ 11 ] in :
2013-05-04 17:50:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 21:28:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicio.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE servicio.IdCerda=cerdas.id) AS `Numero`, `cerda`.`Id` AS `Id`, `cerda`.`Numero` AS `Numero`, `cerda`.`IdEstado` AS `IdEstado`, `cerda`.`Peso` AS `Peso`, `cerda`.`Modified_On` AS `Modified_On`, `cerda`.`Created_On` AS `Created_On` FROM `cerdas` AS `cerda` WHERE YEAR(Created_On) >= YEAR(Now()) ORDER BY `Created_On` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-04 21:28:48 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Cerda', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(46): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(149): Helpers_DB::getHomeNewCerdas()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-04 21:31:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'IdCerda' in 'order clause' [ SELECT `cerda`.`Id` AS `Id`, `cerda`.`Numero` AS `Numero`, `cerda`.`IdEstado` AS `IdEstado`, `cerda`.`Peso` AS `Peso`, `cerda`.`Modified_On` AS `Modified_On`, `cerda`.`Created_On` AS `Created_On` FROM `cerdas` AS `cerda` WHERE YEAR(Created_On) >= YEAR(Now()) ORDER BY `Created_On` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-04 21:31:20 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cerda`....', 'Model_Cerda', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(45): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(149): Helpers_DB::getHomeNewCerdas()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-04 21:32:09 --- CRITICAL: Kohana_Exception [ 0 ]: The Fecha property does not exist in the Model_Cerda class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-04 21:32:09 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Fecha')
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(161): Kohana_ORM->__get('Fecha')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-04 21:33:39 --- CRITICAL: Kohana_Exception [ 0 ]: The Created_On property does not exist in the Model_Parto class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-04 21:33:39 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Created_On')
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(153): Kohana_ORM->__get('Created_On')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600