<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-04 00:06:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH\classes\Controller\abmestados.php [ 11 ] in :
2013-04-04 00:06:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-04 19:47:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estados ~ APPPATH\views\altacerda.php [ 38 ] in C:\wamp\www\mfarm\application\views\altacerda.php:38
2013-04-04 19:47:45 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\altacerda.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 38, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerda.php(10): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerda->action_altacerda()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerda))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\altacerda.php:38
2013-04-04 19:57:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_cerda' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-04 19:57:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-04 22:07:04 --- CRITICAL: Kohana_Exception [ 0 ]: The Fecha property does not exist in the Model_Cerda class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-04 22:07:04 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Fecha')
#1 C:\wamp\www\mfarm\application\views\home.php(42): Kohana_ORM->__get('Fecha')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(14): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-04 22:09:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\Controller\home.php [ 13 ] in :
2013-04-04 22:09:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-04 22:09:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `cerdaaudit` ON (`cerda`.`Id` = `cerdaaudit`.`IdCerda`) ORDER BY `cerdaaudi' at line 1 [ SELECT `cerda`.`Numero`, `cerdaaudit`.`Fecha`, `cerdaaudit`.`Estado`, `cerdaaudit`.`Peso` JOIN `cerdaaudit` ON (`cerda`.`Id` = `cerdaaudit`.`IdCerda`) ORDER BY `cerdaaudit`.`fecha` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:09:55 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cerda`....', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(13): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:10:43 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\home.php [ 42 ] in C:\wamp\www\mfarm\application\views\home.php:42
2013-04-04 22:10:43 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\home.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\mfa...', 42, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(15): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\home.php:42
2013-04-04 22:13:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerda.Numero as Numero' in 'field list' [ SELECT `cerda`.`Numero as Numero`, `cerdaaudit`.`Fecha as Fecha`, `cerdaaudit`.`Estado`, `cerdaaudit`.`Peso` FROM `cerda` JOIN `cerdaaudit` ON (`cerda`.`Id` = `cerdaaudit`.`IdCerda`) ORDER BY `cerdaaudit`.`fecha` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:13:05 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cerda`....', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\home.php(14): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:15:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\home.php [ 42 ] in C:\wamp\www\mfarm\application\views\home.php:42
2013-04-04 22:15:18 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\home.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\mfa...', 42, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(15): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\home.php:42
2013-04-04 22:15:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\home.php [ 42 ] in C:\wamp\www\mfarm\application\views\home.php:42
2013-04-04 22:15:41 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\home.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\mfa...', 42, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(15): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\home.php:42
2013-04-04 22:15:51 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\home.php [ 43 ] in C:\wamp\www\mfarm\application\views\home.php:43
2013-04-04 22:15:51 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\home.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\mfa...', 43, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(15): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\home.php:43
2013-04-04 22:21:20 --- CRITICAL: Kohana_Exception [ 0 ]: The Numero property does not exist in the Model_CerdaAudit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-04 22:21:20 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Numero')
#1 C:\wamp\www\mfarm\application\views\home.php(43): Kohana_ORM->__get('Numero')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(14): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-04 22:27:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'estados.IdEstados' in 'where clause' [ SELECT (SELECT Numero FROM cerda WHERE cerda.id=cerdaaudit.IdCerda) AS `Numero`, (SELECT Nombre FROM estados WHERE estados.Id=estados.IdEstados) AS `NombreEstado`, `cerdaaudit`.`Id` AS `Id`, `cerdaaudit`.`IdCerda` AS `IdCerda`, `cerdaaudit`.`Fecha` AS `Fecha`, `cerdaaudit`.`IdEstado` AS `IdEstado`, `cerdaaudit`.`Peso` AS `Peso` FROM `cerdaaudit` AS `cerdaaudit` ORDER BY `cerdaaudit`.`fecha` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:27:10 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_CerdaAudi...', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(14): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:27:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdaaudit.IdEstados' in 'where clause' [ SELECT (SELECT Numero FROM cerda WHERE cerda.id=cerdaaudit.IdCerda) AS `Numero`, (SELECT Nombre FROM estados WHERE estados.Id=cerdaaudit.IdEstados) AS `NombreEstado`, `cerdaaudit`.`Id` AS `Id`, `cerdaaudit`.`IdCerda` AS `IdCerda`, `cerdaaudit`.`Fecha` AS `Fecha`, `cerdaaudit`.`IdEstado` AS `IdEstado`, `cerdaaudit`.`Peso` AS `Peso` FROM `cerdaaudit` AS `cerdaaudit` ORDER BY `cerdaaudit`.`fecha` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:27:44 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_CerdaAudi...', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Controller\home.php(14): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-04 22:44:03 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH\views\_headerbar.php [ 43 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:43
2013-04-04 22:44:03 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\mfa...', 43, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(5): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(15): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:43