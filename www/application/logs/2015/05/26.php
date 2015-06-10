<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-26 22:11:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Registr.php [ 74 ] in Z:\home\localhost\www\application\classes\Controller\Registr.php:74
2015-05-26 22:11:04 --- DEBUG: #0 Z:\home\localhost\www\application\classes\Controller\Registr.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 74, Array)
#1 Z:\home\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Registr->action_network()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registr))
#4 Z:\home\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\www\application\classes\Controller\Registr.php:74