

 <?php 
      session_start();
       if(isset($_SESSION["name"])){
            echo "bonjour". $_SESSION["name"];
        }else{

            header("Location:Login.html");
        }
        
        // else echo"error";
        ?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
   
    <?php include 'files.php';?> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/linkShipment.css">
    <meta name= viewport content= "width=device-width, initial-scale=1.0">
  
  
   

   <!--<script> src="javaScript.js"</script>-->
    <title>Document</title>
</head>
<body >


   
<a class="dropdown-item paddingMenu" href="LogOut.php"style="padding: 0px;" > 
   <i class="fa fa-sign-out" aria-hidden="true"></i>logOut</a>
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
           <div class="col-lg-12 col-12">
            <div class="row" >

               <div class="col-sm-12 col-lg-12" style="">
                <div class="image linkDiv" >
                   
                        <div style=" height: 320px;z-index: 102;">
                          
                        
                       <div class="text colorBleu postioncenter"> History</div>
                       <div class=" postioncenter"> Where Your Shipment Has Been</div>
                       
                       <table class="table table-striped" >
                         <thead>
                             <tr>
                                  <th scope="col" class="colorBleu">Date</th>
                                 <th scope="col" class="colorBleu">Location</th>
                                 <th scope="col" class="colorBleu">Activity</th>
                                
     
                             </tr>
                         </thead>
                          
                        
                       
                       
                        </table>
                      
                    
                          
                    
                </div>
                               
                              
                        </div>

                   
                </div>


            </div>
           </div>
        
          
        </div>
    </div>


    </div>
     
		
            
  <?php include 'scriptFiles.php';?>
    <script src="js/jquery-3.5.1.min.js"></script> 
  <script src="js/ClientLinkShipment.js"></script>

</body>
</html>














