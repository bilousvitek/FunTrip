<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_API extends Controller{
    
   public function action_getTripMin()
   {
        $point1 = $_GET['first'];
        $point2 = $_GET['second'];
        $trips = ORM::factory('trip')
            ->where('starting_point', '=', $point1)
            ->where('finish_point', '=', $point2)
            ->find_all();
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
               "carModel" => $trip->car->model
           );
           $i++;
       }
       echo json_encode( $cart );
   }
    
     public function action_getTrips()
     {
        $point1 = $_GET['first'];
        $point2 = $_GET['second'];
        $trips = ORM::factory('trip')
            ->where('starting_point', '=', $point1)
            ->where('finish_point', '=', $point2)
            ->find_all();
       $i=0;
       foreach($trips as $trip)
       {
          $cart[$i] = array(
                // TRIP
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
                // "linkGoogle" => $trip->link_google,
                // USER
                "firstName" => $trip->user->firstname,
                "lastName" => $trip->user->lastname,
                "adress" => $trip->user->adress,
                "phone" => $trip->user->phone,
                "mail" => $trip->user->mail,
                "age" => $trip->user->age,
                "drivingExp" => $trip->user->driving_exp,
                "avatar" => $trip->user->avatar,
                // CAR
                "carBrand" => $trip->car->brand,
                "carModel" => $trip->car->model,
                "carType" => $trip->car->type_car,
                "carPhoto" => $trip->car->photo,
                "carColor" => $trip->car->color,
                "carSizeBaggage" => $trip->car->size_baggage,
                "carNumberSeats" => $trip->car->number_seats,
                "carAnimals" => $trip->car->animals,
                "carSmoke" => $trip->car->smoke
                // "carTemp" => $trip->car->temp,
           );
           $i++;
       }
       echo json_encode( $cart );
     }
    
     public function action_getTripId()
    {
        $trips = ORM::factory('trip')
            ->where('id', '=', $_GET['id'])
            ->find_all();
        foreach($trips as $trip)
        {
            $allInfoTrip = array(
                // TRIP
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
                // "linkGoogle" => $trip->link_google,
                // USER
                "firstName" => $trip->user->firstname,
                "lastName" => $trip->user->lastname,
                "adress" => $trip->user->adress,
                "phone" => $trip->user->phone,
                "mail" => $trip->user->mail,
                "age" => $trip->user->age,
                "drivingExp" => $trip->user->driving_exp,
                "avatar" => $trip->user->avatar,
                // CAR
                "carBrand" => $trip->car->brand,
                "carModel" => $trip->car->model,
                "carType" => $trip->car->type_car,
                "carPhoto" => $trip->car->photo,
                "carColor" => $trip->car->color,
                "carSizeBaggage" => $trip->car->size_baggage,
                "carNumberSeats" => $trip->car->number_seats,
                "carAnimals" => $trip->car->animals,
                "carSmoke" => $trip->car->smoke
                // "carTemp" => $trip->car->temp,
            );
            echo json_encode( $allInfoTrip );
        }
     }
    
    public function action_getTripsUser()
    {
    
        $trips = ORM::factory('trip')
            ->where('user_id', '=', $_GET['id'])
            ->find_all();
       $i=0;
       foreach($trips as $trip)
       {
          $cart[$i] = array(
                // TRIP
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
                // "linkGoogle" => $trip->link_google,
                // USER
                "firstName" => $trip->user->firstname,
                "lastName" => $trip->user->lastname,
                "adress" => $trip->user->adress,
                "phone" => $trip->user->phone,
                "mail" => $trip->user->mail,
                "age" => $trip->user->age,
                "drivingExp" => $trip->user->driving_exp,
                "avatar" => $trip->user->avatar,
                // CAR
                "carBrand" => $trip->car->brand,
                "carModel" => $trip->car->model,
                "carType" => $trip->car->type_car,
                "carPhoto" => $trip->car->photo,
                "carColor" => $trip->car->color,
                "carSizeBaggage" => $trip->car->size_baggage,
                "carNumberSeats" => $trip->car->number_seats,
                "carAnimals" => $trip->car->animals,
                "carSmoke" => $trip->car->smoke
                // "carTemp" => $trip->car->temp,
           );
           $i++;
       }
       echo json_encode( $cart );
     }
    
      public function action_getUsers()
      {
        $users = ORM::factory('user')
            ->find_all();
       $i=0;
       foreach($users as $user)
       {
          $info[$i] = array(
                "id" => $user->id,
                "mail" => $user->mail,
                "password" => $user->password,
           );
           $i++;
       }
       echo json_encode( $info );
      }
} // End API
