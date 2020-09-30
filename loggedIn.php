

 <?php 
     session_start();
    
      include 'connect.php';
       if(isset($_SESSION["name"])){
           // echo "bonjour". $_SESSION["name"];
            $idUser=$_SESSION['idUsers'];
        }else{

            header("Location:Login.html");
        }
        
        // else echo"error";
        ?>

<?php
 
 
   $q="SELECT * FROM `shippment`,users WHERE users.IdUsers='$idUser'AND shippment.IdUsers=users.IdUsers";
   $res=mysqli_query($connect,$q);
   ?>
         
     
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
   
    <?php include 'files.php';?> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/linkShipment.css">
    <meta name= viewport content= "width=device-width, initial-scale=1.0">
  
  
   

   
    <title>Document</title>
</head>
<body >


   

   <div class="container-fluid" style="height:100%;overflow:auto;background-color:#F5F5F5">

     <div class="row">

        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div style="margin: 20px;">
                    <span style="color: #26B7D4;font-size: 32px;">List Shipment of <?php if(isset($_SESSION["name"])) echo $_SESSION["name"];?></span>
                    <a class="" href="LogOut.php" id="button"style="padding: 0px; color: #212529; font-size: 32px;    float: right;" > LogOut </a>
               
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
                                  <th scope="col" class="colorBleu">ID</th>
                                 <th scope="col" class="colorBleu">Origin</th>
                                 <th scope="col" class="colorBleu">Destination</th>
                                
     
                             </tr>
                           </thead>
                          <tbody>
                          
                       
                             <?php if(mysqli_num_rows($res)>0){
                               //exist   
                                  while($row=mysqli_fetch_assoc($res)){?>

                              <tr>
                              <th scope="row" id="link"> <a href="ShipmentDetails.php?IdShipment=<?php echo $row['shippmentID']; ?>">
                              <?php echo $row['shippmentID']; ?>
                              </a> 
                             </th> 
                               <td><?php echo $row['From']; ?> </td>
                               <td><?php echo $row['To']; ?></td>
                           
                             
                              </tr>
                         <?php  }
                             }
                           ?> 
                       
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


</body>
</html>














