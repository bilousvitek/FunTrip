<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-24 13:57:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH\views\sections\registred.php [ 47 ] in Z:\home\trip\www\application\views\sections\registred.php:47
2015-03-24 13:57:19 --- DEBUG: #0 Z:\home\trip\www\application\views\sections\registred.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 47, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\common.php(97): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\sections\registred.php:47
2015-03-24 16:05:13 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:17 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:17 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:18 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:18 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:47 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:50 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:51 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:51 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:51 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:51 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:05:59 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:05:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:01 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:02 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:45 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:46 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:47 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:47 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:47 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:47 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:47 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:06:47 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:10:20 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:10:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:10:24 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:10:25 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:10:30 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:10:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 16:10:36 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 16:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:08:02 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:08:03 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:08:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:08:03 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:08:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:08:03 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:08:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:08:04 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:08:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:08:15 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:08:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:08:18 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:08:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:09:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first ~ APPPATH\classes\Controller\Ajax.php [ 8 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:8
2015-03-24 23:09:18 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 8, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:8
2015-03-24 23:09:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first ~ APPPATH\classes\Controller\Ajax.php [ 8 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:8
2015-03-24 23:09:38 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 8, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:8
2015-03-24 23:15:46 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:15:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:15:50 --- CRITICAL: ErrorException [ 2 ]: mysql_fetch_array() expects parameter 1 to be resource, boolean given ~ APPPATH\classes\Controller\Ajax.php [ 15 ] in file:line
2015-03-24 23:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_fetch_arr...', 'Z:\home\trip\ww...', 15, Array)
#1 Z:\home\trip\www\application\classes\Controller\Ajax.php(15): mysql_fetch_array(false)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-24 23:32:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Temp.php [ 15 ] in file:line
2015-03-24 23:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-24 23:33:45 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Temp.php [ 9 ] in Z:\home\trip\www\application\classes\Controller\Temp.php:9
2015-03-24 23:33:45 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Temp.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\trip\ww...', 9, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Temp.php:9
2015-03-24 23:45:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_$trip' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-03-24 23:45:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-24 23:46:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_$trips' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-03-24 23:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-24 23:46:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_$trips' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-03-24 23:46:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-24 23:46:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_$trips' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-03-24 23:46:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-24 23:46:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_$trip' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-03-24 23:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-24 23:46:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_$trip' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-03-24 23:46:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line