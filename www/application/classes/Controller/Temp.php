<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Temp extends Controller_Sample_Temp{
    
    public function action_temp()
    {
    
         $trips = ORM::factory('trip')
            ->where('price', '=', "80")
            ->find();

        
        
       $data = array(
                  'first' => $trips->starting_point, 
                  'second' => $trips->finish_point,
                  'waypoint1' => $trips->waypoint1,
                  'waypoint2' => $trips->waypoint2,
                  'waypoint3' => $trips->waypoint3,
                  'waypoint4' => $trips->waypoint4,
                  'waypoint5' => $trips->waypoint5,
         );
        
          
        
        $content = View::factory('temp', $data);
        $this->template->content = $content;
        
    }
    
    public function action_ajax()
    {
       
        $trips = ORM::factory('trip')
            ->where('price', '=', "80")
            ->find_all();
     
       foreach($trips as $trip)
       {
           $cart[0] = array(
              $trip->intermediente_points
           );
       }
       echo json_encode( $cart ); 
    }

    
         
} // End Temp