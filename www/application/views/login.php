
   
      <form data-toggle="validator" class="form-signin" role="form" method="post">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <br><br><br>
            <div class="form-group">
              <h2 class="section-heading"><center>Вхід</center></h2>
            </div>
            

            
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Імейл</label>
              <input type="email" id="inputEmail" class="form-control" name="mail" maxlength="40" placeholder="Імейл" data-error="Email введено не коректно." required > 
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">  
              <label for="inputPassword" class="sr-only">Пароль</label>
              <input type="password" id="inputPassword" class="form-control" maxlength="30"  name="password" placeholder="Пароль" data-error="Пароль введено не коректно."  required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                  <label> <input type="checkbox" name="remember" value="remember-me"> <h7 class="section-heading"> Запам'ятати мене </h7></label>
              </div>
            </div>
            <div class="form-group"> <center><button type="submit" name="confirm" class="btn btn-xl"> Увійти </button></center></div>
              <br><br><br><br><br><br><br><br>
          </div>
          <div class="col-md-4"></div>
            
        </div>
      </form>
   
    <!-- /container -->
 