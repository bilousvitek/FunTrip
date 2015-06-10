<!--
 <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
         document.location.href = "http://tempak.esy.es/user/us";
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '863234580390195',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.3' // use version 2.2
  });
.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
        
    });
  }
</script> 
-->
<!--------------------------------------- SECOND EXAMPLE
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v2.3&appId=863234580390195";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
------------------------------------------------------>
<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '863234580390195', // App ID
      channelUrl : 'channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
    
    
	FB.Event.subscribe('auth.authResponseChange', function(response) 
	{
 	 if (response.status === 'connected') 
  	{
  		document.getElementById("message").innerHTML +=  "<br>Connected to Facebook";
  		//SUCCESS
  		
  	}	 
	else if (response.status === 'not_authorized') 
    {
    	document.getElementById("message").innerHTML +=  "<br>Failed to Connect";

		//FAILED
    } else 
    {
    	document.getElementById("message").innerHTML +=  "<br>Logged Out";

    	//UNKNOWN ERROR
    }
	});	
	
    };
    
   	function Login()
	{
	
		FB.login(function(response) {
		   if (response.authResponse) 
		   {
		    	getUserInfo();
  			} else 
  			{
  	    	 console.log('User cancelled login or did not fully authorize.');
   			}
		 },{scope: 'email,user_photos,user_videos'});
	
	
	}

  function getUserInfo() {
	    FB.api('/me', function(response) {

	 // var str="<b>Name</b> : "+response.name+"<br>";
	 // 	  str +="<b>Link: </b>"+response.link+"<br>";
	 // 	  str +="<b>Username:</b> "+response.username+"<br>";
	 // 	  str +="<b>id: </b>"+response.id+"<br>";
	 // 	  str +="<b>Email:</b> "+response.email+"<br>";
        
             var id = encodeURIComponent(response.id);
            var firstname = encodeURIComponent(response.first_name);
            var lastname = encodeURIComponent(response.last_name);
            var email = encodeURIComponent(response.email);
	  	  //str +="<input type='button' value='Get Photo' onclick='getPhoto();'/>";
	  	  //str +="<input type='button' value='Logout' onclick='Logout();'/>";
	  	 // document.getElementById("status").innerHTML=str;       
         window.location.href = 'http://localhost/registr/network/?id='+id+'&firstname='+firstname+'&lastname='+lastname+'&email='+email;
	  	  	    
    });
    }
	function getPhoto()
	{
	  FB.api('/me/picture?type=normal', function(response) {

		  var str="<br/><b>Pic</b> : <img src='"+response.data.url+"'/>";
	  	  document.getElementById("status").innerHTML+=str;
	  	  	    
    });
	
	}
	function Logout()
	{
		FB.logout(function(){document.location.reload();});
	}

  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));

</script>


<!-- GOOGLE+ -->
<script type="text/javascript">
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
    
    function onLoadCallback()
{
    gapi.client.setApiKey('YOUR_API_KEY'); //set your API KEY
    gapi.client.load('plus', 'v1',function(){});//Load Google + API
}
    
    function loginGoogle() 
{
  var myParams = {
    'clientid' : '628926605342-bdk717estdkcugeteuqthjhmg530od40.apps.googleusercontent.com',//You need to set client id
    'cookiepolicy' : 'single_host_origin',
    'callback' : 'loginCallback', //callback function
    'approvalprompt':'force',
    'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
  };
  gapi.auth.signIn(myParams);
}
    
    function loginCallback(result)
{
    if(result['status']['signed_in'])
    { 
        alert("Login Success");
    }   
 
}
</script>


<!-- -------------- -->


<div id="status">
</div>
          
<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Реєстрація</h2>
                    <h4 class="section-reg text-muted"> Зареєструйтеся за допомогою соціальних мереж:</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                     
                   <form data-toggle="validator" role="form" name="registration" id="registrForm" method="post"> 
                        <div class="form-group" >
                     <div class="row">
                        <div class="col-md-6 separator social-login-box">
                        
        
                      <div class="col-md-6 separator social-login-box"><a href="#" class="btn facebook btn-block" role="button" onclick="Login()" >Увійти з Facebook</a></div> 
                         </div>
                         
                           
                        <div class="col-md-6 separator social-login-box"><a href="#" class="btn google btn-block" role="button" onclick="loginGoogle()">Увійти з Google+</a></div> 
                    </div>
                    
                    <div id="profile">User Information</div>
                    
                    <h4 class="section-reg text-muted text-center">або заповніть реєстраційну форму:</h4>
                    </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" maxlength="20" placeholder="Ім'я *" name="firstname" id="firstname" data-error="Будь ласка, введіть своє ім'я." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" maxlength="20" placeholder="Прізвище *" name="lastname" id="lastname" data-error="Будь ласка, введіть своє прізвище." required>
                             <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control" maxlength="30" placeholder="Еmail *" name="mail" id="email" data-error="Email введено не коректно." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" maxlength="13" pattern="^([+0-9]){3,}$" placeholder="Номер телефону *" name="phone" id="number" data-error="Будь ласка, введіть свій номер телефону." required >
                             <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" data-minlength="6" placeholder="Пароль *" name="password" id="inputPassword" data-error="Мінімум 6 символів."  required>
                             <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Повторіть пароль *" name="passwordagain" id="inputPasswordConfirm" data-match="#inputPassword" data-error="Паролі не співпадають."  required>
                             <div class="help-block with-errors"></div>
                        </div>
                           <div class="form-group">
                              <div class="row">
                                   <div class="col-md-6"> <h7 class="section-heading"> Введіть код з картинки:</h7>
                                   <input type="text" class="form-control" name="captcha"  id="captcha" data-error="Введіть код з картинки." required >
                                  </div>
                                  <div class="col-md-6"> <?php echo $captcha; ?>
                                  </div>
                                  </div>
                                  </div>
                                  <div class="col-lg-12 text-center">
                                  <div id="reg"></div>
                                <button type="submit" name="add" class="btn btn-xl">Зареєструватись</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>