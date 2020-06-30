<?php 
     session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/contrat.css">

<title>Document</title>
</head>
<body >


  <div class="d-flex">
      <div id="sidbar-container" class=" btn-pramiry">
          <div class="logo ">
             <h4 class="text-light font-weight-bold  m-2">Admin</h4>
          </div>
            <div class="menu">
                <a href="admin.php" class="d-block  text-light p-3 " ><i class="fa fa-tachometer w" aria-hidden="true" style="color: #EEE"></i>
                Dashboard</a>
                <a href="contrat.php " class="d-block  text-light p-3"><i class="fa fa-newspaper-o" aria-hidden="true" style="color: #EEE"></i>
                Contart</a>
                <a href="company.php" class="d-block text-light p-3"><i class="fa fa-building-o" aria-hidden="true"style="color: #EEE"></i>
                Company</a>
                <a href="shipment.php" class="d-block text-light p-3"><i class="fa fa-truck" aria-hidden="true" style="color: #EEE"></i>
                Shipment</a>
                <a href="Typeshipment.php" class="d-block text-light p-3"><i class="fa fa-file" style="color: #EEE"></i>
                 Type controle </a>
            </div>
      </div>
      <div class="w-100">

      <nav class="navbar navbar-expand-lg navbar-light ">
     <div class="container-fluid">
     <h3>
       Welcome  
      <?php if(isset($_SESSION["name"])){echo  $_SESSION["name"];}else echo"error";?></h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse " id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto">
         <li>
         
         </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img src="images/icon-delivery.png" alt="" class="img-fluid rounded-circle img mr-2">
          <?php 
          
       if(isset($_SESSION["name"])){
            echo  $_SESSION["name"];
        }
        
        else echo"error";
        ?>
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item paddingMenu" href="#" style="padding: 0px;" ><i class="fa fa-user" aria-hidden="true"></i>My Profile</a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item paddingMenu" href="LogOut.php"style="padding: 0px;" > <i class="fa fa-sign-out" aria-hidden="true"></i>logOut</a>
        </div>
      </li>
    
      </ul>
  
    </div>
    </div>
     </nav>
       <div id="content">
       <div class="container-fluid" style="height:100%;overflow:auto;background-color:#F5F5F5">

      <div class="row">

        <div class="col-12">
         <div class="row">
            <div class="col-6">
              <div style="margin: 20px;">
          
              </div>
               </div>
              <div class="col-6">

              <div style="margin: 20px;">

         
          
              </div>

       
           </div>
     </div>
 </div>

</div>
  <div class="row">
       <div class="col-lg-8 col-12">

         <div class="row" >

   <div class="col-sm-12 col-lg-12" style="">
       <div class="chart-container" style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
       <div>
          <i class="fa fa-file" >   </i>
           <span style="color:#26B7D4; font-size: x-large;">Type Shippement</span>
        </div>
     <div class="card-body">

        <div id="bar-example" >
           
          
           <form name="typeshippmentForm" action="typeshippmentV.php" method="post">
              
              <div class="form-group">

            <label for="shipmentTypeName" style=" color: #26B7D4;font-size: x-large;">Type Shippement Name </label>
             <input type="text" class="form-control form-control-lg" id="shipmentTypeName" name="shipmentTypeName" placeholder="Type Shippement">
            </div>
            <div class="form-group">

            <label for="shipTime" style=" color: #26B7D4;font-size: x-large;">shipment Time</label>
            <input type="text" class="form-control form-control-lg" id="shipTime" name="shipTime" placeholder="shipment Time">
             </div>
            
              <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;"/>
            
             
            </form>
        </div>

           </div>
       </div>


   </div>

   
</div>


</div>

<div class="col-lg-4 col-12">


<div class="row " style="min-height:200px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;">
<div>
          <i class="fa fa-file" >   </i>
           <span style="color:#26B7D4; font-size: x-large;">Status</span>
        </div>
     <div class="card-body">

        <div id="bar-example" >
           
          
           <form name="StatusForm" action="status.php" method="post">
              
              <div class="form-group">


            <label for="statusName" style=" color: #26B7D4;font-size: x-large;">Status Name </label>
             <input type="text" class="form-control form-control-lg" id="statusName" name="statusName" placeholder="Status Name">
            </div>
            
              <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;"/>
            
             
            </form>


</div>

<div class="row " style="min-height:318px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;">
  

           
          <!--  Ville -->
           <form name="payForm" /*action="pay.php"*/ method="post">
              
              <div class="form-group">


            <label for="statusName" style=" color: #26B7D4;font-size: x-large;">pay Name </label>
             <input type="text" class="form-control form-control-lg" id="payName" name="payName" placeholder="pay Name">
            </div>
            
              <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;"/>
            
             
            </form>
 <!--  Region -->
          <form name="RegionForm"/*action="Region.php"*/ method="post">
              <div class="form-group">


            <label for="statusName" style=" color: #26B7D4;font-size: x-large;">Region Name </label>
             <input type="text" class="form-control form-control-lg" id="RegionName" name="RegionName" placeholder="Region Name ">
            </div>
            
              <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;"/>
            
             
            </form>
           <!--  Ville -->

           <form name="VilleForm" /*action="Ville.php"*/ method="post">
              
              <div class="form-group">


            <label for="statusName" style=" color: #26B7D4;font-size: x-large;">Ville Name </label>
             <input type="text" class="form-control form-control-lg" id="VilleName" name="VilleName" placeholder="Ville Name">
            </div>
            
              <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;"/>
            
             
            </form>
           



</div>


</div>

</div>
</div>

</div>

</div>
        </div>  


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>