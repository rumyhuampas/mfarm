<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-11 21:03:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_estados' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-08-11 21:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-11 22:18:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'servicio.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE servicio.IdCerda=cerdas.id) AS `Numero`, `servicio`.`Id` AS `Id`, `servicio`.`IdPrena` AS `IdPrena`, `servicio`.`FechaServicio` AS `FechaServicio`, `servicio`.`Macho` AS `Macho`, `servicio`.`Observaciones` AS `Observaciones` FROM `servicios` AS `servicio` JOIN `cerdas` ON (`cerdas`.`Id` = `servicio`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '5' AND DATE(FechaServicio) BETWEEN DATE(Now()) AND DATE(Now()) ORDER BY `FechaServicio` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-11 22:18:25 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Servicio', Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\MFarm\application\classes\Helpers\cerda.php(54): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\MFarm\application\views\_headerbar.php(10): Helpers_Cerda::getServicios(NULL, 'Now()')
#5 C:\xampp\htdocs\MFarm\application\views\newservicio.php(7): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\MFarm\application\classes\Controller\abmservicios.php(10): Kohana_View->render()
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#12 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251