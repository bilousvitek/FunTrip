<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script> 
    function initialize() {
        var first2 = document.getElementById('first2');
        var autocomplete = new google.maps.places.Autocomplete(first2); 
        var second2 = document.getElementById('second2');
        var autocomplete = new google.maps.places.Autocomplete(second2);     
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>

<div class="container text-center">    
<form role="form">
<div class="row">
    <div class="col-md-4"> 
        <input type="text" name="first2" id="first2" class="form-control input-lg" placeholder="Введіть початок маршруту">     
    </div>
     <div class="col-md-4">
          <input type="text" name="second2" id="second2" class="form-control input-lg" placeholder="Введіть кінець маршруту">
     </div>
     <div class="col-md-4">
        <input class="page-scroll btn btn-primary btn-lg"  name="submit" onClick = "getdetails2()" value="Знайти!" >  
     </div>
</div>
       </form>
       <br><br><br>
       <table  id="msg" class="table table-hover table-condensed">    
       </table>
       </div> 