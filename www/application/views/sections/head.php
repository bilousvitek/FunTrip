<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script > 
    function initialize() {
        var first = document.getElementById('first');
        var autocomplete = new google.maps.places.Autocomplete(first); 
        var second = document.getElementById('second');
        var autocomplete = new google.maps.places.Autocomplete(second);     
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>
              

              <div class="container">
               <div class="intro-text">
               <div class="intro-lead-in">Ласкаво просимо на наш сайт!</div>
               <div class="intro-heading">Знайди свою поїздку:</div>
                <form role="form">
                    <div class="row">  
                        <div class="col-md-6 ">
                            <input type="text" name="first" id="first" class="form-control input-lg" placeholder="Введіть початок маршруту"> 
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="second" id="second" class="form-control input-lg" placeholder="Введіть кінець маршруту">
                        </div>
                    </div>
                    <br>
                </form>
                <a href="#search"   class="page-scroll btn btn-xl" name="submit" onClick = "getdetails()">Знайти</a>
                </div>
                </div>  