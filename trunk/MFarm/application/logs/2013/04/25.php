<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-25 00:05:30 --- CRITICAL: View_Exception [ 0 ]: The requested view reports/testpdf could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-25 00:05:30 --- DEBUG: #0 C:\wamp\www\mfarm\system\classes\Kohana\View.php(137): Kohana_View->set_filename('reports/testpdf')
#1 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(19): Kohana_View->__construct('reports/testpdf', NULL)
#2 C:\wamp\www\mfarm\modules\mpdf\classes\view\mpdf\core.php(25): View_mPDF_Core->__construct('reports/testpdf', NULL)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(6): View_mPDF_Core::factory('reports/testpdf')
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_servicios()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\system\classes\Kohana\View.php:137
2013-04-25 20:13:53 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No connection could be made because the target machine actively refused it.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-25 20:13:53 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\mfarm\application\classes\Helpers\db.php(14): Kohana_ORM::factory('user')
#8 C:\wamp\www\mfarm\application\classes\Controller\login.php(7): Helpers_DB::isAnyUser()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-25 20:14:41 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No connection could be made because the target machine actively refused it.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-25 20:14:41 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\mfarm\application\classes\Helpers\db.php(14): Kohana_ORM::factory('user')
#8 C:\wamp\www\mfarm\application\classes\Controller\login.php(7): Helpers_DB::isAnyUser()
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:171
2013-04-25 20:50:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\reportes.php [ 10 ] in :
2013-04-25 20:50:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-25 22:44:52 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\reportes.php [ 73 ] in C:\wamp\www\mfarm\application\views\reportes.php:73
2013-04-25 22:44:52 --- DEBUG: #0 C:\wamp\www\mfarm\application\views\reportes.php(73): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\mfa...', 73, Array)
#1 C:\wamp\www\mfarm\system\classes\Kohana\View.php(61): include('C:\wamp\www\mfa...')
#2 C:\wamp\www\mfarm\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\mfa...', Array)
#3 C:\wamp\www\mfarm\application\classes\Controller\reportes.php(12): Kohana_View->render()
#4 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_listarporfecha()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#7 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\mfarm\application\views\reportes.php:73