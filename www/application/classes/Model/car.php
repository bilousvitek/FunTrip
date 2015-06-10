<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Car extends ORM 
{
    protected $_belongs_to = array(
      'user'  => array(
               'model'       => 'user',
               'foreign_key' => 'user_id',
          ),
    
    );

}