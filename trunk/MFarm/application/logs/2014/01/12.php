<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-12 16:23:37 --- CRITICAL: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'UNION ALL ) t order by t.Fecha' at line 1 ( select * from ( UNION ALL ) t order by t.Fecha ) ~ MODPATH\mysqli\classes\kohana\database\mysqli.php [ 182 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251
2014-01-12 16:23:37 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select * from (...', true, Array)
#1 C:\xampp\htdocs\MFarm\application\classes\Helpers\venta.php(39): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\MFarm\application\classes\Controller\ventas.php(178): Helpers_Venta::getMonthTotal('12-2013')
#3 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Ventas->action_reportes()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ventas))
#6 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\Query.php:251