<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-21 00:07:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\editlactancia.php [ 32 ] in :
2013-05-21 00:07:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-21 00:07:59 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`mfarm`.`lactanciaaudit`, CONSTRAINT `FK_lactanciaaudit_cerdas` FOREIGN KEY (`IdCerda`) REFERENCES `cerdas` (`Id`)) [ INSERT INTO `lactanciaaudit` (`Fecha`, `Adoptados`, `Muertos`, `Total`, `Observaciones`) VALUES ('2013-10-15 00:06:39', '1', '1', 0, '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-21 00:07:59 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `la...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\application\classes\Controller\abmlactancias.php(27): Kohana_ORM->create()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMLactancias->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMLactancias))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251