<table  class="table table-hover table-condensed">
    <tr>
        <td>Дата виїзду: </td><td>Маршрут: </td><td>Ціна: </td> <td>Кількість місць: </td>
        <td>Авто: </td> <td></td><td></td><td></td>
    </tr>
    
     <?php
       Cookie::get('id');
       $trips = ORM::factory('trip')
           ->where('user_id', '=', Cookie::get('id'))
           ->find_all();
          foreach($trips as $trip){
                echo '<tr>';
                echo '<td>'.$trip->data_first.'</td>';
                echo '<td>'.$trip->starting_point." - ".$trip->finish_point.'</td>';
                echo '<td>'.$trip->price.'</td>';
                echo '<td>'.$trip->seats.'</td>';
                echo '<td>'.$trip->car->brand.' '.$trip->car->model.'</td>';
                echo '<td><a href="'.URL::site('Trip/trip?id='.$trip->id).'" class="btn btn-primary" id="but1"> Деталі</a></td>';
                echo '<td><a href="'.URL::site('User/editTrip?id='.$trip->id).'" class="btn btn-primary" id="but2"> Редагувати</a></td>';
                echo '<td><a href="'.URL::site('User/delete?confirm=false&id='.$trip->id).'" class="btn btn-primary" id="but3"> Видалити</a></td>';
                echo '</tr>';      
          }
    ?>
      </table>
    


