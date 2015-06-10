<?php
       $users = ORM::factory('user')
           ->where('id', '=', $_GET['id'])
           ->find();

?>
 <form name="add" id="add" method="post"  data-abide  enctype="multipart/form-data">
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="form-group" >   
               
<center><img src="/uploads/avatar/<?php echo $users->avatar;?>"></center>
                          </div>
                           <div class="form-group" >
                            <input type="text" class="form-control" value="<?php echo $users->firstname;?>" placeholder="Ім'я *" name="firstname" id="firstname" required data-validation-required-message="Будь ласка, введіть своє ім'я.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" value="<?php echo $users->lastname;?>" placeholder="Прізвище *" name="lastname" id="lastname" required data-validation-required-message="Будь ласка, введіть своє прізвище.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" value="<?php echo $users->mail;?>" placeholder="Еmail *" name="mail" id="email" required data-validation-required-message="Будь ласка, введіть свій email.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" value="<?php echo $users->phone;?>" placeholder="Номер телефону *" name="phone" id="phone" required data-validation-required-message="Будь ласка, введіть свій номер телефону.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" value="<?php echo $users->password;?>" placeholder="Пароль *" name="password" id="pass" required data-validation-required-message="Будь ласка, введіть пароль.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" value="<?php echo $users->password;?>" placeholder="Повторіть пароль *" id="repass" required data-validation-required-message="Будь ласка, повторіть пароль.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="adress" class="form-control" id="adress" value="<?php echo $users->adress;?>" placeholder="Адреса проживання">
                        </div>
                        <div class="form-group">
                            Вік:
                        </div>
                        <div class="form-group">
                            <input type="text" name="age" class="form-control" id="age" value="<?php echo $users->age;?>" >
                        </div>
                        <div class="form-group">
                            Стаж водіння:
                        </div>
                        <div class="form-group">
                            <input type="text" name="driving" class="form-control" id="driving" value="<?php echo $users->driving_exp;?>" >
                        </div>
                        <div class="form-group">
                            Змінити фото:
                        </div>
                        <div class="form-group">
                            <input type="file" name="avatar">
                        </div>
                        <div class="form-group">
                             <center><button type="submit" name="edit" class="btn btn-xl">Внести зміни</button></center>
                        </div>
    </div>
</div>
</form>