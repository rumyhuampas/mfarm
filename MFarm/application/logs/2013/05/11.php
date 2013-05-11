<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-11 01:11:48 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`mfarm`.`lactanciaaudit`, CONSTRAINT `FK_lactanciaaudit_partos` FOREIGN KEY (`IdParto`) REFERENCES `partos` (`Id`)) [ INSERT INTO `lactanciaaudit` (`IdCerda`, `IdParto`, `Fecha`, `Adoptados`, `Muertos`, `Observaciones`) VALUES ('24', '', '2013-05-11 01:11:38', '3', '2', 'test') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 01:11:48 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `la...', false, Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\application\classes\Controller\abmlactancias.php(21): Kohana_ORM->create()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMLactancias->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMLactancias))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 15:21:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_lactancia' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-11 15:21:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :