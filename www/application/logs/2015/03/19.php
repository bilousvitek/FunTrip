<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-19 00:23:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'login' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`firstname` AS `firstname`, `user`.`lastname` AS `lastname`, `user`.`adress` AS `adress`, `user`.`phone` AS `phone`, `user`.`mail` AS `mail`, `user`.`password` AS `password`, `user`.`age` AS `age`, `user`.`driving_exp` AS `driving_exp`, `user`.`avatar` AS `avatar`, `user`.`confirm` AS `confirm`, `user`.`accesses` AS `accesses` FROM `users` AS `user` WHERE `login` = 'no user' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-19 00:23:00 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\trip\www\application\classes\Controller\Entry.php(9): Kohana_ORM->find()
#4 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_entry()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#7 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-19 00:23:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'login' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`firstname` AS `firstname`, `user`.`lastname` AS `lastname`, `user`.`adress` AS `adress`, `user`.`phone` AS `phone`, `user`.`mail` AS `mail`, `user`.`password` AS `password`, `user`.`age` AS `age`, `user`.`driving_exp` AS `driving_exp`, `user`.`avatar` AS `avatar`, `user`.`confirm` AS `confirm`, `user`.`accesses` AS `accesses` FROM `users` AS `user` WHERE `login` = 'no user' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\trip\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-19 00:23:06 --- DEBUG: #0 Z:\home\trip\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\trip\www\application\classes\Controller\Entry.php(9): Kohana_ORM->find()
#4 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_entry()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#7 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\trip\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-19 14:27:45 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:27:45 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:31:39 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:31:39 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:31:44 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:31:44 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:36:43 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:36:43 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:36:47 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:36:47 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:53:29 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:53:29 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:53:36 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:53:36 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:55:40 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:55:40 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:56:02 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:56:02 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:57:09 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/error3 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 14:57:09 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/error3')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/error3', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Entry.php(78): Kohana_View::factory('errors/error3')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-19 23:51:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: remember ~ APPPATH\classes\Controller\Entry.php [ 61 ] in Z:\home\trip\www\application\classes\Controller\Entry.php:61
2015-03-19 23:51:03 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Entry.php(61): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 61, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Entry.php:61
2015-03-19 23:52:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: remember ~ APPPATH\classes\Controller\Entry.php [ 61 ] in Z:\home\trip\www\application\classes\Controller\Entry.php:61
2015-03-19 23:52:33 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Entry.php(61): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 61, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Entry.php:61