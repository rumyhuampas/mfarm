<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-24 19:52:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 19:52:21 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 20:00:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND `servicios`.`IdCerda` = '1' ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 20:00:03 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\abmcerdas.php(80): Helpers_Charts::getCalendarData('1', 'false')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 20:15:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Cerda::getServicios() ~ APPPATH\classes\Controller\abmservicios.php [ 36 ] in :
2013-10-24 20:15:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-24 22:09:13 --- CRITICAL: Kohana_Exception [ 0 ]: The IdPrena property does not exist in the Model_Prena class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-10-24 22:09:13 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('IdPrena')
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\abmservicios.php(37): Kohana_ORM->__get('IdPrena')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-10-24 22:09:53 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'ESTCELO' ~ APPPATH\views\newservicio.php [ 45 ] in :
2013-10-24 22:09:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-24 22:14:23 --- CRITICAL: Kohana_Exception [ 0 ]: The ProbableFechaCelo21 property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-10-24 22:14:23 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('ProbableFechaCe...')
#1 C:\xampp\htdocs\MFarm\application\views\newservicio.php(147): Kohana_ORM->__get('ProbableFechaCe...')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\abmservicios.php(38): Kohana_View->render()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-10-24 22:14:37 --- CRITICAL: Kohana_Exception [ 0 ]: The ProbFechaCelo21 property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-10-24 22:14:37 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('ProbFechaCelo21')
#1 C:\xampp\htdocs\MFarm\application\views\newservicio.php(147): Kohana_ORM->__get('ProbFechaCelo21')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\abmservicios.php(38): Kohana_View->render()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-10-24 22:15:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicio.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=servicio.IdCerda) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdPrena` AS `IdPrena`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` WHERE `Id` = '2' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 22:15:44 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\MFarm\application\classes\Helpers\servicio.php(10): Kohana_ORM->find()
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\abmservicios.php(56): Helpers_Servicio::get('2')
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 22:32:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND `servicios`.`IdCerda` = '4' ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 22:32:20 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\abmcerdas.php(80): Helpers_Charts::getCalendarData('4', 'false')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 22:34:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 22:34:49 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 22:53:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicios.IdCerda' in 'where clause' [ SELECT CONCAT('Id: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda),'\\nMacho: ',servicios.Macho) AS `title`, `FechaServicio` AS `date`, '#D43F3F' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-10-24 22:53:10 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(62): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(18): Helpers_Charts::getCalendarData(NULL, 'true', 'false', 'true', 'false', 'true', 'true', 'true', 'true', 'true')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251