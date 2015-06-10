<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Адміністратор</title>

   <?php foreach($styles as $style): ?>
<link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
rel="stylesheet" type="text/css" />
<?php endforeach; ?>
   
    <?php foreach($scripts as $script) { 
    echo HTML::script($script, NULL, TRUE), "\n"; }?>


    <!--  Fonts для цього шаблону -->
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="page-top" class="index">

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

  <section id="content">      
  <div class="row">
  <div class="col-md-4"> 
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-8"> <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3 class="panel-title text-center">Осообистий кабінет</h3>
                  </div>
                  <div class="panel-body ">
                 <ul class="nav nav-pills nav-stacked">
	 		<li role="presentation" class="active"><a href="<?php echo URL::site('Admin/adm');?>">Пошук</a></li>
	        <li role="presentation" ><a href="<?php echo URL::site('Admin/newTrips');?>">Нові поїздки <span class="badge">42</span></a></li>
	 	    <li role="presentation"><a href="<?php echo URL::site('Admin/allTrips');?>">Всі поїздки</a></li>
            <li role="presentation"><a href="<?php echo URL::site('Admin/messeges');?>">Повідомлення <span class="badge">2</span></li></a>
            <li role="presentation"><a href="<?php echo URL::site('Admin/newUsers');?>">Нові користувачі <span class="badge">11</span></a></li>
            <li role="presentation"><a href="<?php echo URL::site('Admin/allUsers');?>">Усі користувачі</a></li>
            <li role="presentation"><a href="<?php echo URL::site('Admin/edit');?>">Редагувати профіль</a></li>
        </ul>

                 </div>
            </div></div>
 
</div>
  
  </div>
  <div class="col-md-6">
      <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3 class="panel-title"></h3>
                  </div>
                  <div class="panel-body ">
                   <?php echo $content ?>
                 </div>
            </div> 
      
    
   <?php echo $error ?></div> 
      
</div>
    </section>
  
 
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="public/js/classie.js"></script>
    <script src="public/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="public/js/jqBootstrapValidation.js"></script>
    <script src="public/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/js/agency.js"></script>

</body>
</html>
