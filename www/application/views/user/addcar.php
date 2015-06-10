<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    
   <form name="add" id="add" method="post"  data-abide  enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="brand" id="brand" class="form-control" placeholder="Введіть марку свого авто">
    </div>
    <div class="form-group">
        <input type="text" name="model" id="model" class="form-control" placeholder="Модель авто">
    </div>
    <div class="form-group">
        <input type="text" name="type" id="type" class="form-control" placeholder="Тип авто">
    </div>
    <div class="form-group">
        <input type="text" name="color" id="color" class="form-control" placeholder="Колір авто">
    </div>
    <div class="form-group" >
        <select id="animals" name="animals" class="form-control">
            <option>З тваринами заборонено</option>
             <option>Дозволено з тваринами</option>
        </select>
    </div>
    <div class="form-group" >
        <select id="smoke" name="smoke" class="form-control">
            <option>В авто не курять</option>
             <option>В авто курять</option>
        </select>
    </div>
    <div class="form-group"> Розмір багажу:</div>
    <div class="form-group" >
        <select id="baggage" name="baggage" class="form-control">
            <option>Велика дорожня сумка</option>
             <option>Средня дорожня сумка</option>
              <option>Мала сумка</option>
               <option>Без багажу</option>
        </select>
    </div>
    <div class="form-group"> Фото авто:</div>
    <div class="form-group">
        <input type="file" name="photo" id="photo">
    </div>
    <div class="form-group">
         <center><button type="submit" name="addCar" class="btn btn-xl">Додати авто</button></center>
           </div>
</form>
</div> 
</div>