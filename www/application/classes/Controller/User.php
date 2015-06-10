<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_User extends Controller_Sample_User
{
    
   public function action_us()
   {
       $content= View::factory('user/search');
       $this->template->content = $content; 
   }
    
    public function action_messeges()
   {
       $content= View::factory('user/messeges');
       $this->template->content = $content; 
   }
    
     private function uploads_avatar()
    {
        return DOCROOT . 'uploads/avatar' . DIRECTORY_SEPARATOR;
    }
    
    public function action_edit()
   {
        if(isset($_POST['edit']))
        {
             //$users = ORM::factory('users');
             $users = ORM::factory('user')
                 ->where('id', '=', $_GET['id'])
                 ->find();  
            
             $users->firstname = $_POST['firstname'];
             $users->lastname = $_POST['lastname'];
             $users->mail = $_POST['mail'];
             $users->phone = $_POST['phone'];
             $users->password = $_POST['password'];
             $users->adress = $_POST['adress'];
             $users->age = $_POST['age'];
             $users->driving_exp = $_POST['driving']; 
             $prefix = "ava";
             $new_name = $prefix . uniqid().".jpg";
            if ($_FILES['avatar']['name'] != '')
            {
                $users->avatar = $new_name;}
                $validation = Validation::factory($_FILES)
                    ->rules( TRUE , array(
                        array('Upload::image'),
                    ));
            if ($validation->check())
            {           
                Upload::save($validation['avatar'], $new_name, $this->uploads_avatar());           
                Session::instance()->set('message', 'Image is successfully uploaded');
                
                $image=Image::factory('uploads/avatar/'.$users->avatar); 
                $image->resize(125, 125);
                $image->save('uploads/avatar/small/'.$users->avatar,100);      
                $image=Image::factory('uploads/avatar/'.$users->avatar); 
                $image->resize(250, 250);
                $image->save('uploads/avatar/'.$users->avatar,100);
            }
            
             $users->save(); 
             $this->redirect('user/success');
        }
          
       $content= View::factory('user/edit');
       $this->template->content = $content; 
   }
    
    public function action_exit()
    {
        Cookie::delete('mail');
        Cookie::delete('password');
        Cookie::delete('id');
        $this->redirect('Entry/entry');
    }
    // ----------------------------------------------------------------TRIP ---------->
     public function action_myTrip()
   {
       Cookie::get('id');
       $trips = ORM::factory('trip')
           ->where('user_id', '=', Cookie::get('id'))
           ->find_all();
         
          foreach($trips as $trip)
          {
              $info= array(
                  "id" => $trip->id,
                  "startPoint" => $trip->starting_point,
                  "finishPoint" => $trip->finish_point,
                  "waypoint1" => $trip->waypoint1,
                  "waypoint2" => $trip->waypoint2,
                  "waypoint3" => $trip->waypoint3,
                  "waypoint4" => $trip->waypoint4,
                  "waypoint5" => $trip->waypoint5,
                  "price" => $trip->price,
                  "seats" => $trip->seats,
                  "dataFirst" => $trip->data_first,
                  "dataLast" => $trip->data_last,
                  "timeFirst" => $trip->time_first,
                  "timeLast" => $trip->time_last,
              );
          }
         json_encode( $info );
         $content= View::factory('user/mytrip', $info);
         $this->template->content = $content; 
   }
    
    public function action_addTrip()
   {
        if(isset($_POST['addTrip']))
        {
             $trips = ORM::factory('trip');       
             $trips->starting_point = $_POST['first'];
             $trips->finish_point = $_POST['second'];
             $trips->waypoint1 = $_POST['waypoint1'];
              if(isset($_POST['waypoint2'])){$trips->waypoint2 = $_POST['waypoint2'];}
              if(isset($_POST['waypoint3'])){$trips->waypoint3 = $_POST['waypoint3'];}
              if(isset($_POST['waypoint4'])){$trips->waypoint4 = $_POST['waypoint4'];}
              if(isset($_POST['waypoint5'])){$trips->waypoint5 = $_POST['waypoint5'];}
             $trips->price = $_POST['price'];
             $trips->seats = $_POST['seats'];
             $trips->data_first = $_POST['firstdate'];
             $trips->time_first = $_POST['firsttime'];
             $trips->data_last = $_POST['lastdate'];
             $trips->time_last = $_POST['lasttime'];
             $trips->user_id = Cookie::get('id','no user');
             $trips->car_id = $_POST['car'];
             $trips->save();
             $this->redirect('user/added');
        }
        
        $content= View::factory('user/addtrip');
        $this->template->content = $content; 
   }
    
    public function action_delete()
    {
        if($_GET["confirm"] == "true")
        {
            ORM::factory('trip', $_GET['id'])
                ->delete();
            $this->redirect('user/mytrip');
        }
        $trips = ORM::factory('trip')
            ->where('id', '=', $_GET['id'])
            ->find();
        $data = array(
            "startPoint" => $trips->starting_point,
            "finishPoint" => $trips->finish_point,
            "dataFirst" => $trips->data_first,
            "timeFirst" => $trips->time_first,
            "id" => $trips->id
        );
        
        $content= View::factory('user/delete', $data);
        $this->template->content = $content;
        
    }
    public function action_editTrip()
    { 
        if(isset($_POST['editTrip']))
        {
             $trips = ORM::factory('trip');
             $trips = ORM::factory('trip')
                 ->where('id', '=', $_GET['id'])
                 ->find();
            $trips->starting_point = $_POST['first'];
            $trips->finish_point = $_POST['second'];
            $trips->waypoint1 = $_POST['waypoint1'];
            if(isset($_POST['waypoint2']))
            {
                $trips->waypoint2 = $_POST['waypoint2'];
            }
            if(isset($_POST['waypoint3']))
            {
                $trips->waypoint3 = $_POST['waypoint3'];
            }
            if(isset($_POST['waypoint4']))
            {
                $trips->waypoint4 = $_POST['waypoint4'];
            }
            if(isset($_POST['waypoint5']))
            {
                $trips->waypoint5 = $_POST['waypoint5'];
            }
            $trips->price = $_POST['price'];
            $trips->seats = $_POST['seats'];
            $trips->data_first = $_POST['firstdate'];
            $trips->time_first = $_POST['firsttime'];
            $trips->data_last = $_POST['lastdate'];
            $trips->time_last = $_POST['lasttime'];
            $trips->user_id = Cookie::get('id','no user');
            $trips->car_id = $_POST['car'];
            $trips->save();
            $this->redirect('user/success');
        }
        
        $content= View::factory('user/edittrip');
        $this->template->content = $content; 
    }
    
    public function action_success()
    {
        $content= View::factory('user/success');
        $this->template->content = $content;
    }
    
    public function action_added()
    {
        $content= View::factory('user/added');
        $this->template->content = $content;
    }
    // <--------------------------------------------------------END TRIP------|
    
    //-------------------------------------------------------------CAR -------->
    
    public function action_myCars()
   {
        
       $content= View::factory('user/mycars');
       $this->template->content = $content; 
   }
    
    public function action_addCar()
   {
        if(isset($_POST['addCar']))
        {
             $cars = ORM::factory('car');       
             $cars->brand = $_POST['brand'];
             $cars->model = $_POST['model'];
             $cars->type_car = $_POST['type'];
             $cars->color = $_POST['color'];
             $cars->size_baggage = $_POST['baggage'];
             $cars->animals = $_POST['animals'];
             $cars->smoke = $_POST['smoke'];
             $prefix = "car";
             $new_name = $prefix . uniqid().".jpg";
         
           if ($_FILES['photo']['name'] != ''){
            $cars->photo = $new_name;}
          
            
            $validation = Validation::factory($_FILES)
                ->rules( TRUE , array(
                    array('Upload::image'),
                ));
            
            if ($validation->check())
            {           
                Upload::save($validation['photo'], $new_name, $this->uploads_dir());           
                Session::instance()->set('message', 'Image is successfully uploaded');
                
                $image=Image::factory('uploads/car/'.$cars->photo); 
                $image->resize(125, 125);
                $image->save('uploads/car/small/'.$cars->photo,100);      
                $image=Image::factory('uploads/car/'.$cars->photo); 
                $image->resize(250, 250);
                $image->save('uploads/car/'.$cars->photo,100);
            }
            
             $cars->user_id = Cookie::get('id','no user');
             $cars->save();
             $this->redirect('user/addedCar');
//меняем размер картинки
//$image->resize(200, 200); //изменение размера по короткой стороне
//$image->resize(NULL, 200); //200 по высоте и пропорционально по ширине. Можно поменять параметры местами - тогда будет 200 по ширине и пропорционально по высоте
//$image->resize(200, 200, Image::NONE); //масштабируем без сохранения пропорций
//$image->resize(200, 200, Image::INVERSE); //чтобы минимальная сторона изображения была 200px
//$image->save('uploads/car/'.$cars->photo,100); //первый параметр - путь, имя и формат изображения. Второй - качество изображения
                
        }
       $content= View::factory('user/addcar');
       $this->template->content = $content; 
   }
    
    private function uploads_dir()
    {
        return DOCROOT . 'uploads/car' . DIRECTORY_SEPARATOR;
    }
    
    public function action_editCar()
    {
        if(isset($_POST['editCar']))
        {
            $cars = ORM::factory('car');
             $cars = ORM::factory('car')
                 ->where('id', '=', $_GET['id'])
                 ->find();       
             $cars->brand = $_POST['brand'];
             $cars->model = $_POST['model'];
             $cars->type_car = $_POST['type'];
             $cars->color = $_POST['color'];
             $cars->size_baggage = $_POST['baggage'];
             $cars->animals = $_POST['animals'];
             $cars->smoke = $_POST['smoke'];
             $prefix = "car";
             $new_name = $prefix . uniqid().".jpg";
            if ($_FILES['photo']['name'] != '')
            {
                $cars->photo = $new_name;}
                $validation = Validation::factory($_FILES)
                    ->rules( TRUE , array(
                        array('Upload::image'),
                    ));
            if ($validation->check())
            {           
                Upload::save($validation['photo'], $new_name, $this->uploads_dir());           
                Session::instance()->set('message', 'Image is successfully uploaded');
                
                $image=Image::factory('uploads/car/'.$cars->photo); 
                $image->resize(125, 125);
                $image->save('uploads/car/small/'.$cars->photo,100);      
                $image=Image::factory('uploads/car/'.$cars->photo); 
                $image->resize(250, 250);
                $image->save('uploads/car/'.$cars->photo,100);
            }
            
             $cars->user_id = Cookie::get('id','no user');
             $cars->save();
            
             $this->redirect('user/success');
        }
        
        $content= View::factory('user/editcar');
        $this->template->content = $content; 
    }
    
    public function action_deleteCar()
    {
        if($_GET["confirm"] == "true")
        {
            ORM::factory('car', $_GET['id'])
                ->delete();
            $this->redirect('user/mycars');
        }
        $cars = ORM::factory('car')
            ->where('id', '=', $_GET['id'])
            ->find();
        $data = array(
            "brand" => $cars->brand,
            "model" => $cars->model,
            "typeCar" => $cars->type_car,
            "id" => $cars->id
        );  
        
        $content= View::factory('user/deletecar', $data);
        $this->template->content = $content;
    }
    
    public function action_addedCar()
    {
        $content= View::factory('user/addedcar');
        $this->template->content = $content;
    }
       
} // ---------------------------------------------------------End User------|