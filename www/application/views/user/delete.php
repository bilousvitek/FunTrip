<div class="alert alert-warning" role="alert">Ви дійсно бажаєте видалити цю поїздку? <br>
<?php echo $startPoint.' - ';
      echo $finishPoint. '<br>';

      echo 'Дата: '.$dataFirst. '  ';
      echo 'Час: '.$timeFirst;
    ?>
    <br><br>
<a href="<?php echo URL::site('User/delete?confirm=true&id='.$id) ?>"  class="btn btn-primary" id="but4" >Видалити</a>
<a href="<?php echo URL::site('User/myTrip') ?>"  class="btn btn-primary" id="but4" >Назад</a>
</div>

