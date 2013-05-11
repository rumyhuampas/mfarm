<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-10 23:52:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_lactancias' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-10 23:52:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-10 23:53:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'parto.IdCerda' in 'where clause' [ SELECT (SELECT Numero FROM cerdas WHERE cerdas.id=parto.IdCerda) AS `Numero`, `lactanciaaudit`.`Id` AS `Id`, `lactanciaaudit`.`IdCerda` AS `IdCerda`, `lactanciaaudit`.`Fecha` AS `Fecha`, `lactanciaaudit`.`Adoptados` AS `Adoptados`, `lactanciaaudit`.`Muertos` AS `Muertos`, `lactanciaaudit`.`Observaciones` AS `Observaciones` FROM `lactanciaaudit` AS `lactanciaaudit` WHERE `IdCerda` = '24' ORDER BY `Fecha` DESC, `IdCerda` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-10 23:53:33 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_Lactancia...', Array)
#1 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\mfarm\application\classes\Helpers\cerda.php(90): Kohana_ORM->find_all()
#4 C:\wamp\www\mfarm\application\classes\Controller\abmlactancias.php(40): Helpers_Cerda::getLactancias('24')
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMLactancias->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMLactancias))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\Query.php:251
2013-05-10 23:55:22 --- CRITICAL: Kohana_Exception [ 0 ]: The Total property does not exist in the Model_LactanciaAudit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600
2013-05-10 23:55:22 --- DEBUG: #0 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Total')
#1 C:\wamp\www\mfarm\application\views\newlactancia.php(159): Kohana_ORM->__get('Total')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#3 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#4 C:\wamp\www\mfarm\application\classes\Controller\abmlactancias.php(41): Kohana_View->render()
#5 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_ABMLactancias->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMLactancias))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php:600