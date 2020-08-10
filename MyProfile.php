<?php 
     session_start();
    
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    
   <!-- <link rel="stylesheet" type="text/css" href="css/signupStyle.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    
   <!--<script> src="javaScript.js"</script>-->
 
  
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
                <a href="typeShipment.php" class="d-block text-light p-3"><i class="fa fa-file" style="color: #EEE"></i>
                Type controle</a>
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
                       <div class="col-12">
                           <div style="margin: 20px;">

                           </div>
                       </div>

                   </div>
               </div>

           </div>
              <div class="row">
               <div class="col-lg-6 col-12">

                   <div class="row">
                       <div class="col-sm-12 col-lg-12">
                           <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                               <div>
                                   <!--<i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                   <span style="color:#26B7D4; font-size: x-large;">Contart</span>-->
                               </div>
                               <div class="card-body">
                                  <div class="row">
                                      <div class="col-6">
                                         <img src="" alt=""/>

                                      </div>
                                      <div class="col-6">
                                        <div class="div">Full Name</div>
                                        <input type="text" id="" name="">
                                       
                                      </div>
                                  </div>
                                

                               </div>
                           </div>


                       </div>
                   </div>
                   <div class="row">
                       <div class="col-sm-12 col-lg-12">
                           <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                               <div>
                                  <!-- <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                   <span style="color:#26B7D4; font-size: x-large;">Contart</span>-->
                               </div>
                               <div class="card-body">
                               <table cellpadding="5" cellspacing="5" style=" width:100%">
                                    <tbody>
									<tr style="border-bottom:1pt solid #DCDCDC;height: 53px">
                                        <td style="width:1px">
                                      
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_nick_name" style="margin:0;color: #707070;font-size:14px;font-family: DIN_Next_CYR_Regular">
                                                Nickname
                                            </label>
                                        </td>
                                        <td>
                                            <div class="" style="display: inline-block;float: right;">
                                                <span class="small" style=" color:#26b7d4;">shaza Elali</span>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border-bottom:1pt solid #DCDCDC;height: 53px">
                                        <td style="width:1px">
                                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_location" style="margin:0;color: #707070;font-size:14px;font-family: DIN_Next_CYR_Regular">
                                                Location
                                            </label>
                                        </td>
                                        <td>
                                            <div class="" style="display: inline-block;float: right;">
                                                    <img src="/Assets/img/flags/LB.png" width="15">
                                                    <span class="small" style=" color #26b7d4;">LB</span>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border-bottom:1pt solid #DCDCDC;height: 53px">
                                        <td style="width:1px">
                                           <i class="fa fa-transgender" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_gender" style="margin:0;color: #707070;font-size:14px;font-family: DIN_Next_CYR_Regular">
                                                Gender
                                            </label>
                                        </td>
                                        <td>

                                            <div style="display: inline-block;float: right;">
                                                <div class="dropdown">
                                                    <div class="btn" id="user_gender" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span>Female<img src="/Assets/img/female.png" width="15" class="ml-1"></span><img src="/Assets/img/droparrow.png" width="10" class="ml-2">

                                                    </div>
                                                    <div class="dropdown-menu dropdown_gender dropdown-menu-right" aria-labelledby="user_gender" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(83px, 24px, 0px);">
                                                        <a class="dropdown-item" data-name="male" href="javascript:void(0)" onclick="">Male<img src="/Assets/img/male.png" class="ml-1" width="15"></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" data-name="female" href="javascript:void(0)" onclick="">Female<img src="/Assets/img/female.png" class="ml-1" width="15"></a>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="height: 53px">
                                        <td style="width:1px">
                                           <i class="fas  fa fa-envelope"></i>
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_phone_number" style="margin:0;color: #707070;font-size:14px;font-family: DIN_Next_CYR_Regular">
                                               Email
                                            </label>
                                        </td>
                                        <td>
                                            <div style="float:right;font-size:14px;color:#707070">
                                                  
                                                   
                                                    <span class="large" style=" color #26b7d4;">shazaelali@gmail.com</span>

                                            
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                              </table>
                                

                               </div>
                           </div>


                       </div>
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
