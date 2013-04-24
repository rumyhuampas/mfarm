<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-20 16:07:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Const' not found ~ APPPATH\views\newcerda.php [ 89 ] in :
2013-04-20 16:07:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 16:08:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::params() ~ APPPATH\classes\Controller\abmcerdas.php [ 190 ] in :
2013-04-20 16:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 16:25:43 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\abmservicios.php [ 15 ] in :
2013-04-20 16:25:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\wamp\www\mfa...', 15, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(15): date('Y-m-d H:i:s', '20/04/2013 16:2...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-20 16:36:23 --- CRITICAL: Exception [ 0 ]: DateTime::__construct() [datetime.--construct]: Failed to parse time string (20/04/2013 16:35:45) at position 0 (2): Unexpected character ~ APPPATH\classes\Controller\abmservicios.php [ 15 ] in C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php:15
2013-04-20 16:36:23 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php(15): DateTime->__construct('20/04/2013 16:3...')
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMServicios->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMServicios))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmservicios.php:15
2013-04-20 16:49:18 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'timezone' ~ APPPATH\classes\Controller\abmservicios.php [ 15 ] in :
2013-04-20 16:49:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 16:49:49 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'timezone' ~ APPPATH\classes\Controller\abmservicios.php [ 15 ] in :
2013-04-20 16:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 17:08:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\abmservicios.php [ 15 ] in :
2013-04-20 17:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 18:02:31 --- CRITICAL: Database_Exception [ 1267 ]: Illegal mix of collations (latin1_spanish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation '=' [ SELECT `estado`.`Id` AS `Id`, `estado`.`Nombre` AS `Nombre`, `estado`.`CanDelete` AS `CanDelete` FROM `estados` AS `estado` WHERE `Nombre` = 'PREÑADA' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-20 18:02:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `estado`...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(111): Kohana_ORM->find()
#4 C:\wamp\www\mfarm\application\views\newparto.php(50): Helpers_DB::getEstadoId('PRE?ADA')
#5 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#6 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#7 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-20 18:06:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function select() ~ APPPATH\classes\Helpers\db.php [ 111 ] in :
2013-04-20 18:06:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 18:06:16 --- CRITICAL: Database_Exception [ 1267 ]: Illegal mix of collations (latin1_spanish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation '=' [ SELECT `Id` FROM `estados` WHERE `Nombre` = 'PREÑADA' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-20 18:06:16 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Id` FRO...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\db.php(111): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\views\newparto.php(50): Helpers_DB::getEstadoId('PRE?ADA')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#4 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#5 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-20 18:08:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estado ~ APPPATH\views\newparto.php [ 69 ] in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:08:31 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newparto.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 69, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:09:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estado ~ APPPATH\views\newparto.php [ 69 ] in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:09:52 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newparto.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 69, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:09:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estado ~ APPPATH\views\newparto.php [ 69 ] in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:09:57 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newparto.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 69, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:10:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: estado ~ APPPATH\views\newparto.php [ 69 ] in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:10:33 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newparto.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mfa...', 69, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newparto.php:69
2013-04-20 18:12:19 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\newparto.php [ 52 ] in C:\wamp\www\mfarm\application\views\newparto.php:52
2013-04-20 18:12:19 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\newparto.php(52): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\mfa...', 52, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\newparto.php:52
2013-04-20 18:13:32 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-04-20 18:13:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\wamp\www\mfa...', 33, Array)
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #110, 'Id')
#2 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('Id')
#3 C:\wamp\www\mfarm\application\classes\Helpers\db.php(112): Kohana_Database_Result->offsetGet('Id')
#4 C:\wamp\www\mfarm\application\views\newparto.php(50): Helpers_DB::getEstadoId('PRENADA')
#5 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#6 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#7 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#8 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#14 {main} in :
2013-04-20 18:13:50 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Helpers\db.php [ 112 ] in C:\wamp\www\mfarm\application\classes\Helpers\db.php:112
2013-04-20 18:13:50 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Helpers\db.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 112, Array)
#1 C:\wamp\www\mfarm\application\views\newparto.php(50): Helpers_DB::getEstadoId('PRENADA')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(35): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\application\classes\Helpers\db.php:112
2013-04-20 18:42:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_DB::getCerdaPartos() ~ APPPATH\classes\Controller\abmpartos.php [ 35 ] in :
2013-04-20 18:42:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 18:44:30 --- CRITICAL: Kohana_Exception [ 0 ]: The Momoficados property does not exist in the Model_Parto class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-20 18:44:30 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Momoficados')
#1 C:\wamp\www\mfarm\application\views\newparto.php(172): Kohana_ORM->__get('Momoficados')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmpartos.php(36): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMPartos->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMPartos))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-04-20 18:50:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Const::POSTPARTO() ~ APPPATH\classes\Controller\abmpartos.php [ 23 ] in :
2013-04-20 18:50:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :