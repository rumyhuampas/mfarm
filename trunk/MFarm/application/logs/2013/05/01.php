<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-01 22:55:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\Helpers\db.php [ 83 ] in :
2013-05-01 22:55:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 22:58:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Mach' in 'order clause' [ SELECT `Id`, `Macho`, COUNT(Id) as cnt FROM `servicios` WHERE DATE(FechaServicio) >= DATE("DATE(Now()) - 30)") GROUP BY `Macho` ORDER BY `cnt` DESC, `Mach` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-01 22:58:03 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Id`, `M...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\db.php(83): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(178): Helpers_DB::getMaxMachoServicios()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_getMaxMachoServicios()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251