<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_User extends ORM {
   protected $_has_many = array(
      'car'    => array(
               'model'       => 'car',
               'foreign_key' => 'user_id',
           ),
	  'trip'    => array(
               'model'       => 'trip',
               'foreign_key' => 'user_id',
           ),
		   
    );
};