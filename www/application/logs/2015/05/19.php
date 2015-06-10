<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-19 22:20:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\classes\Controller\User.php [ 104 ] in Z:\home\trip\www\application\classes\Controller\User.php:104
2015-05-19 22:20:28 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 104, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_myTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:104
2015-05-19 22:20:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\classes\Controller\User.php [ 104 ] in Z:\home\trip\www\application\classes\Controller\User.php:104
2015-05-19 22:20:35 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\User.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 104, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_User->action_myTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\User.php:104