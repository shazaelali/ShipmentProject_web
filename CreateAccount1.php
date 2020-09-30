<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/CreateAccount.css">
</head>

<body>
  <header>
		<nav>
			<div class="row clearfix">
				

				<ul class="main-nav " id="check-class">
					<li><a href="index.html">Home</a></li>
					
					
				</ul>
				
			</div>
    </nav>
 
	
    <div class="container">     

<div class="logo"> <img src="img\Stema-in-header.png" alt="" style="max-height: 30px;"  onclick="myFunction()"></div>
<div class="card card-signin " style="border-radius: 20px 20px;">
  <div class="card-body">
  <?php if(isset($_GET['Messagepass']))
            echo '<div  class="formDesgin divalert"> Number Pass Not match </div>';
          ?>
    <h5 class="card-title text-center">Sign Up</h5>
  

     

    <form name="accountForm" action="createAccount.php" method="post">
           
           <div class="form-label-group">
              
        
            <input type="text" id="firstName" name="firstName" class="form-control marginBottom" placeholder="First Name" required autofocus >
             
           </div>
           
           <div class="form-label-group">

            <input type="text" id="lastName" name="lastName" class="form-control marginBottom" placeholder="Last Name" required >
            
           </div>
           <div class="form-label-group">

          
             <input type="file" name="image"  class="form-control marginBottom" placeholder="your Image" required>
            </div>
           <div class="form-label-group">

              <select class="form-control marginBottom " placeholder="Gender" name="Gender" >

            
              <option value="Male">Male</option>
              <option value="Female">Female</option>
             
             </select>
           </div>

           <div class="form-label-group">

             
             <select class="form-control marginBottom " placeholder="Account" name="Account" >

            
               <option value="Client">Client</option>
               <option value="Admin">Admin</option>
               <option value="chauffeur">chauffeur</option>
              </select>
            </div>
      <div class="form-label-group">

           <input type="text" id="address" name="address" class="form-control marginBottom" placeholder="Address" required>
            
           </div>
      <div class="form-label-group">

          <input type="text" id="Email" name="email" class="form-control marginBottom" placeholder="Email" required>
            
           </div>
       <div class="form-label-group">

           <input type="password" id="Password" name="password" class="form-control marginBottom" placeholder="Password" required >
            
           </div> <div class="form-label-group">

            <input type="password" id="ConfPass" name="re-pass" class="form-control marginBottom" placeholder="Re-Password" required >
            
           </div>
         
           <input type="submit" value="Create" class="btn btn-outline-dark" />
           <input type="reset" class="btn btn-outline-dark" style="margin: 20px;"/>
         
          
         </form>
  </div>
  
</div>
</div>
  </header>
</body>
</html>