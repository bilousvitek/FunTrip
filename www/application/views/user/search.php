<script>
    function length (obj) {
    var count = 0
    for (var item in obj) {
        count++
    }
    return count
}
    
   function getdetails(){
    var first = $('#first').val();
    var second = $('#second').val();
    $.ajax({
        type: "POST",
        url: "/Ajax/getTrip",
        data: {first:first, second:second}
    }).done(function( result )
        {
         var event = eval('(' + result + ')');
         var str="<tr><td></td><td>Дата виїзду:</td><td>Маршрут:</td><td>Водій:</td><td>Ціна:</td><td>Кількість місць:</td><td>Авто:</td><td></td><td></td></tr>";
        for (var i = 0; i < length(event); i++) {
	  str+="<tr><td><a> <img src=\"/uploads/avatar/small/"+event[i].avatar+"\"></a></td><td>"+event[i].dataFirst+"</td><td>"+first+" - "+second+"</td><td>"+event[i].firstName+" "+event[i].lastName+"</td><td>"+event[i].price+"</td><td>"+event[i].seats+"</td><td>"+event[i].carBrand+" "+event[i].carModel+"</td><td><td> <form method=\"get\" id=\"656\" action=\"/Trip/trip\"> <input type=\"hidden\" name = \"id\" value=\""+event[i].id+"\"> <button type=\"submit\" class=\"btn btn-primary\" id=\"hfh\"> Детальніше </button> </form> </td></td></tr> ";
	}
       $("#msg").html(str); 
        });
}
</script>
     
      <div class="container">
       <div class="row">
           <div class="col-md-3">
               
              <input type="text" name="first" id="first" class="form-control " placeholder="Введіть початок маршруту">     
    
           </div>
           <div class="col-md-3"><input type="text" name="second" id="second" class="form-control " placeholder="Введіть кінець маршруту"></div>
           <div class="col-md-3"> <input class="btn btn-primary" name="submit" onClick = "getdetails()" value="Знайти!" ></div>
       </div> 
       <div class="col-md-8">
           <table  id="msg" class="table table-hover table-condensed">       
       </table>     
       </div>
        
        </div>