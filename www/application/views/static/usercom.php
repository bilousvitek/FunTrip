<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Профіль</title>
    
    <?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
    <?php endforeach; ?> 
    <?php foreach($scripts as $script) {
    echo HTML::script($script, NULL, TRUE), "\n"; }?>
<script > 
    function initialize() {
        var first = document.getElementById('first');
        var autocomplete = new google.maps.places.Autocomplete(first); 
        var second = document.getElementById('second');
        var autocomplete = new google.maps.places.Autocomplete(second);
         var waypoint1 = document.getElementById('waypoint1');
        var autocomplete = new google.maps.places.Autocomplete(waypoint1);
         var waypoint2 = document.getElementById('waypoint2');
        var autocomplete = new google.maps.places.Autocomplete(waypoint2);
         var waypoint3 = document.getElementById('waypoint3');
        var autocomplete = new google.maps.places.Autocomplete(waypoint3);
         var waypoint4 = document.getElementById('waypoint4');
        var autocomplete = new google.maps.places.Autocomplete(waypoint4);
         var waypoint5 = document.getElementById('waypoint5');
        var autocomplete = new google.maps.places.Autocomplete(waypoint5);
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>
    <!--  Fonts для цього шаблону -->
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo URL::base(); ?>">Fun trip</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
  
    
    <section id="user">
  <div class="row">
  <div class="col-md-3"> 
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-9">
     <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Осообистий кабінет</h3>
        </div>
        <div class="panel-body ">
             <ul class="nav nav-pills nav-stacked" >
             <li><a href="<?php echo URL::site('User/us');?>"><strong>Пошук</strong></a></li>
             <li><a href="<?php echo URL::site('User/myTrip'); ?>"><strong>Мої поїздки</strong></a></li>
             <li><a href="<?php echo URL::site('User/addTrip'); ?>"><strong>Додати поїздку</strong></a></li>
         <!--    <li><a href=" "><strong>Повідомлення <span class="badge">42</span></strong></a></li> -->
             <li><a href="<?php echo URL::site('User/myCars'); ?>"><strong>Мої авто</strong></a></li>
             <li><a href="<?php echo URL::site('User/addCar'); ?>"><strong>Додати авто</strong></a></li>
             <li><a href="<?php echo URL::site('User/edit?id='.Cookie::get('id')); ?>"><strong>Редагувати профіль</strong></a></li>
            <li><a href="<?php echo URL::site('User/exit'); ?>"><strong>Вихід</strong></a></li>

                </ul>
        </div>
    </div>
  </div>
 </div>
  </div>
  <div class="col-md-8">
      <div class="panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title"></h3>
                  </div>
                  <div class="panel-body ">
                   <?php echo $content ?>
                 </div>
                 
            </div> 
         
   <?php echo $error ?></div> 
      
</div>
     <br>
            <br>
            <br>
            <br>
            <br>
  </section>
   
</html>
