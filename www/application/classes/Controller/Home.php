<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Home extends Controller_Sample_Common{
    
   public function action_index()
   {
       
       $head = View::factory('sections/head');
       $this->template->head = $head; 
       
       $search = View::factory('sections/search');
       $this->template->search = $search; 
       
       $working = View::factory('sections/working');
       $this->template->working = $working; 
       
       $mobile = View::factory('sections/mobile');
       $this->template->mobile = $mobile; 
       
       $contact = View::factory('sections/contact');
       $this->template->contact = $contact; 
       
       $footer = View::factory('sections/footer');
       $this->template->footer = $footer; 
       
       
   }
    
    public function action_temp()
    {
       $this->response->body('hello, world!');
    }
       
} // End Home
