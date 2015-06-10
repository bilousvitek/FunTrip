<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-05 15:25:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-05 15:25:05 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-05 15:26:11 --- CRITICAL: Kohana_Exception [ 0 ]: The startPoint property does not exist in the Model_Trip class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php:603
2015-04-05 15:26:11 --- DEBUG: #0 Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('startPoint')
#1 Z:\home\trip\www\application\views\user\mytrip.php(15): Kohana_ORM->__get('startPoint')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#3 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#4 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#6 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#7 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#8 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\trip\www\modules\orm\classes\Kohana\ORM.php:603
2015-04-05 15:35:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data_first ~ APPPATH\views\user\mytrip.php [ 16 ] in Z:\home\trip\www\application\views\user\mytrip.php:16
2015-04-05 15:35:39 --- DEBUG: #0 Z:\home\trip\www\application\views\user\mytrip.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 16, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\mytrip.php:16
2015-04-05 15:37:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\user\mytrip.php [ 11 ] in file:line
2015-04-05 15:37:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 15:45:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\user\mytrip.php [ 18 ] in file:line
2015-04-05 15:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 16:22:08 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Trip - assumed 'Trip' ~ APPPATH\views\user\mytrip.php [ 21 ] in Z:\home\trip\www\application\views\user\mytrip.php:21
2015-04-05 16:22:08 --- DEBUG: #0 Z:\home\trip\www\application\views\user\mytrip.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\mytrip.php:21
2015-04-05 16:22:41 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Trip - assumed 'Trip' ~ APPPATH\views\user\mytrip.php [ 22 ] in Z:\home\trip\www\application\views\user\mytrip.php:22
2015-04-05 16:22:41 --- DEBUG: #0 Z:\home\trip\www\application\views\user\mytrip.php(22): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\trip\ww...', 22, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\mytrip.php:22
2015-04-05 16:24:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ')' ~ APPPATH\views\user\mytrip.php [ 22 ] in file:line
2015-04-05 16:24:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 16:27:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Trip.php [ 6 ] in Z:\home\trip\www\application\classes\Controller\Trip.php:6
2015-04-05 16:27:09 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Trip.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 6, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Trip->action_trip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trip))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Trip.php:6
2015-04-05 16:46:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: trip ~ APPPATH\classes\Controller\User.php [ 79 ] in Z:\home\trip\www\application\classes\Controller\User.php:79
2015-04-05 16:46:41 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 79, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:79
2015-04-05 16:47:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: trip ~ APPPATH\classes\Controller\User.php [ 79 ] in Z:\home\trip\www\application\classes\Controller\User.php:79
2015-04-05 16:47:15 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 79, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:79
2015-04-05 16:47:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$data_first ~ APPPATH\views\user\mytrip.php [ 16 ] in Z:\home\trip\www\application\views\user\mytrip.php:16
2015-04-05 16:47:21 --- DEBUG: #0 Z:\home\trip\www\application\views\user\mytrip.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\trip\ww...', 16, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\mytrip.php:16
2015-04-05 16:47:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$starting_point ~ APPPATH\views\user\mytrip.php [ 17 ] in Z:\home\trip\www\application\views\user\mytrip.php:17
2015-04-05 16:47:55 --- DEBUG: #0 Z:\home\trip\www\application\views\user\mytrip.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\trip\ww...', 17, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\mytrip.php:17
2015-04-05 16:47:58 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$starting_point ~ APPPATH\views\user\mytrip.php [ 17 ] in Z:\home\trip\www\application\views\user\mytrip.php:17
2015-04-05 16:47:58 --- DEBUG: #0 Z:\home\trip\www\application\views\user\mytrip.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\trip\ww...', 17, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\mytrip.php:17
2015-04-05 16:48:12 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\user\mytrip.php [ 22 ] in Z:\home\trip\www\application\views\user\mytrip.php:22
2015-04-05 16:48:12 --- DEBUG: #0 Z:\home\trip\www\application\views\user\mytrip.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\trip\ww...', 22, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\mytrip.php:22
2015-04-05 16:48:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: trip ~ APPPATH\classes\Controller\User.php [ 79 ] in Z:\home\trip\www\application\classes\Controller\User.php:79
2015-04-05 16:48:27 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 79, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:79
2015-04-05 19:23:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\Controller\User.php [ 91 ] in file:line
2015-04-05 19:23:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 19:23:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\Controller\User.php [ 91 ] in file:line
2015-04-05 19:23:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 19:23:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: confirm ~ APPPATH\classes\Controller\User.php [ 74 ] in Z:\home\trip\www\application\classes\Controller\User.php:74
2015-04-05 19:23:58 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 74, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:74
2015-04-05 19:24:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: confirm ~ APPPATH\classes\Controller\User.php [ 74 ] in Z:\home\trip\www\application\classes\Controller\User.php:74
2015-04-05 19:24:07 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 74, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:74
2015-04-05 19:25:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\user\mytrip.php [ 22 ] in file:line
2015-04-05 19:25:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 19:26:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\user\mytrip.php [ 22 ] in file:line
2015-04-05 19:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 19:27:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\user\mytrip.php [ 22 ] in file:line
2015-04-05 19:27:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 19:27:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\user\mytrip.php [ 22 ] in file:line
2015-04-05 19:27:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 20:31:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\user\mytrip.php [ 22 ] in file:line
2015-04-05 20:31:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 20:32:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\user\mytrip.php [ 22 ] in file:line
2015-04-05 20:32:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 20:32:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: confirm ~ APPPATH\classes\Controller\User.php [ 74 ] in Z:\home\trip\www\application\classes\Controller\User.php:74
2015-04-05 20:32:51 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 74, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:74
2015-04-05 20:37:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: trip ~ APPPATH\views\user\delete.php [ 9 ] in Z:\home\trip\www\application\views\user\delete.php:9
2015-04-05 20:37:23 --- DEBUG: #0 Z:\home\trip\www\application\views\user\delete.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 9, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\trip\www\application\views\static\usercom.php(82): Kohana_View->__toString()
#5 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#6 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#7 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\trip\www\application\views\user\delete.php:9
2015-04-05 20:37:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\classes\Controller\User.php [ 76 ] in Z:\home\trip\www\application\classes\Controller\User.php:76
2015-04-05 20:37:49 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 76, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:76
2015-04-05 20:51:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\User.php [ 97 ] in Z:\home\trip\www\application\classes\Controller\User.php:97
2015-04-05 20:51:57 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 97, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_editTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:97