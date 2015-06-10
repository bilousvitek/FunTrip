<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-06 09:34:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\trip.php [ 93 ] in file:line
2015-04-06 09:34:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-06 09:34:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function format() on a non-object ~ APPPATH\views\trip.php [ 93 ] in file:line
2015-04-06 09:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-06 10:49:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 10:49:21 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 12:28:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\user\addtrip.php [ 57 ] in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:28:27 --- DEBUG: #0 Z:\home\trip\www\application\views\user\addtrip.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 57, Array)
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
#14 {main} in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:29:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\user\addtrip.php [ 57 ] in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:29:01 --- DEBUG: #0 Z:\home\trip\www\application\views\user\addtrip.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 57, Array)
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
#14 {main} in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:29:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\user\addtrip.php [ 57 ] in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:29:23 --- DEBUG: #0 Z:\home\trip\www\application\views\user\addtrip.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 57, Array)
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
#14 {main} in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:29:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\user\addtrip.php [ 57 ] in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:29:31 --- DEBUG: #0 Z:\home\trip\www\application\views\user\addtrip.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 57, Array)
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
#14 {main} in Z:\home\trip\www\application\views\user\addtrip.php:57
2015-04-06 12:30:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: trips ~ APPPATH\views\user\addtrip.php [ 59 ] in Z:\home\trip\www\application\views\user\addtrip.php:59
2015-04-06 12:30:27 --- DEBUG: #0 Z:\home\trip\www\application\views\user\addtrip.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 59, Array)
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
#14 {main} in Z:\home\trip\www\application\views\user\addtrip.php:59
2015-04-06 14:22:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: waypoint2 ~ APPPATH\classes\Controller\User.php [ 51 ] in Z:\home\trip\www\application\classes\Controller\User.php:51
2015-04-06 14:22:40 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(51): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 51, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_addTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:51
2015-04-06 14:23:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\Controller\User.php [ 62 ] in Z:\home\trip\www\application\classes\Controller\User.php:62
2015-04-06 14:23:11 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 62, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_addTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:62
2015-04-06 15:40:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 15:40:43 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 16:03:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 16:03:39 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 16:03:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 16:03:48 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 16:03:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-04-06 16:03:52 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28