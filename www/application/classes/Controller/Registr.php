<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Registr extends Controller_Sample_Registr{
    
     public function action_registr()
    {
        $captcha = Captcha::instance('default'); 
        $registr = View::factory('sections/registred')
            ->bind('captcha', $captcha)
            ;
        $this->addUser(0);     
        $this->template->registr = $registr;
     }
    
     public function addUser($role)
    {  
        
        if(isset($_POST['add']))
        {
           $valid = Captcha::valid($_POST['captcha'])? 1 : 2;
           
            if($valid==1)
            {
                $users = ORM::factory('user')
                    ->where('phone', '=', $_POST['phone'])
                    ->find();
                $us = ORM::factory('user')
                    ->where('mail', '=', $_POST['mail'])
                    ->find();
                if($users->loaded())
                {
                    echo "<script>alert('Такий номер телефону вже зареєстрований, введіть інший!')</script>";
                }
                else
                {
                    if($us->loaded())
                    {
                        echo "<script>alert('Такий email вже існує, спробуйте ще раз!')</script>";
                    }
                    else
                    {
                        $users = ORM::factory('user');       
                        $users->firstname = $_POST['firstname'];
                        $users->lastname = $_POST['lastname'];
                        $users->password = $_POST['password'];
                        $users->mail = $_POST['mail'];
                        $users->phone = $_POST['phone'];
                        $users->avatar = 'avaFull2.png';
                        $users->avatarMini = 'ava.png';
                        $users->accesses = 2;
                        if ($role==0)
                        {
                            $users->confirm = 1;
                        }
                        $users->save();
                        echo "<script>alert('Ви успішно зареєстровані!')</script>";
                       //$this->redirect('Entry/login');
                    }
                     
                }   
        }
        else
        {
            echo "<script>alert('Введіть ще раз значення з картинки!')</script>";
        }
      
        }
    }
    
    public function action_network()
    {
        $users = ORM::factory('user')
                    ->where('id', '=', $_GET['id'])
                    ->find();
                if($users->loaded())
                {
                    Cookie::set('id', $users->id);
                    $this->redirect('User/us');
                }
        else
        {
        if(isset($_GET['firstname']))
        { 
             $us = ORM::factory('user');  
             $us->id = $_GET['id'];
             $us->firstname = $_GET['firstname'];
             $us->lastname = $_GET['lastname'];
             $us->mail = $_GET['email'];
             $us->avatar = 'avaFull2.png';
             $us->avatarMini = 'ava.png';
             $us->confirm = 1;
             $us->accesses = 2;
             //if ($role==0)
            // {
            //    $users->confirm = 1;
           //  }
                        $us->save();
             Cookie::set('id', $us->id);
             $this->redirect('User/us');
            //echo "<img src=\"https://graph.facebook.com/".$_GET['id']."/picture?height=250&width=250\" ";     
        }
        else {echo "FAIL";}
        }
        
        
        
    }
} // End Registr