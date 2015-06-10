<?php
       Cookie::get('id');
       $cars = ORM::factory('car')
           ->where('id', '=', $_GET['id'])
           ->find();

?>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <center><img src="/uploads/car/<?php echo $cars->photo; ?>"></center>
   <form name="add" id="add" method="post"  data-abide  enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="brand" id="brand" value="<?php echo $cars->brand; ?>" class="form-control" placeholder="Введіть марку свого авто">
    </div>
    <div class="form-group">
        <input type="text" name="model" id="model" value="<?php echo $cars->model; ?>" class="form-control" placeholder="Модель авто">
    </div>
    <div class="form-group">
        <input type="text" name="type" id="type" value="<?php echo $cars->type_car; ?>" class="form-control" placeholder="Тип авто">
    </div>
    <div class="form-group">
        <input type="text" name="color" id="color" value="<?php echo $cars->color; ?>" class="form-control" placeholder="Колір авто">
    </div>
    <div class="form-group" >
        <select id="animals" name="animals" class="form-control">
           <option><?php echo $cars->animals; ?></option>
            <option>З тваринами заборонено</option>
             <option>Дозволено з тваринами</option>
        </select>
    </div>
    <div class="form-group" >
        <select id="smoke" name="smoke" class="form-control">
           <option><?php echo $cars->smoke; ?></option>
            <option>В авто не курять</option>
             <option>В авто курять</option>
        </select>
    </div>
    <div class="form-group"> Розмір багажу:</div>
    <div class="form-group" >
        <select id="baggage" name="baggage" class="form-control">
           <option><?php echo $cars->size_baggage; ?></option>
            <option>Велика дорожня сумка</option>
             <option>Средня дорожня сумка</option>
              <option>Мала сумка</option>
               <option>Без багажу</option>
        </select>
    </div>
    <div class="form-group"> Змінити фото:</div>
    <div class="form-group">
        <input type="file" name="photo" id="photo">
    </div>
    <div class="form-group">
         <center><button type="submit" name="editCar" class="btn btn-xl">Внести зміни</button></center>
           </div>
</form>
</div> 
</div>