<div class="alert alert-warning" role="alert">Ви дійсно бажаєте видалити авто? <br>
<?php echo $brand.' - ';
      echo $model. '<br>';

      echo $typeCar;
     
    ?>
    <br><br>
<a href="<?php echo URL::site('User/deleteCar?confirm=true&id='.$id) ?>"  class="btn btn-primary" id="but4" >Видалити</a>
<a href="<?php echo URL::site('User/myCars') ?>"  class="btn btn-primary" id="but4" >Назад</a>
</div>

