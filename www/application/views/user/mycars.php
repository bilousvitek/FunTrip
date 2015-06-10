<table  class="table table-hover table-condensed">
     <?php
       Cookie::get('id');
       $cars = ORM::factory('car')
           ->where('user_id', '=', Cookie::get('id'))
           ->find_all();
          foreach($cars as $car){
                echo '<tr>';
                echo '<td><img src="/uploads/car/small/'.$car->photo.'"</td>';
                echo '<td>'.$car->brand." - ".$car->model.'</td>';
                echo '<td>'.$car->type_car.'</td>';
                echo '<td> Розмір багажу: '.$car->size_baggage.'</td>';
                echo '<td>'.$car->color.'</td>';
                echo '<td>'.$car->animals.'</td>';
                echo '<td>'.$car->smoke.'</td>';
                echo '<td><a href="'.URL::site('User/editCar?id='.$car->id).'" class="btn btn-primary" id="but2"> Редагувати</a></td>';
                echo '<td><a href="'.URL::site('User/deleteCar?confirm=false&id='.$car->id).'" class="btn btn-primary" id="but3"> Видалити</a></td>';
                echo '</tr>';      
          }
    ?>
      </table>