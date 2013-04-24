<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-02 20:57:31 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:75
2013-04-02 20:57:31 --- DEBUG: #0 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\mfarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\mfarm\application\classes\Controller\login.php(17): Kohana_ORM::factory('user')
#9 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\mfarm\modules\database\classes\Kohana\Database\MySQL.php:75
2013-04-02 21:01:14 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: adminwithmsg ~ SYSPATH\classes\Kohana\Route.php [ 106 ] in C:\wamp\www\mfarm\application\classes\Controller\login.php:26
2013-04-02 21:01:14 --- DEBUG: #0 C:\wamp\www\mfarm\application\classes\Controller\login.php(26): Kohana_Route::get('adminwithmsg')
#1 C:\wamp\www\mfarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\mfarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\mfarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\mfarm\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\mfarm\application\classes\Controller\login.php:26