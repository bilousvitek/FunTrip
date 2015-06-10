<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-24 14:24:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 29 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:29
2015-04-24 14:24:34 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 29, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:29
2015-04-24 14:51:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: startPoint ~ APPPATH\views\trip.php [ 21 ] in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:51:36 --- DEBUG: #0 Z:\home\trip\www\application\views\trip.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(97): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:52:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: startPoint ~ APPPATH\views\trip.php [ 21 ] in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:52:21 --- DEBUG: #0 Z:\home\trip\www\application\views\trip.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(97): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:52:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: startPoint ~ APPPATH\views\trip.php [ 21 ] in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:52:32 --- DEBUG: #0 Z:\home\trip\www\application\views\trip.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(97): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:52:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: startPoint ~ APPPATH\views\trip.php [ 21 ] in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:52:52 --- DEBUG: #0 Z:\home\trip\www\application\views\trip.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(97): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:53:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: startPoint ~ APPPATH\views\trip.php [ 21 ] in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:53:02 --- DEBUG: #0 Z:\home\trip\www\application\views\trip.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(97): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:53:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: startPoint ~ APPPATH\views\trip.php [ 21 ] in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 14:53:05 --- DEBUG: #0 Z:\home\trip\www\application\views\trip.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(97): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\trip.php:21
2015-04-24 15:20:29 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:29 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:34 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:34 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:35 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:35 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:35 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:35 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:35 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:35 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:36 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:36 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:36 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:36 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:47 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:47 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:53 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:20:53 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:21:02 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:21:02 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:21:14 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:21:14 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('trips')
#3 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\trip\www\application\classes\Controller\Ajax.php(9): Kohana_ORM::factory('trip')
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-24 15:23:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Sample_Timp' not found ~ APPPATH\classes\Controller\Trip.php [ 3 ] in file:line
2015-04-24 15:23:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:14:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 29 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:29
2015-04-24 22:14:28 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 29, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:29
2015-04-24 22:14:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 29 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:29
2015-04-24 22:14:36 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 29, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:29
2015-04-24 22:46:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:46:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:51:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:51:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:51:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:51:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:51:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:52:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:52:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:52:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:54:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 19 ] in file:line
2015-04-24 22:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 22:56:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Ajax.php [ 48 ] in file:line
2015-04-24 22:56:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 23:12:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 32 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:32
2015-04-24 23:12:20 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 32, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:32
2015-04-24 23:14:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 32 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:32
2015-04-24 23:14:34 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 32, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:32
2015-04-24 23:16:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Ajax.php [ 14 ] in file:line
2015-04-24 23:16:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 23:18:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 30 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:18:47 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 30, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:19:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 30 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:19:36 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 30, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:19:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 30 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:19:53 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 30, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:21:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first ~ APPPATH\classes\Controller\Ajax.php [ 7 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:7
2015-04-24 23:21:01 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 7, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:7
2015-04-24 23:21:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 30 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:21:27 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 30, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:21:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 30 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:21:28 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 30, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:27:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 30 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:27:13 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 30, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:30
2015-04-24 23:39:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 48 ] in file:line
2015-04-24 23:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 23:39:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 48 ] in file:line
2015-04-24 23:39:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-24 23:43:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 52 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:52
2015-04-24 23:43:07 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 52, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:52
2015-04-24 23:43:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 52 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:52
2015-04-24 23:43:11 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 52, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:52
2015-04-24 23:43:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 52 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:52
2015-04-24 23:43:15 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 52, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:52