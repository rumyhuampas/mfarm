<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-29 18:26:57 --- CRITICAL: Kohana_Exception [ 0 ]: The Password property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 18:26:57 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Password', '1234')
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\login.php(56): Kohana_ORM->__set('Password', '1234')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_createfirstuser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 18:27:44 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mfarm.partos' doesn't exist [ SHOW FULL COLUMNS FROM `partos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-29 18:27:44 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('partos')
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\MFarm\application\classes\Helpers\cerda.php(81): Kohana_ORM::factory('parto')
#7 C:\xampp\htdocs\MFarm\application\views\_headerbar.php(10): Helpers_Cerda::getPartos(NULL, 'Now()')
#8 C:\xampp\htdocs\MFarm\application\views\home.php(11): include('C:\xampp\htdocs...')
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#11 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(12): Kohana_View->render()
#12 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-29 18:41:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mfarm.destetes' doesn't exist [ SHOW FULL COLUMNS FROM `destetes` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-29 18:41:03 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('destetes')
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\MFarm\application\classes\Helpers\cerda.php(141): Kohana_ORM::factory('destete')
#7 C:\xampp\htdocs\MFarm\application\views\_headerbar.php(11): Helpers_Cerda::getDestetes(NULL, 'Now()')
#8 C:\xampp\htdocs\MFarm\application\views\home.php(11): include('C:\xampp\htdocs...')
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#11 C:\xampp\htdocs\MFarm\application\classes\Controller\home.php(12): Kohana_View->render()
#12 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-29 18:48:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cerdacelos.IdServicio' in 'on clause' [ SELECT `cerdacelos`.`Id`, `FechaServicio`, `ProbableFechaCelo21`, `ProbableFechaCelo42`, `Fecha`, `cerdacelos`.`Observaciones` FROM `servicios` JOIN `cerdacelos` ON (`servicios`.`Id` = `cerdacelos`.`IdServicio`) WHERE `servicios`.`IdCerda` = '1' ORDER BY `cerdacelos`.`Fecha` DESC LIMIT 100 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-29 18:48:07 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cerdace...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\cerda.php(187): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\abmcerdas.php(53): Helpers_Cerda::getRepeticiones('1')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-29 18:49:11 --- CRITICAL: Database_Exception [ 1146 ]: Table 'mfarm.lactanciaaudit' doesn't exist [ SHOW FULL COLUMNS FROM `lactanciaaudit` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-29 18:49:11 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('lactanciaaudit')
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\MFarm\application\classes\Helpers\cerda.php(100): Kohana_ORM::factory('lactanciaaudit')
#7 C:\xampp\htdocs\MFarm\application\classes\Controller\abmcerdas.php(55): Helpers_Cerda::getLactancias('1')
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_search()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-29 18:54:04 --- CRITICAL: Database_Exception [ 1052 ]: Column 'IdCerda' in order clause is ambiguous [ SELECT CONCAT('Servicio ID: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda)) AS `title`, `cerdacelos`.`Fecha` AS `date`, '#5DB8CF' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdacelos` ON (`servicios`.`Id` = `cerdacelos`.`IdServicio`) JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(Fecha) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `cerdacelos`.`Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-29 18:54:04 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(79): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\abmcerdas.php(72): Helpers_Charts::getCalendarData('1', 'false')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-29 18:54:38 --- CRITICAL: Database_Exception [ 1052 ]: Column 'IdCerda' in order clause is ambiguous [ SELECT CONCAT('Servicio ID: ',(servicios.Id),'\\nCerda: ',(select Numero from cerdas where cerdas.Id=servicios.IdCerda)) AS `title`, `cerdacelos`.`Fecha` AS `date`, '#5DB8CF' AS `backgroundColor`, '#404040' AS `borderColor`, '#303030' AS `textColor` FROM `servicios` JOIN `cerdacelos` ON (`servicios`.`Id` = `cerdacelos`.`IdServicio`) JOIN `cerdas` ON (`cerdas`.`Id` = `servicios`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(Fecha) >= DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) ORDER BY `cerdacelos`.`Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-29 18:54:38 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\charts.php(79): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\abmcerdas.php(72): Helpers_Charts::getCalendarData('1', 'false')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-29 19:11:16 --- CRITICAL: Kohana_Exception [ 0 ]: The Total property does not exist in the Model_LactanciaAudit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 19:11:16 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Total', 9)
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\abmpartos.php(29): Kohana_ORM->__set('Total', 9)
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 19:29:25 --- CRITICAL: Kohana_Exception [ 0 ]: The Dias property does not exist in the Model_Destete class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 19:29:25 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Dias', 14.010729166667)
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\abmdestetes.php(22): Kohana_ORM->__set('Dias', 14.010729166667)
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMDestetes->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMDestetes))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699