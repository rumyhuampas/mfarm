<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-14 20:59:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\views\newcelo.php [ 53 ] in :
2013-05-14 20:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 21:08:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\views\newcelo.php [ 53 ] in :
2013-05-14 21:08:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 21:08:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\views\newcelo.php [ 53 ] in :
2013-05-14 21:08:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 22:35:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_cerdacelo' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-14 22:35:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 22:36:22 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`mfarm`.`cerdacelos`, CONSTRAINT `FK_cerdacelos_servicios` FOREIGN KEY (`IdServicio`) REFERENCES `servicios` (`Id`)) [ INSERT INTO `cerdacelos` (`Fecha`, `Observaciones`) VALUES ('2013-05-14 21:41:30', 'test') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-14 22:36:22 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ce...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdacelos.php(17): Kohana_ORM->create()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdaCelos->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdaCelos))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-14 22:42:38 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`mfarm`.`cerdacelos`, CONSTRAINT `FK_cerdacelos_servicios` FOREIGN KEY (`IdServicio`) REFERENCES `servicios` (`Id`)) [ INSERT INTO `cerdacelos` (`Fecha`, `Observaciones`) VALUES ('2013-05-14 21:41:30', 'test') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-14 22:42:38 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ce...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\application\classes\Controller\abmcerdacelos.php(17): Kohana_ORM->create()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMCerdaCelos->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMCerdaCelos))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-14 22:42:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_cerdacelos' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-14 22:42:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :