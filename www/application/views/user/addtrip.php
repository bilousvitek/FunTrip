<form name="add" id="add" method="post">
   <div class="row">
    <div class="col-md-6 ">
        <div class="form-group">
            <input type="text" name="first" id="first" class="form-control " placeholder="Введіть початок маршруту">
        </div>
        <div class="form-group">
            <input type="text" name="second" id="second" class="form-control " placeholder="Введіть кінець маршруту">
        </div>
        
      <div class="row">
           <div class="col-md-6">
           <div class="form-group">
            <input type="text" name="seats" id="seats" class="form-control " placeholder="Кількість місць">
               </div></div>
           <div class="col-md-6">
              <div class="form-group">
               <input type="text" name="price" id="price" class="form-control " placeholder="Ціна за місце">
               </div>   </div>
      </div>
       <div class="row">
          <div class="form-group">
              <center><div class="text-muted">Введіть дату і час початку поїздки:</div></center> 
           </div>
           <div class="col-md-6"> 
           <div class="form-group">
           <input type="text" name="firstdate" id="firstdate" class="form-control " placeholder="рррр-мм-дд">
               </div></div>
           <div class="col-md-6"> 
           <div class="form-group">
           <input type="text" name="firsttime" id="firsttime" class="form-control " placeholder="гг:хх">
               </div></div>
       </div>
         <div class="row">
           <div class="form-group">
              <center><div class="text-muted">Введіть дату і час кінця поїздки:</div></center> 
           </div>
           <div class="col-md-6"> 
           <div class="form-group">
           <input type="text" name="lastdate" id="lastdate" class="form-control " placeholder="рррр-мм-дд">
               </div></div>
           <div class="col-md-6"> 
           <div class="form-group">
           <input type="text" name="lasttime" id="lasttime" class="form-control " placeholder="гг:хх">
               </div>
               </div>
       </div>
       <div class="row">
           <div class="col-md-6"><div class="text-muted">
                <center>Виберіть своє авто:</center>
           </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
               <select name="car" id="car" class="form-control">
               <option>пусто</option>
             <?php     
                  $cars = ORM::factory('car')
            ->where('user_id', '=', Cookie::get('id','no user'))
            ->find_all();
       foreach($cars as $car)
       {
          echo '<option value="'.$car->id.'">'.$car->brand.' '.$car->model.'</option>';
          
       }
             ?>       
               </select>
               </div>
           </div>
       </div>
        </div>
         <div class="col-md-6 ">
        <div class="form-group">
                <input type="text" name="waypoint1" id="waypoint1" class="form-control " placeholder="Введіть проміжний пункт" onchange="undisableFieldset1()"> </div>
          
             <div class="form-group">
              <fieldset disabled id="1">
                  <input type="text" name="waypoint2" id="waypoint2" class="form-control " placeholder="Введіть проміжний пункт" onchange="undisableFieldset2()"></fieldset> </div>
                  
             <div class="form-group"><fieldset disabled id="2">
                    <input type="text" name="waypoint3" id="waypoint3" class="form-control " placeholder="Введіть проміжний пункт" onchange="undisableFieldset3()">   </fieldset>    
        </div>
        
                   <div class="form-group"><fieldset disabled id="3">
                    <input type="text" name="waypoint4" id="waypoint4" class="form-control " placeholder="Введіть проміжний пункт" onchange="undisableFieldset4()">   </fieldset>    
        </div>
        
                   <div class="form-group"><fieldset disabled id="4">
                    <input type="text" name="waypoint5" id="waypoint5" class="form-control " placeholder="Введіть проміжний пункт" >   </fieldset>    
        </div>
        
       
        </div>
       
        </div>
        <div class="form-group">
         <center><button type="submit" name="addTrip" class="btn btn-xl">Додати поїздку</button></center>
           </div>
                 
          <script>
function disableField() {
    document.getElementById("myFieldset").disabled = true;
}

function undisableFieldset1() {
    document.getElementById("1").disabled = false;
}
              function undisableFieldset2() {
    document.getElementById("2").disabled = false;
}
              function undisableFieldset3() {
    document.getElementById("3").disabled = false;
}
              function undisableFieldset4() {
    document.getElementById("4").disabled = false;
}
    
    </script> 
    
    
</form>