

 <?php 
      session_start();
      include 'connect.php';
       if(isset($_SESSION["name"])){
            echo "bonjour". $_SESSION["name"];
            $idUser=$_SESSION['id'];
        }else{

            header("Location:Login.html");
        }
        
        // else echo"error";
 
   
   $IDShipment=$_GET["IdShipment"];
    
   $q="SELECT * FROM `users`,shippment,shippmenttype,status,files WHERE users.IdUsers='$idUser' AND shippment.shippmentID='$IDShipment' AND shippmenttype.shipTypeID=shippment.shipTypeID AND shippment.shippmentID=status.shippmentID AND Status.Id=files.Id ORDER BY `status`.`Id` ASC";

  $q2="SELECT * FROM `users`,shippment,shippmenttype WHERE users.IdUsers='$idUser' AND shippment.shippmentID='$IDShipment' 
  AND shippmenttype.shipTypeID=shippment.shippmentID";

$query="SELECT * FROM `users`,shippment,shippmenttype,detail,descriptionupdate,region,ville,pay WHERE users.IdUsers='$idUser' AND shippment.shippmentID='$IDShipment' AND shippmenttype.shipTypeID=shippment.shipTypeID AND detail.shippmentID=shippment.shippmentID AND detail.IdDescriptionUpdate=descriptionupdate.IdDescriptionUpdate AND detail.IdRegion=region.IdRegion AND region.IdVille=ville.IdVille AND ville.IdPay=pay.IdPay ORDER BY `descriptionupdate`.`IdDescriptionUpdate` ASC";
   $res=mysqli_query($connect,$q);
   $result=mysqli_query($connect,$q);
   $resultat=mysqli_query($connect,$query);
   ?>

     

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
   
    <?php include 'files.php';?> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/client.css">
  
   

   <!--<script> src="javaScript.js"</script>-->
    <title>Document</title>
</head>
<body >


   
<a class="dropdown-item paddingMenu" href="LogOut.php"style="padding: 0px;" > <i class="fa fa-sign-out" aria-hidden="true"></i>logOut</a>
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
           <div class="col-lg-8 col-12">
        <div class="row" >

            <div class="col-sm-12 col-lg-12" style="">
                <div class="image" style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                   
                        <div style=" height: 330px;">


                            <div class="text colorBleu" > Shipment Summary</div>
                            <div > <img src="images/images (1).png"class="logoImages" /></div>
                            <div  class="text" id="shippmentID"> </div>
                            <div>
                            
                                     
                                      
                                       
                                    <table style="width:100%;margin-left: 60px">  
                                    <tr>
                                       
                               <?php if(mysqli_num_rows($res)>0){
                                   //exist   
                                  while($row=mysqli_fetch_assoc($res)){
       
                                         ?>
                                      <td>  <img src="images/<?php echo  $row['Name'];?>"class="satutsImages" /><div><?php echo  $row['statusName'];?></div> </td>
                                      <?php }
    }
   
