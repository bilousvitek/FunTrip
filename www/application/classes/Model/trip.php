<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Trip extends ORM 
{
    protected $_belongs_to = array(
      'user'  => array(
               'model'       => 'user',
               'foreign_key' => 'user_id',
          ),
          'car'  => array(
               'model'       => 'car',
               'foreign_key' => 'car_id',
          ),
        
    );

}