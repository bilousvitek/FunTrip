<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
    <title>ДИПЛОМ</title>

<!-- Bootstrap ядро CSS and JS -->

<?php foreach($styles as $style): ?>
<link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
rel="stylesheet" type="text/css" />
<?php endforeach; ?>

   <?php foreach($scripts as $script) { 
    echo HTML::script($script, NULL, TRUE), "\n"; }?>
<!-- ---------------------------------------------------------------- -->
   <script>     
  function length (obj) {
    var count = 0
    for (var item in obj) {
        count++
    }
    return count
}
     
function getdetails(){
     document.getElementById("first2").value = document.getElementById("first").value;
     document.getElementById("second2").value = document.getElementById("second").value;
    
    var first = $('#first').val();
    var second = $('#second').val();
    $.ajax({
        type: "POST",
        url: "/Ajax/getTrip",
        data: {first:first, second:second}
    }).done(function( result )
        {
   if(result != 1){

         var event = eval('(' + result + ')');
         var str="<tr><td></td><td>Дата виїзду:</td><td>Маршрут:</td><td>Водій:</td><td>Ціна:</td><td>Кількість місць:</td><td>Авто:</td><td></td><td></td></tr>";
        for (var i = 0; i < length(event); i++) {
	  str+="<tr><td><a> <img src=\"/uploads/avatar/small/"+event[i].avatar+"\"></a></td><td>"+event[i].dataFirst+"</td><td>"+first+" - "+second+"</td><td>"+event[i].firstName+" "+event[i].lastName+"</td><td>"+event[i].price+"</td><td>"+event[i].seats+"</td><td>"+event[i].carBrand+" "+event[i].carModel+"</td><td><td> <form method=\"get\" id=\"656\" action=\"Trip/trip\"> <input type=\"hidden\" name = \"id\" value=\""+event[i].id+"\"> <button type=\"submit\" class=\"btn btn-primary\" id=\"hfh\"> Детальніше </button> </form> </td></td></tr> ";
	}
   }else{ var str = "<p class=\"bg-danger\"><br>На жаль, за вашим запитом нічого не знайдено.  Для коректного запиту, використовуйте будь ласка автозаповнення. <br><br> </p>" }
    
       $("#msg").html(str); 
        });
}
       
function getdetails2(){
    document.getElementById("first").value = document.getElementById("first2").value;
    document.getElementById("second").value = document.getElementById("second2").value;
    
    var first = $('#first2').val();
    var second = $('#second2').val();
    $.ajax({
        type: "POST",
        url: "/Ajax/getTrip",
        data: {first:first, second:second}
    }).done(function( result )
        {
        if(result != 1){
         var event = eval('(' + result + ')');
         var str2="<tr><td></td><td>Дата виїзду:</td><td>Маршрут:</td><td>Водій:</td><td>Ціна:</td><td>Кількість місць:</td><td>Авто:</td><td></td></tr>";
        for (var i = 0; i < length(event); i++) {
	 str2+="<tr><td><a> <img src=\"/uploads/avatar/small/"+event[i].avatar+"\"></a></td><td>"+event[i].dataFirst+"</td><td>"+first+" - "+second+"</td><td>"+event[i].firstName+" "+event[i].lastName+"</td><td>"+event[i].price+"</td><td>"+event[i].seats+"</td><td>"+event[i].carBrand+" "+event[i].carModel+"</td><td><td> <form method=\"get\" id=\"656\" action=\"Trip/trip\"> <input type=\"hidden\" name = \"id\" value=\""+event[i].id+"\"> <button type=\"submit\" class=\"btn btn-primary\" id=\"hfh\"> Детальніше </button> </form> </td></td></tr> ";
	}
             }else{ var str2 = "<p class=\"bg-danger\"><br>На жаль, за вашим запитом нічого не знайдено.  Для коректного запиту, використовуйте будь ласка автозаповнення. <br><br> </p>" }
       $("#msg").html(str2); 
        });
}
</script>
  <!-- ======================================================================  -->
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
                <a class="navbar-brand page-scroll" href="#page-top">Fun trip</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#search"><u><strong>Пошук</strong></u></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#working"><u><strong>Як це працює?</strong></u></a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#mobile"><u><strong>Мобільний додаток</strong></u></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><u><strong>Контакти</strong></u></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="<?php echo URL::site('Registr/registr'); ?>"><u><strong>Реєстрація</strong></u></a>
                    </li>
                    <li>
                    <a class="page-scroll" href="<?php echo URL::site('Entry/entry'); ?>"><u><strong>Увійти</strong></u></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <?php echo $head ?>
    </header>
    <!-- Search Section  -->
    <section id="search">
        <?php echo $search ?>
    </section>
    <!-- Working Section  -->
    <section id="working">
         <?php echo $working ?>
    </section>
    <!-- Mobile Section -->
    <section id="mobile"> 
         <?php echo $mobile ?>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <?php echo $contact ?>
    </section>
    <!-- Footer Section -->
    <footer>
        <?php echo $footer ?>
    </footer>

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
    <!-- Custom Theme JavaScript -->
    <script src="public/js/agency.js"></script>

</body>
</html>