?>
      
                                    </tr>
                                   </table>
                               
                                 </div>
                                 <?php if(mysqli_num_rows($result)>0){
                                   //exist   
                                  if($row=mysqli_fetch_assoc($result)){
       
                                         ?>
                             <div class="location"> 

                                  <div>
                                    <span class="SpanLocation">From 
                                       <span class="SpanLocation" id="Form" >
                                          <?php echo  $row['pays'];?>
                                          <?php echo  $row['From'];?>
                                       </span>
                                      </span>

                                      <span class="SpanLocation"style="float: right;">To  
                                         <span class="SpanLocation"id="to" >
                                         
                                         <?php echo  $row['pays'];?>
                                          <?php echo  $row['To'];?>
                                         </span>
                                       </span>
                                    </div>
                
                                  <div> <span class="SpanLocationDate" id="date">  <?php echo  $row['Date'];?> </span>
                                     <span class="SpanLocationDate" id="DateShip" style="float: right;"> <?php echo  $row['DateTOShip'];?> </span>
                                   </div>
                             </div>
                        </div>

                   
                </div>
             

            </div>
        </div>
          <div class="row" >

            <div class="col-sm-12 col-lg-12" style="">
                <div  style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                  
                    <div style=" height: 240px;">
                        <div class="text colorBleu postioncenter">Details </div>
                       <div class=" postioncenter">More About Your Shipmnet</div>
                       <div style="margin-top:25px;">
                        <div class="row ">
                        <div class="col-4 backDeatil marg">
                           <div class="formdiv">
                              <div>Shipment Type </div>
                             <div id="typeShipment">  <?php echo  $row['TypeName'];?> </div>
                           </div> 
                         </div>
                         <div class="col-2 backDeatil marg"> 
                            <div class="formdiv">
                            <div>Weight </div>
                            <div ><div id="weigth">  <?php echo  $row['Weight'];?></div>
                            KG</div>
                          </div> 
                         </div>
                         <div class="col-2 backDeatil marg"> 
                            <div class="formdiv">
                            <div>Service </div>
                            <div>CODS,CODS</div>
                          </div> 
                         </div>
                         <div class="col-2 backDeatil marg"> 
                            <div class="formdiv">
                            <div >No. Of Items </div>
                            <div id="items">  <?php echo  $row['NoOfItems'];?></div>
                          </div> 
                         </div>
                         

                     
                       </div>

                       <div class="col-7 backDeatil marg"> 
                            <div class="formdiv">
                              <div class="row">
                                <div class="col-4">
                                  <div class="">Origin</div>
                                  <div class=""><span id="Origin">  <?php echo  $row['From'];?></span></div>
                                  
                                </div>
                                <div class="col-4">
                                  
                                  
                                </div>
                                <div class="col-4">
                                <div class="">Destination</div>
                                <div class=""><span id="destintion">  <?php echo  $row['To'];?></span></div>
                               </div>
                              </div>
                          </div> 
                         </div>
                         
                      
                     </div>
                    </div>
                       
                      

                </div>
                

                <?php }
    }
   
?>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;overflow-y: auto">
                   
                        <div  style=" height: 300px;">
                       <div class="text colorBleu postioncenter"> History</div>
                       <div class=" postioncenter"> Where Your Shipment Has Been</div>
                       
                       <table class="table table-striped" >
                         <thead>
                       
                                  <th scope="col">Date</th>
                                 <th scope="col">Location</th>
                                 <th scope="col">Activity</th>
                                
     
                             </tr>
                         </thead>
                          <tbody>
                          <?php 
                          if(mysqli_num_rows($resultat)>0){
                                   //exist   
                                  while($row1=mysqli_fetch_assoc($resultat)){
       
                                         ?>
                             <tr>
                         <tr>
                            <th scope="row"><?php echo  $row1['date'];?> <?php echo  $row1['time'];?></th>
                             <td><?php echo  $row1['NameVille'];?> <?php echo  $row1['NamePay'];?></td>
                              <td> <?php echo  $row1['NameDescUpdate'];?></td>  
                             
                        </tr>
                        <?php
                        }
                      }?>
                       
                       
                      
                       </tbody>
                        </table>
                      </div>
                    
                          
                    
                </div>


            </div>
        </div>
      
    </div>

           <div class="col-lg-4 col-12">


        <div style="min-height:200px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;padding-top:22px">
          
        <div class="text colorBleu postioncenter">Customer Support </div>
        <div class=" postioncenter"></div>
        <div class=" postioncenter">Questions About your Shipment</div>
        <div class="border-bottom" style="padding-top: 22px;"></div>
        <div style="padding-left: 10px;">
            <div  >Support</div>
          <div class=" postioncenter" >submit Request</div>
        </div>
    
        

   

        
    </div>

    </div>
      </div>


  </div>
		
            
  <?php include 'scriptFiles.php';?>
    <script src="js/jquery-3.5.1.min.js"></script> 
  <script src="js/client.js"></script>

</body>
</html>














