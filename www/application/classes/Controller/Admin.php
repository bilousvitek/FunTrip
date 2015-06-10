<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Sample_Admin{
    
   public function action_adm()
   {  
       $content= View::factory('admin/adm');
       $this->template->content = $content;  
   }
    
    public function action_newTrips()
   {  
       $content= View::factory('admin/newtrips');
       $this->template->content = $content;  
   }
    
    public function action_allTrips()
   {  
       $content= View::factory('admin/alltrips');
       $this->template->content = $content;  
   }
    
    public function action_messeges()
   {  
       $content= View::factory('admin/messeges');
       $this->template->content = $content;  
   }
    
    public function action_newUsers()
   {  
       $content= View::factory('admin/newusers');
       $this->template->content = $content;  
   }
    
    public function action_allUsers()
   {  
       $content= View::factory('admin/allusers');
       $this->template->content = $content;  
   }
    
    public function action_edit()
   {  
       $content= View::factory('admin/edit');
       $this->template->content = $content;  
   }
    
} // End Admin
