<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-03 18:42:53 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'mfarm' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:75
2013-07-03 18:42:53 --- DEBUG: #0 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('mfarm')
#1 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\MFarm\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\MFarm\application\classes\Helpers\user.php(20): Kohana_ORM::factory('user')
#9 C:\xampp\htdocs\MFarm\application\classes\Controller\login.php(7): Helpers_User::isAnyUser()
#10 C:\xampp\htdocs\MFarm\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\MFarm\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\MFarm\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\MFarm\modules\database\classes\Kohana\Database\MySQL.php:75