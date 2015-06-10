<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-01 13:06:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 320 ] in file:line
2015-04-01 13:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 13:06:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 320 ] in file:line
2015-04-01 13:06:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 13:07:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 320 ] in file:line
2015-04-01 13:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 13:28:12 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\static\common.php [ 133 ] in Z:\home\trip\www\application\views\static\common.php:133
2015-04-01 13:28:12 --- DEBUG: #0 Z:\home\trip\www\application\views\static\common.php(133): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\trip\ww...', 133, Array)
#1 Z:\home\trip\www\system\classes\Kohana\View.php(61): include('Z:\home\trip\ww...')
#2 Z:\home\trip\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\trip\ww...', Array)
#3 Z:\home\trip\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\trip\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\trip\www\application\views\static\common.php:133