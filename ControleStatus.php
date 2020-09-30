<?php 
     session_start();
     
     include 'connect.php';
     $q="SELECT `Id`, `Name` FROM `files`";
     $res=mysqli_query($connect,$q);

     $query="SELECT * FROM `shippment` ,users WHERE users.IdUsers=shippment.IdUsers";
     $result=mysqli_query($connect,$query);
 ?>
  <!DOCTYPE html>
     <html lang="en">
      <head>

         <?php include 'files.php';?>  
   
         <link rel="stylesheet"  href="css/leftMenu.css">
         <link rel="stylesheet"  href="css/controleShipment.css">
          <link rel="stylesheet"  href="css/desginPages.css">

           <title>Controle</title>
     </head>
       <body>


        <div class="d-flex">
          <?php include 'menuleftside.php';?>  

          <div class="w-100">

          <?php include 'topMenu.php';?>

          <div id="content">
              <div class="container-fluid top">
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
                      <div class="col-lg-6 col-12">

             <div class="row">
                             <div class="col-sm-12 col-lg-12">

                             <form name="Status" action="statusAdmin.php" method="post">
                                  <div class="styleDiv">
                                      <div>
                                      <i class="fa fa-truck bleu" aria-hidden="true"></i>
                                          <span class="title">Status </span>
                                      </div>
                                      <div class="card-body">

                                      <div class="form-group">
                                               <label class="title">Shipment Name</label>

                                                <select class="form-control form-control-lg" placeholder="Shipment Name" name="ShipmentName">
                             
                                                <?php

                                               while($row=mysqli_fetch_assoc($result))
                                                 {
                                               echo'
                                                  <option value="'.$row['shippmentID'].'">'.$row['FirstName'].' '.$row['LastName'] .'</option>';
                                                }
                                             ?>
                                                   
                                                     
                                                </select>

                                           </div>
                                         <div class="form-group">
                                               <label class="title"> Status Name</label>

                                                <select class="form-control form-control-lg" placeholder="Status Name" name="StatusName">
                                                   <option value="Processing">Processing</option>
                                                   
                                                </select>

                                           </div>

                                           <div class="form-group">
                                               <label class="title"> Status Image</label>

                                                <select class="form-control form-control-lg" placeholder="Status Image" name="StatusImage">

                                                 <?php

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['Id'].'">'.$row['Name'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                </select>

                                           </div>
                                          

                                          <input type="submit" value="Create" class="btn btn-outline-dark">
                                          <input type="reset" class="btn btn-outline-dark" style="margin: 20px;">


                                        


                                      </div>

                                  </div>
                                </form>


                              </div>
                          </div>              
                          
                          

                      </div>

                      <div class="col-lg-6 col-12">
                      <div class="row">
                          <div class="col-sm-12 col-lg-12">
                                  <div class="styleDiv">
                                      <div>
                                      <i class="fa fa-cloud-upload  bleu" aria-hidden="true"></i>
                                          <span class="title">Uplode Image </span>
                                      </div>
                                      <div class="card-body">
                                      

                                      <form action="upload.php" method="POST" enctype="multipart/form-data">
                                             <input type="file" name="file">


	                                       <button type="submit" name="submit"> UPLOAD IMG </button>
	 
	 

                                          


                                        </form>


                                      </div>

                                  </div>


                              </div>
                          </div>
                          
                      </div>
                    
                     
                      
                      
                  </div>

              </div>
          </div>  


          <?php include 'scriptFiles.php';?>  
      </body>
   </html>
 