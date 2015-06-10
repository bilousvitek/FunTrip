<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-27 15:01:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first ~ APPPATH\classes\Controller\Ajax.php [ 7 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:7
2015-03-27 15:01:55 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\trip\ww...', 7, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:7
2015-03-27 16:12:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in Z:\home\trip\www\application\classes\Controller\Ajax.php:28
2015-03-27 16:12:01 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 28, Array)
#1 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getTrip()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\trip\www\application\classes\Controller\Ajax.php:28