<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-16 12:57:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\views\static\common.php [ 101 ] in Z:\home\diplom\www\application\views\static\common.php:101
2015-03-16 12:57:49 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diplom\...', 101, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:101
2015-03-16 13:11:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\Controller\Common.php [ 16 ] in file:line
2015-03-16 13:11:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-16 13:14:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\Controller\Common.php [ 16 ] in file:line
2015-03-16 13:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-16 13:14:28 --- CRITICAL: View_Exception [ 0 ]: The requested view sections/head could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\diplom\www\system\classes\Kohana\View.php:145
2015-03-16 13:14:28 --- DEBUG: #0 Z:\home\diplom\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('sections/head')
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('sections/head', NULL)
#2 Z:\home\diplom\www\application\classes\Controller\Home.php(8): Kohana_View::factory('sections/head')
#3 Z:\home\diplom\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\diplom\www\system\classes\Kohana\View.php:145
2015-03-16 13:24:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Sample_Common' not found ~ APPPATH\classes\Controller\Home.php [ 3 ] in file:line
2015-03-16 13:24:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-16 13:24:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Sample_Common' not found ~ APPPATH\classes\Controller\Home.php [ 3 ] in file:line
2015-03-16 13:24:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-16 13:25:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Sample_Common' not found ~ APPPATH\classes\Controller\Home.php [ 3 ] in file:line
2015-03-16 13:25:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-16 13:40:55 --- CRITICAL: View_Exception [ 0 ]: The requested view entry could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\diplom\www\system\classes\Kohana\View.php:145
2015-03-16 13:40:55 --- DEBUG: #0 Z:\home\diplom\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('entry')
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('entry', NULL)
#2 Z:\home\diplom\www\application\classes\Controller\Entry.php(8): Kohana_View::factory('entry')
#3 Z:\home\diplom\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_entry()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\diplom\www\system\classes\Kohana\View.php:145
2015-03-16 13:55:28 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Home - assumed 'Home' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:28 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:44 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:44 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:45 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:45 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:46 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:46 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:47 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:47 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:47 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:55:47 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:56:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Entry - assumed 'Entry' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:56:25 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:56:33 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Entry - assumed 'Entry' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:56:33 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:56:39 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Entry - assumed 'Entry' ~ APPPATH\views\static\common.php [ 66 ] in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 13:56:39 --- DEBUG: #0 Z:\home\diplom\www\application\views\static\common.php(66): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\diplom\...', 66, Array)
#1 Z:\home\diplom\www\system\classes\Kohana\View.php(62): include('Z:\home\diplom\...')
#2 Z:\home\diplom\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\diplom\...', Array)
#3 Z:\home\diplom\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\diplom\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\diplom\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\diplom\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\diplom\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\diplom\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\diplom\www\application\views\static\common.php:66
2015-03-16 14:06:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\Controller\Home.php [ 30 ] in file:line
2015-03-16 14:06:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line