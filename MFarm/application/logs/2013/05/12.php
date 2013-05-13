<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-12 16:41:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH\classes\Helpers\charts.php [ 8 ] in :
2013-05-12 16:41:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-12 16:46:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH\classes\Helpers\charts.php [ 8 ] in :
2013-05-12 16:46:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-12 16:57:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'FechaDESC' in 'order clause' [ SELECT `Peso` FROM `cerdaaudit` WHERE `IdCerda` = '14' ORDER BY `FechaDESC` LIMIT 20 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-12 16:57:21 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Peso` F...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(7): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdas.php(76): Helpers_Charts::getCerdaPesoData('14')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdas->action_getcerdachartdata()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdas))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-12 21:30:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Helpers_Charts::getLactanciaData() ~ APPPATH\classes\Controller\abmlactancias.php [ 59 ] in :
2013-05-12 21:30:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :