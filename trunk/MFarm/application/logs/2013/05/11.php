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
2013-05-11 17:37:27 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database\Expression.php [ 118 ] in :
2013-05-11 17:37:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 18:29:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'partos.IdCerda' in 'on clause' [ SELECT CONCAT('Cerda: ',(select Numero from cerdas where cerdas.Id=destetes.IdCerda),'\\nLechones: ',destetes.Lechones,'\\nPeso Total: ',destetes.PesoTotal) AS `title`, `Fecha` AS `date`, '#6600FF' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `destetes` JOIN `cerdas` ON (`cerdas`.`Id` = `partos`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(Fecha) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 18:29:02 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(199): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true', 'true')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 18:29:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'partos.IdCerda' in 'on clause' [ SELECT CONCAT('Cerda: ',(select Numero from cerdas where cerdas.Id=destetes.IdCerda),'\\nLechones: ',destetes.Lechones,'\\nPeso Total: ',destetes.PesoTotal) AS `title`, `Fecha` AS `date`, '#6600FF' AS `backgroundColor`, '404040' AS `borderColor`, '#303030' AS `textColor` FROM `destetes` JOIN `cerdas` ON (`cerdas`.`Id` = `partos`.`IdCerda`) WHERE `cerdas`.`IdEstado`  '8' AND DATE(Fecha) BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 365 DAY)) AND DATE(Now()) ORDER BY `Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 18:29:18 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT CONCAT('...', false, Array)
#1 C:\wamp\www\mfarm\application\classes\Helpers\charts.php(199): Kohana_Database_Query->execute()
#2 C:\wamp\www\mfarm\application\classes\Controller\home.php(18): Helpers_Charts::getHomeCalendarData('true', 'true', 'true', 'true', 'true', 'true', 'true')
#3 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Home->action_addevent()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251