<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Entry extends Controller_Sample_Entry{
    
     public function action_entry()
    {
         $users = ORM::factory('user')
             ->where('mail', '=', Cookie::get('mail','no user'))
             ->find();
         if(Cookie::get('mail', 'no user')==$users->mail && Cookie::get('pas')==$users->password )
         {
             if($users->accesses==1)
             {
                 $this->redirect('admin/adm');
             }
             else
             {
                 if($users->confirm==1)
                 {
                     $this->redirect('user/us');
                 }
                 else
                 {
                     $this->redirect('entry/login');
                 }
             }
         }
         else
         {
             $this->redirect('entry/login');
         }
     }
    
    public function action_login()
    {
         if(isset($_POST['confirm']))
        {
             $mail=Arr::get($_POST, 'mail', '');
             $pass=Arr::get($_POST, 'password', '');
             $users = ORM::factory('user')
                 ->where('mail', '=', $mail)
                 ->find();
             if($users->loaded())
             {
                 if($mail==$users->mail && $pass==$users->password)
                 {
                     if($users->accesses==1)
                     {   
                         Cookie::set('id', $users->id);
                         $this->remember($users->id);
                         $this->redirect('admin/adm');
                     }
                     else
                     {
                         if($users->confirm==1)
                         {   
                             Cookie::set('id', $users->id);
                             $this->remember($users->id);
                             $this->redirect('user/us');
                         }
                         else
                         {
                             $error = View::factory('errors/error1');
                             $this->template->error = $error;
                         }
                     }
                 }
                 else
                 {
                     $error = View::factory('errors/error2');
                     $this->template->error = $error;
                 }
             }
             else
             {
                 $error = View::factory('errors/error3');
                 $this->template->error = $error;   
             }
         }
        $content = View::factory('login');
        $this->template->content = $content;
    }
    public function remember($id)
    {
        if(isset($_POST['remember']))
        {
            Cookie::set('mail', $_POST['mail']);
            Cookie::set('pas', $_POST['password']);
            Cookie::set('id', $id);
        }
    }
    
         
} // End Entry