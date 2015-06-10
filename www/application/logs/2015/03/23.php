<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-23 12:03:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Sample\User.php [ 13 ] in file:line
2015-03-23 12:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-23 12:53:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Home.php [ 19 ] in file:line
2015-03-23 12:53:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-23 12:54:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Home.php [ 19 ] in file:line
2015-03-23 12:54:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-23 13:05:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Home.php [ 97 ] in file:line
2015-03-23 13:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-23 13:06:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH\views\sections\registred.php [ 47 ] in Z:\home\trip\www\application\views\sections\registred.php:47
2015-03-23 13:06:26 --- DEBUG: #0 Z:\home\trip\www\application\views\sections\registred.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 47, Array)
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
2015-03-23 13:32:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: registr ~ APPPATH\views\static\registrcom.php [ 49 ] in Z:\home\trip\www\application\views\static\registrcom.php:49
2015-03-23 13:32:34 --- DEBUG: #0 Z:\home\trip\www\application\views\static\registrcom.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 49, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registr))
#7 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\trip\www\application\views\static\registrcom.php:49
2015-03-23 13:33:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: captcha ~ APPPATH\classes\Controller\Registr.php [ 21 ] in Z:\home\trip\www\application\classes\Controller\Registr.php:21
2015-03-23 13:33:29 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Registr.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\application\classes\Controller\Registr.php(12): Controller_Registr->addUser(0)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Registr->action_registr()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registr))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\trip\www\application\classes\Controller\Registr.php:21
2015-03-23 13:34:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: captcha ~ APPPATH\classes\Controller\Registr.php [ 21 ] in Z:\home\trip\www\application\classes\Controller\Registr.php:21
2015-03-23 13:34:09 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Registr.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 21, Array)
#1 Z:\home\trip\www\application\classes\Controller\Registr.php(12): Controller_Registr->addUser(0)
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Registr->action_registr()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registr))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\trip\www\application\classes\Controller\Registr.php:21