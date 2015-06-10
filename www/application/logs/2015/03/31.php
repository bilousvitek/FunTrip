<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-31 16:36:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-03-31 16:36:28 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-03-31 22:00:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-03-31 22:00:54 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-03-31 22:01:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-03-31 22:01:00 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-03-31 22:08:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\user\barus.php [ 8 ] in file:line
2015-03-31 22:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-31 22:08:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\user\barus.php [ 8 ] in file:line
2015-03-31 22:08:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-31 22:13:06 --- CRITICAL: View_Exception [ 0 ]: The requested view user/mycars could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-31 22:13:06 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/mycars')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/mycars', NULL)
#2 Z:\home\trip\www\application\classes\Controller\User.php(34): Kohana_View::factory('user/mycars')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_myCars()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-31 23:11:11 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/newuser could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\trip\www\system\classes\Kohana\View.php:137
2015-03-31 23:11:11 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/newuser')
#1 Z:\home\trip\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/newuser', NULL)
#2 Z:\home\trip\www\application\classes\Controller\Admin.php(31): Kohana_View::factory('admin/newuser')
#3 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_newUsers()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:137