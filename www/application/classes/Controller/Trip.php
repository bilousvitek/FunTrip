<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Trip extends Controller_Sample_Trip{
    public function action_trip()
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
               // "carNumberSeats" => $trip->car->number_seats,
                "carAnimals" => $trip->car->animals,
                "carSmoke" => $trip->car->smoke
            );
        }
        json_encode( $allInfoTrip );
        
        $content = View::factory('trip', $allInfoTrip);
        $this->template->content = $content;
    }
    
    
} // End Trip