<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-27 09:14:36 --- CRITICAL: Database_Exception [ 1305 ]: FUNCTION mfarm.ATE does not exist [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdCerda` AS `IdCerda`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`ProbableFechaCelo21` AS `ProbableFechaCelo21`, `servicio`.`ProbableFechaCelo42` AS `ProbableFechaCelo42`, `servicio`.`ProbableFechaParto` AS `ProbableFechaParto`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE DATE(FechaServicio) >= ATE("01-04-2013 9:12:50") AND DATE(FechaServicio)  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-27 09:14:36 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(166): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(22): Helpers_DB::getServicios('01-04-2013 9:12...', '27-04-2013 09:1...')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_listarporfecha()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-27 09:17:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Servicio as array ~ APPPATH\views\reports\listado.php [ 67 ] in :
2013-04-27 09:17:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-27 09:19:23 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Servicio as array ~ APPPATH\views\reports\listado.php [ 67 ] in :
2013-04-27 09:19:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-27 09:19:28 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Servicio as array ~ APPPATH\views\reports\listado.php [ 67 ] in :
2013-04-27 09:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-27 09:27:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicio.IdCerda' in 'where clause' [ SELECT *, (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS Numero FROM `servicios` WHERE DATE(FechaServicio) >= DATE("2013-04-01 09:12:50") AND DATE(FechaServicio)  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-27 09:27:58 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, (SELE...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\db.php(166): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(24): Helpers_DB::getServicios('2013-04-01 09:1...', '2013-04-27 09:1...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_listarporfecha()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-27 09:40:05 --- CRITICAL: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\mpdf\classes\view\mpdf\core.php [ 20 ] in :
2013-04-27 09:40:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', 'C:\wamp\www\mfa...', 20, Array)
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(20): implode(',', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(26): View_mPDF_Core->__construct('reports/listado', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(25): View_mPDF_Core::factory('reports/listado', NULL, Array)
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_listarporfecha()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-04-27 09:40:22 --- CRITICAL: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\mpdf\classes\view\mpdf\core.php [ 20 ] in :
2013-04-27 09:40:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', 'C:\wamp\www\mfa...', 20, Array)
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(20): implode(',', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(26): View_mPDF_Core->__construct('reports/listado', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(25): View_mPDF_Core::factory('reports/listado', NULL, Array)
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_listarporfecha()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-04-27 09:44:50 --- CRITICAL: ErrorException [ 2 ]: preg_match() expects parameter 2 to be string, array given ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 1143 ] in :
2013-04-27 09:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() ex...', 'C:\wamp\www\mfa...', 1143, Array)
#1 C:\wamp\www\mfarm\modules\mpdf\vendor\mpdf\mpdf.php(1143): preg_match('/([\-+])aCJK/i', Array, NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(21): mPDF->mPDF(Array)
#3 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(30): View_mPDF_Core->__construct('reports/listado', NULL, Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(25): View_mPDF_Core::factory('reports/listado', NULL, Array)
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_listarporfecha()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-04-27 10:30:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'vivos' in 'field list' [ SELECT *, (SELECT Numero FROM cerdas WHERE cerdas.id=destetes.IdCerda) AS Numero, (pesototal/(vivos+muertos+momificados)) as PesoProm FROM `destetes` WHERE DATE(Fecha) >= DATE("2013-04-01 10:30:30") AND DATE(Fecha)  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-27 10:30:51 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, (SELE...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\db.php(183): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(51): Helpers_DB::getDestetes('2013-04-01 10:3...', '2013-04-27 10:3...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_listarporfecha()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-27 12:30:29 --- CRITICAL: View_Exception [ 0 ]: The requested view reportesporfecha.pdf could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-27 12:30:29 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('reportesporfech...')
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(30): Kohana_View->__construct('reportesporfech...', NULL)
#2 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(7): Kohana_View::factory('reportesporfech...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-27 12:42:28 --- CRITICAL: ErrorException [ 4096 ]: Method View_mPDF::__toString() must return a string value ~ SYSPATH\classes\Kohana\Response.php [ 160 ] in C:\wamp\www\mfarm\system\classes\Kohana\Response.php:160
2013-04-27 12:42:28 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\Response.php(160): Kohana_Core::error_handler(4096, 'Method View_mPD...', 'C:\wamp\www\mfa...', 160, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(52): Kohana_Response->body(Object(View_mPDF))
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_reportesporfecha()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\system\classes\Kohana\Response.php:160