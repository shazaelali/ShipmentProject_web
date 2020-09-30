
 

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
  <header>
		<nav>
			<div class="row">
				

				<ul>
					<li><a href="index.html">Home</a></li>
				
					
				</ul>
			
			</div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5 BorderDiv">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <?php if(isset($_GET['Message']))
            echo '<div  class="formDesgin divalert_Sucess"> New Account </div>';
          ?>
              <?php if(isset($_GET['account']))
            echo '<div  class="formDesgin divalert">  Account Not Existe  </div>';
          ?>
              <?php if(isset($_GET['Password']))
            echo '<div  class="formDesgin divalert"> Password Not Existe </div>';
          ?>
              <form name="loginForm" action="checkLogin.php" method="post">
                <div class="form-label-group">
                 <input type="text" id="email" name="email" class="form-control Marginbottom" placeholder="Email address" required autofocus >
                  
                </div>
                
                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control Marginbottom" placeholder="Password" required >
                 
                </div>
                <div > <a id="sign-up" href="CreateAccount1.php" style="color:#343a40;">Create Account</a></div>
                <input type="submit" value="Sign in" id="sub"class="btn btn-outline-dark" /><input type="reset" id="res" class="btn btn-outline-dark" style="margin: 20px;"/>
               
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </header>
    <main>
  
</main>
</body>
</html>