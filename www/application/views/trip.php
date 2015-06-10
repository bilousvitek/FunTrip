
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>   
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var ukraine = new google.maps.LatLng(48.383022, 31.1828699);
 
  var mapOptions = {
    zoom:5,
    center: ukraine
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
}

function calcRoute() {
  var start = "<?php echo $startPoint;?>";
  var end = "<?php echo $finishPoint;?>";   
  var waypoint = []; 
    
   waypoint[0]= "<?php echo $waypoint1;?>";
   waypoint[1]= "<?php echo $waypoint2;?>";
   waypoint[2]= "<?php echo $waypoint3;?>";
   waypoint[3]= "<?php echo $waypoint4;?>";
   waypoint[4]= "<?php echo $waypoint5;?>";  
 
  var waypts = [];
  for (var i = 0; i <  waypoint.length; i++) {
    if (waypoint[i] !== "") {
      waypts.push({
          location:waypoint[i],
          stopover:true});
    }
  }
  var request = {
      origin:start,
      destination:end,
	  waypoints:waypts,
      travelMode: google.maps.TravelMode.DRIVING
  };
directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
   
  <div class="container">
  
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Водій:</h3>
                </div>
                <div class="panel-body ">
  <?php
    echo "<center><img src=\"/uploads/avatar/" . $avatar . "\" ></center><br><br>";
    echo "Імя: " . $firstName . "<br>";
    echo "Прізвище: " . $lastName. "<br>";
    echo "Вік: " . $age. "<br>";
    echo "Стаж водіння: " . $drivingExp. "<br>";
    echo "Номер телефону: " . $phone. "<br>";
    echo "Електронна пошта: " . $mail. "<br>";
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Маршрут:</h3>
                </div>
                <div class="panel-body">
<?php
    echo "Початок маршруту: " . $startPoint . "<br><br>";
    echo "Кінець маршруту: " . $finishPoint. "<br><br>";
    echo "Проміжні пункти: ". $waypoint1." ". $waypoint2." ". $waypoint3." ". $waypoint4." ". $waypoint5." ". "<br><br>";
    echo "Кількість місць: " . $seats. "<br><br>";
    echo "Ціна за місце: " . $price. "<br><br>";
    echo "Дата початку поїздки: " . $dataFirst. "<br><br>";
    echo "Час початку поїздки: " . $timeFirst . "<br><br>";
    echo "Дата прибуття у кінцеву точку: " . $dataLast. "<br><br>";
    echo "Час прибуття у кінцеву точку: " . $timeLast. "<br><br>";
?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Авто:</h3>
                </div>
                <div class="panel-body">
<?php
    echo "<center><img src=\"/uploads/car/" . $carPhoto . "\" ></center><br><br>";
    echo "Авто: " . $carBrand . " ". $carModel . "<br>";
    echo "Тип: " . $carType. "<br>";
    echo "Колір: " . $carColor. "<br>";
    //echo "Розмір багажу: " . $carSizeBaggage. "<br>";
    echo $carAnimals. "<br>";
    echo $carSmoke. "<br>";
?>
                </div>
            </div>
        </div>
    </div>
       
         <center> 
    <input type="button" name="view"  class="btn btn-xl" value="Переглянути на Google Maps" width="50" height="50"  id="start" onclick="calcRoute();"> <br><br>
      <div id="map-canvas" style="width:70%;height:80%;"></div></center>
      
 </div>
 
