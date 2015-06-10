<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-02 23:06:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Temp.php [ 18 ] in file:line
2015-04-02 23:06:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:06:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Temp.php [ 18 ] in file:line
2015-04-02 23:06:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:07:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Temp.php [ 18 ] in file:line
2015-04-02 23:07:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:07:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Temp.php [ 18 ] in file:line
2015-04-02 23:07:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:14:00 --- CRITICAL: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ APPPATH\classes\Controller\Temp.php [ 13 ] in file:line
2015-04-02 23:14:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'Z:\home\trip\ww...', 13, Array)
#1 Z:\home\trip\www\application\classes\Controller\Temp.php(13): explode(':', Object(Database_MySQL_Result))
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-02 23:14:02 --- CRITICAL: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ APPPATH\classes\Controller\Temp.php [ 13 ] in file:line
2015-04-02 23:14:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'Z:\home\trip\ww...', 13, Array)
#1 Z:\home\trip\www\application\classes\Controller\Temp.php(13): explode(':', Object(Database_MySQL_Result))
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-02 23:15:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Temp.php [ 11 ] in file:line
2015-04-02 23:15:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:15:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Temp.php [ 11 ] in file:line
2015-04-02 23:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:16:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Temp.php [ 11 ] in file:line
2015-04-02 23:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:16:18 --- CRITICAL: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ APPPATH\classes\Controller\Temp.php [ 13 ] in file:line
2015-04-02 23:16:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'Z:\home\trip\ww...', 13, Array)
#1 Z:\home\trip\www\application\classes\Controller\Temp.php(13): explode(':', Object(Database_MySQL_Result))
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-02 23:48:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$starting_point ~ APPPATH\classes\Controller\Temp.php [ 12 ] in Z:\home\trip\www\application\classes\Controller\Temp.php:12
2015-04-02 23:48:21 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Temp.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\trip\ww...', 12, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Temp.php:12
2015-04-02 23:49:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$finish_point ~ APPPATH\classes\Controller\Temp.php [ 13 ] in Z:\home\trip\www\application\classes\Controller\Temp.php:13
2015-04-02 23:49:35 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Temp.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\trip\ww...', 13, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Temp.php:13
2015-04-02 23:50:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\trip\www\application\classes\Controller\Temp.php on line 16 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\trip\www\system\classes\Kohana\View.php:28
2015-04-02 23:50:26 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\application\classes\Controller\Temp.php(16): Kohana_View::factory('temp', '????????', '??????????')
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:28
2015-04-02 23:50:54 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\trip\www\application\classes\Controller\Temp.php on line 16 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\trip\www\system\classes\Kohana\View.php:28
2015-04-02 23:50:54 --- DEBUG: #0 Z:\home\trip\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\application\classes\Controller\Temp.php(16): Kohana_View::factory('temp', '????????')
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\trip\www\system\classes\Kohana\View.php:28
2015-04-02 23:54:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: trip ~ APPPATH\classes\Controller\Temp.php [ 13 ] in Z:\home\trip\www\application\classes\Controller\Temp.php:13
2015-04-02 23:54:50 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Temp.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 13, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Temp->action_temp()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Temp.php:13
2015-04-02 23:55:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: inter ~ APPPATH\views\temp.php [ 37 ] in Z:\home\trip\www\application\views\temp.php:37
2015-04-02 23:55:00 --- DEBUG: #0 Z:\home\trip\www\application\views\temp.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 37, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\temp.php(20): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Temp))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\temp.php:37