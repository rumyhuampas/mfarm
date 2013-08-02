<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-01 18:33:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Fecha' in 'order clause' [ SELECT `cliente`.`Id` AS `Id`, `cliente`.`DNI` AS `DNI`, `cliente`.`CUIL` AS `CUIL`, `cliente`.`Nombre` AS `Nombre`, `cliente`.`Direccion` AS `Direccion`, `cliente`.`Telefono` AS `Telefono`, `cliente`.`Observaciones` AS `Observaciones`, `cliente`.`Created_On` AS `Created_On`, `cliente`.`Modify_On` AS `Modify_On` FROM `clientes` AS `cliente` ORDER BY `Fecha` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-01 18:33:05 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cliente...', 'Model_Cliente', Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\MFarm\application\classes\Helpers\cliente.php(12): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\abmclientes.php(10): Helpers_Cliente::get()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMClientes->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMClientes))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-01 18:33:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Fecha' in 'order clause' [ SELECT `cliente`.`Id` AS `Id`, `cliente`.`DNI` AS `DNI`, `cliente`.`CUIL` AS `CUIL`, `cliente`.`Nombre` AS `Nombre`, `cliente`.`Direccion` AS `Direccion`, `cliente`.`Telefono` AS `Telefono`, `cliente`.`Observaciones` AS `Observaciones`, `cliente`.`Created_On` AS `Created_On`, `cliente`.`Modify_On` AS `Modify_On` FROM `clientes` AS `cliente` ORDER BY `Fecha` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-01 18:33:42 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cliente...', 'Model_Cliente', Array)
#1 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\MFarm\application\classes\Helpers\cliente.php(12): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\abmclientes.php(10): Helpers_Cliente::get()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMClientes->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMClientes))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2013-08-01 18:57:50 --- CRITICAL: Kohana_Exception [ 0 ]: The Modified_On property does not exist in the Model_Cliente class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-08-01 18:57:50 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Modified_On', Object(Database_Expression))
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\abmclientes.php(22): Kohana_ORM->__set('Modified_On', Object(Database_Expression))
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMClientes->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMClientes))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-08-01 20:12:35 --- CRITICAL: Kohana_Exception [ 0 ]: The Name property does not exist in the Model_Cliente class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-01 20:12:35 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Name')
#1 C:\xampp\htdocs\MFarm\application\views\editcliente.php(64): Kohana_ORM->__get('Name')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MFarm\application\classes\Controller\abmclientes.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMClientes->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMClientes))
#8 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:600
2013-08-01 20:15:06 --- CRITICAL: Kohana_Exception [ 0 ]: The Name property does not exist in the Model_Cliente class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699
2013-08-01 20:15:06 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Name', 'javier boero')
#1 C:\xampp\htdocs\MFarm\application\classes\Controller\abmclientes.php(67): Kohana_ORM->__set('Name', 'javier boero')
#2 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_ABMClientes->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMClientes))
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php:699