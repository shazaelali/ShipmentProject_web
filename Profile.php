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
  <link rel="stylesheet"  href="css/myProfile.css">
  
<link rel="stylesheet"  href="css/popup.css">
   

       <title>Document</title>
</head>
<body >




            <div class="container-fluid" style="height:100%;overflow:auto;background-color:#F5F5F5" >

             
             <div class="row">

                  <div class="col-12">
                      <div class="row">
                 
                         <div class="col-12">

                             <div style="margin: 20px;"> </div>

       
                         </div>
                     </div>
                  </div>
             </div> 
           
              <div class="row">

               <div class="col-12">
                   <div class="row">
                       <div class="col-6">
                           <div style="margin:10px;">
                              <span style="color: #26B7D4;font-size: 32px;">My Profile</span>
                              
                            
                           </div>
                          
                       </div>
                       <div class="col-6">
                           <div style="margin:10px;float: right">
                              
                             
                              <a class="" href="#" id="button"style="padding: 0px; color: #212529; font-size: 32px;" > LogOut </a>
                              <i class="faIcon fa fa-sign-out " style="font-size: 32px;" aria-hidden="true"></i>

                             
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
                                         <img src="images/<?php 
          
                                                if(isset($_SESSION['ProfileChauffeur'])){
                                                 echo  $_SESSION['ProfileChauffeur'];
                                          }?>" 
                                          alt="" class="img-fluid rounded-circle  mr-2"
                                           width="150px" height="150px"/>

                                      </div>
                                      <div class="col-6">
                                        <div style="font-size: 21px;">Full Name</div>
                                          <form action="" method="post">
                                                <input type="text"  style="font-size: 21px;" id="" name=""
                                                 value="<?php if(isset($_SESSION["namechauffeur"])){echo  $_SESSION["namechauffeur"];}else header('location:Login.php');?> ">
                                          </form>
                                        
                                          
                                       
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
                                          <img src="images/<?php 
          
                                                 if(isset($_SESSION['ProfileChauffeur'])){
                                                     echo  $_SESSION['ProfileChauffeur'];
                                                     }else header('location:Login.php');?>" 
                                                     alt="" width="40px" height="40px"
                                                     class="img-fluid rounded-circle  mr-2"/>
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_nick_name" style="margin:0;color: #707070;font-size:21px;font-family: DIN_Next_CYR_Regular ">
                                                Nickname
                                            </label>
                                        </td>
                                        <td>
                                            <div class="" style="display: inline-block;float: right;font-size: 21px;">
                                                <span class="small" style=" color:#26b7d4;"> 
                                                <?php if(isset($_SESSION["namechauffeur"])){
                                                    echo  $_SESSION["namechauffeur"];}else header('location:Login.php');?>
                                                </span>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border-bottom:1pt solid #DCDCDC;height: 53px">
                                        <td style="width:1px">
                                           <img src="images/location.png" alt="" width="40px" height="40px"/>
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_location" style="margin:0;color: #707070;font-size:20px;font-family: DIN_Next_CYR_Regular">
                                                Location
                                            </label>
                                        </td>
                                        <td>
                                            <div class="" style="display: inline-block;float: right;font-size: 21px;">
                                                  
                                                    <span class="small" style=" color #26b7d4;">
                                                    <?php 
                                                    if(isset($_SESSION['locationchauffeur'])){
                                                    echo $_SESSION['locationchauffeur'];}else header('location:Login.php');?>
                                                    </span>
                                              
         
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border-bottom:1pt solid #DCDCDC;height: 53px">
                                        <td style="width:1px">
                                           <img src="images/genders.png" alt="" width="40px" height="40px"/>
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_gender" style="margin:0;color: #707070;font-size:20px;font-family: DIN_Next_CYR_Regular">
                                                Gender
                                            </label>
                                        </td>
                                        <td>

                                            <div style="display: inline-block;float: right; font-size: 21px;">
                                            
                                                                <span>
                                                                <?php 
                                                                    if(isset($_SESSION['Genderchauffeur'])){
                                                                       echo  $_SESSION['Genderchauffeur'];}else header('location:Login.php');?>
                                                              
                                              

                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="height: 53px">
                                        <td style="width:1px">
                                           
                                           <i class="fa fa-envelope" aria-hidden="true" style="color:#70707061!important;font-size: 29px"></i>
                                        </td>
                                        <td>
                                            <label class="m-0" for="user_phone_number" style="margin:0;color: #707070;font-size:21px;font-family: DIN_Next_CYR_Regular">
                                               Email
                                            </label>
                                        </td>
                                        <td>
                                            <div style="float:right;font-size:14px;color:#707070">
                                                  
                                                   
                                                    
                                                     <span class="small" style=" color #26b7d4;font-size: 21px;" >
                                                    <?php 
                                                    if(isset( $_SESSION['Emailchauffeur'])){
                                                    echo  $_SESSION['Emailchauffeur'];}else header('location:Login.php');?>
                                                    </span>

                                            
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                              </table>
                                

                               </div>
                           </div>


                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12 col-lg-12">
                           <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                           <?php if(isset($_GET['NewPass']))
                        echo '<div  class="formDesgin divalert_Sucess"> New password update </div>';
                      ?>
                        <?php if(isset($_GET['passnew']))
                        echo '<div  class="formDesgin divalert"> confirm password incorrect </div>';
                      ?>
                            <?php if(isset($_GET['pass']))
                        echo '<div  class="formDesgin divalert"> same password please change </div>';
                      ?>    
                                      
                                      <form action="updatePassword.php" method="post">
                                      <div class="form-group">
                                         <label for="Weight" class="title">password</label>
                                          <input type="password" class="form-control form-control-lg" name="password" placeholder="password">
                                     </div>
                                     <div class="form-group">
                                         <label for="Weight" class="title">Newpassword</label>
                                          <input type="password" class="form-control form-control-lg" name="Newpassword" placeholder="Newpassword">
                                     </div> 
                                     <div class="form-group">
                                         <label for="Weight" class="title">Comfirmpassword</label>
                                          <input type="password" class="form-control form-control-lg"  name="Comfirmpassword" placeholder="Comfirmpassword">
                                     </div>
                                     <input type="submit" value="Change Password" class="btn btn-outline-dark" />  
                                      </form>
                                         
                                       
                                      </div>
                                  </div>
                                

                              

                       </div>
                   </div>
                   
               </div>

              

                 
               

           </div>
           </div>
 
           <div class="bg_model">
            <div class="model_content">
           <div class="close">
                   +
             </div>

                  <div class="LogOutDesgin">
					   Log out of Stema ?
					   <div  style="text-align: center;margin: 10px;">
                         <a href="LogOut.php" class="LogOut"> log out</a>
					   </div>                  
                </div>
                </div>
               </div> 
               <script>
                   document.getElementById("button").addEventListener("click",function(){
          document.querySelector(".bg_model").style.display="flex" ;
		  getSideBar.style.width="0px";
           getSideBarUl.style.visibility="hidden";
        });
      document.querySelector(".close").addEventListener("click",function(){
          document.querySelector(".bg_model").style.display="none" ;
		  getSideBarUl.style.visibility="visible";
          getSideBar.style.width="270px";
        });
               </script>

  


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
