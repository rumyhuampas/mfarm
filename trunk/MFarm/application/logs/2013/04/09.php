<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-09 22:18:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\Controller\abmcerdas.php [ 106 ] in :
2013-04-09 22:18:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 22:18:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `cerdaaudit`.`IdCerda` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:18:55 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:19:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:19:45 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:25:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:25:26 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:25:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:25:30 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:27:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:27:12 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:29:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:29:33 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:45:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '8' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:45:47 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:52:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '8' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:52:32 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:56:01 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Peso, Fecha' in 'field list' [ SELECT `Peso, Fecha` FROM `cerdaaudit` WHERE `IdCerda` = '8' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 22:56:01 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso, F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-04-09 23:02:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function expr() ~ APPPATH\classes\Controller\abmcerdas.php [ 106 ] in :
2013-04-09 23:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 23:03:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Fecha ~ MODPATH\database\classes\Kohana\Database\Result.php [ 164 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Result.php:164
2013-04-09 23:03:06 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Result.php(164): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 164, Array)
#1 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(106): Kohana_Database_Result->as_array('Peso', 'Fecha')
#2 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Result.php:164
2013-04-09 23:08:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:08:23 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:13:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:13:42 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:14:03 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:14:03 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:14:33 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:14:33 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:14:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:14:43 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:16:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:16:08 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:17:13 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:17:13 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:19:38 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-04-09 23:19:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\wamp\www\mfa...', 33, Array)
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #70, 'Peso')
#2 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('Peso')
#3 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Database_Result->offsetGet('Peso')
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-04-09 23:20:29 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:20:29 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:20:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Peso ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:20:46 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:23:49 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:23:49 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:27:30 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:27:30 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:27:39 --- CRITICAL: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in :
2013-04-09 23:27:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 23:29:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Fecha ~ APPPATH\classes\Controller\abmcerdas.php [ 109 ] in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109
2013-04-09 23:29:07 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\mfa...', 109, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php:109