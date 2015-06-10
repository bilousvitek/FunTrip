<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-20 00:00:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\classes\Controller\Entry.php [ 93 ] in Z:\home\trip\www\application\classes\Controller\Entry.php:93
2015-03-20 00:00:04 --- DEBUG: #0 Z:\home\trip\www\application\classes\Controller\Entry.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\trip\ww...', 93, Array)
#1 Z:\home\trip\www\application\classes\Controller\Entry.php(62): Controller_Entry->remember()
#2 Z:\home\trip\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\trip\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#5 Z:\home\trip\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\trip\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\trip\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\trip\www\application\classes\Controller\Entry.php:93