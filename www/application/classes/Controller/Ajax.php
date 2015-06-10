<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Ajax extends Controller{
    
   public function action_getTrip()
   {
        $point1 = $_POST['first'];
        $point2 = $_POST['second'];
        $trips = ORM::factory('trip')
            ->where('starting_point', '=', $point1)
            ->where('finish_point', '=', $point2)
            ->find_all();
       if($trips->count()>0)
       {
           $i=0;
           foreach($trips as $trip)
           {
               $cart[$i] = array(
                   "id" => $trip->id,
                   "dataFirst" => $trip->data_first,
                   "firstName" => $trip->user->firstname,
                   "lastName" => $trip->user->lastname,
                   "price" =>  $trip->price,
                   "seats" =>  $trip->seats,
                   "carBrand" => $trip->car->brand,
                   "carModel" => $trip->car->model,
                   "avatar" => $trip->user->avatar
               );
               $i++;
           }
           echo json_encode( $cart );
       }
       else
       {
           $cart = 1;
           echo json_encode( $cart );
       }
   }
} // End Ajax
