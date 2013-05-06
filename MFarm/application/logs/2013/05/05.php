<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-05 18:40:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_DB::getEndStatusId() ~ APPPATH\views\editcerda.php [ 80 ] in :
2013-05-05 18:40:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:41:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_DB::getEndStatusId() ~ APPPATH\views\editcerda.php [ 80 ] in :
2013-05-05 18:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:46:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_DB::getEstadoId() ~ APPPATH\views\newservicio.php [ 50 ] in :
2013-05-05 18:46:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:49:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Estado::getEstado() ~ APPPATH\views\newservicio.php [ 50 ] in :
2013-05-05 18:49:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:50:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Estado::getEstado() ~ APPPATH\views\newservicio.php [ 50 ] in :
2013-05-05 18:50:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:51:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_DB::getCerda() ~ APPPATH\classes\Controller\reportes.php [ 83 ] in :
2013-05-05 18:51:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 20:06:22 --- CRITICAL: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH\views\_headerbar.php [ 8 ] in :
2013-05-05 20:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'count() expects...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\_headerbar.php(8): count()
#2 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#4 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#5 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-05-05 20:06:27 --- CRITICAL: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH\views\_headerbar.php [ 8 ] in :
2013-05-05 20:06:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'count() expects...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\_headerbar.php(8): count()
#2 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#4 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#5 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-05-05 20:06:47 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\_headerbar.php [ 8 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:06:47 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:06:57 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\_headerbar.php [ 8 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:06:57 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:05 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\_headerbar.php [ 8 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:05 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:18 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\_headerbar.php [ 8 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:18 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:25 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\_headerbar.php [ 8 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:25 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:41 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\_headerbar.php [ 8 ] in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:41 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\_headerbar.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\views\_headerbar.php:8
2013-05-05 20:07:47 --- CRITICAL: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH\views\_headerbar.php [ 8 ] in :
2013-05-05 20:07:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'count() expects...', 'C:\wamp\www\mfa...', 8, Array)
#1 C:\wamp\www\mfarm\application\views\_headerbar.php(8): count()
#2 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#4 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#5 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-05-05 20:32:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Cerrda' not found ~ APPPATH\views\_headerbar.php [ 11 ] in :
2013-05-05 20:32:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 20:32:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Cerrda' not found ~ APPPATH\views\_headerbar.php [ 11 ] in :
2013-05-05 20:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 20:33:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Cerrda' not found ~ APPPATH\views\_headerbar.php [ 11 ] in :
2013-05-05 20:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 20:33:24 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'parto.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE parto.IdCerda=cerdas.id) AS `Numero`, ROUND(pesototal/lechones, 2) as PesoProm, `destete`.`Id` AS `Id`, `destete`.`IdCerda` AS `IdCerda`, `destete`.`Fecha` AS `Fecha`, `destete`.`Lechones` AS `Lechones`, `destete`.`Dias` AS `Dias`, `destete`.`PesoTotal` AS `PesoTotal`, `destete`.`Observaciones` AS `Observaciones` FROM `destetes` AS `destete` JOIN `cerdas` ON (`cerdas`.`Id` = `destete`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(Fecha) >= DATE(Now()) ORDER BY `Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 20:33:24 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Destete', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\cerda.php(109): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\views\_headerbar.php(11): Helpers_Cerda::getDestetes(NULL, 'Now()')
#5 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#6 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#7 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#8 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 20:58:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\_headerbar.php [ 3 ] in :
2013-05-05 20:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 21:00:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\_headerbar.php [ 3 ] in :
2013-05-05 21:00:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 21:03:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\_headerbar.php [ 3 ] in :
2013-05-05 21:03:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 21:16:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Cerda::getProbParto() ~ APPPATH\views\_headerbar.php [ 13 ] in :
2013-05-05 21:16:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 23:06:28 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') ORDER BY `Fecha` DESC, `IdCerda` DESC' at line 1 [ SELECT (SELECT Numero FROM cerdas WHERE parto.IdCerda=cerdas.id) AS `Numero`, `parto`.`Id` AS `Id`, `parto`.`IdCerda` AS `IdCerda`, `parto`.`Fecha` AS `Fecha`, `parto`.`Vivos` AS `Vivos`, `parto`.`Muertos` AS `Muertos`, `parto`.`Momificados` AS `Momificados`, `parto`.`Observaciones` AS `Observaciones` FROM `partos` AS `parto` JOIN `cerdas` ON (`cerdas`.`Id` = `parto`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(Fecha) >= DATE() ORDER BY `Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:06:28 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Parto', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\cerda.php(76): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\classes\Controller\home.php(123): Helpers_Cerda::getPartos()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:13:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) OR' at line 1 [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` JOIN `cerdas` ON (`cerdas`.`Id` = `servicio`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(ProbableFechaCelo21) BETWEEN DATE() AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) ORDER BY `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:13:12 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\cerda.php(127): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\views\_headerbar.php(12): Helpers_Cerda::getCelos(NULL, NULL, true, true)
#5 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#6 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#7 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#8 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:17:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) OR' at line 1 [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` JOIN `cerdas` ON (`cerdas`.`Id` = `servicio`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(ProbableFechaCelo21) BETWEEN DATE() AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) ORDER BY `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:17:15 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\cerda.php(127): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\views\_headerbar.php(12): Helpers_Cerda::getCelos(NULL, NULL, true, true)
#5 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#6 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#7 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#8 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:19:07 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) OR' at line 1 [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` JOIN `cerdas` ON (`cerdas`.`Id` = `servicio`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(ProbableFechaCelo21) BETWEEN DATE() AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) ORDER BY `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:19:07 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\cerda.php(127): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\views\_headerbar.php(12): Helpers_Cerda::getCelos(NULL, NULL, true, true)
#5 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#6 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#7 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#8 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:19:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) OR' at line 1 [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` JOIN `cerdas` ON (`cerdas`.`Id` = `servicio`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(ProbableFechaCelo21) BETWEEN DATE() AND DATE(Now()) OR DATE(ProbableFechaCelo42) BETWEEN DATE() AND DATE(Now()) ORDER BY `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 23:19:20 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\cerda.php(127): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\views\_headerbar.php(12): Helpers_Cerda::getCelos(NULL, NULL, true, true)
#5 C:\wamp\www\mfarm\application\views\home.php(7): include('C:\wamp\www\mfa...')
#6 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#7 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#8 C:\wamp\www\mfarm\application\classes\Controller\home.php(12): Kohana_View->render()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251