<?php 
     session_start();
     $ShipId= $_GET['IDShipment'];
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
         

          <div class="w-100">

          <?php include 'topMenu.php';?>

          <div id="content">
              <div class="container-fluid top" >
                
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

                  <div class="col-lg-2 col-12"> </div>
                      <div class="col-lg-8 col-12">

                       
                          <div class="row">
                             <div class="col-sm-12 col-lg-12">

                             <form name="Details" action="Details.php" method="post">
                                  <div class="styleDiv">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span  class="title">Details </span>
                                      </div>
                                      <div class="card-body">

                                      <div class="form-group">
                                               <label  class="title">Shipment Name</label>

                                                <select class="form-control form-control-lg" placeholder="Shipment Name" name="ShipmentName" >
                             
                                                    <option value="<?php  echo  $ShipId ?>"><?php  echo $ShipId ?></option>
                                                   
                                                     
                                                </select>

                                           </div>
                                         <div class="form-group">
                                               <label  class="title"> Description update Details</label>

                                                <select class="form-control form-control-lg" placeholder="Description update Details" name="DescriptionUpdate">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `IdDescriptionUpdate`, `NameDescUpdate` FROM `descriptionupdate`";
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['IdDescriptionUpdate'].'">'.$row['NameDescUpdate'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                </select>

                                           </div>

                                           <div class="form-group">
                                               <label  class="title"> Region</label>

                                                <select class="form-control form-control-lg" placeholder="Region Details" name="RegionDetails">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `IdRegion`, `regionName`, `IdVille` FROM `region`";
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['IdRegion'].'">'.$row['regionName'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                </select>

                                           </div>
                                          

                                          <input type="submit" value="Create" class="btn btn-outline-dark" />
                                          <input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


                                        


                                      </div>

                                  </div>
                                </form>


                              </div>
                          </div>
                          <div class="row">
                             <div class="col-sm-12 col-lg-12">

                             <form name="Status" action="status.php" method="post">
                                  <div class="styleDiv">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span  class="title">Status </span>
                                      </div>
                                      <div class="card-body">

                                      <div class="form-group">
                                               <label  class="title">Shipment Name</label>

                                                <select class="form-control form-control-lg" placeholder="Shipment Name" name="ShipmentName" >
                             
                                                    <option value="<?php  echo  $ShipId ?>"><?php  echo $ShipId ?></option>
                                                   
                                                     
                                                </select>

                                           </div>
                                         <div class="form-group">
                                               <label  class="title"> Status Name</label>

                                                <select class="form-control form-control-lg" placeholder="Status Name" name="StatusName">
                                                   <option value="Processing">Processing</option>
                                                   <option value="In Transit">In Transit</option>
                                                   <option value="Delivered">Delivered</option>
                                                </select>

                                           </div>

                                           <div class="form-group">
                                               <label  class="title"> Status Image</label>

                                                <select class="form-control form-control-lg" placeholder="Status Image" name="StatusImage">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `Id`, `Name` FROM `files`";
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['Id'].'">'.$row['Name'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                </select>

                                           </div>
                                          

                                          <input type="submit" value="Create" class="btn btn-outline-dark" />
                                          <input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


                                        


                                      </div>

                                  </div>
                                </form>


                              </div>
                          </div>
                      </div>

                   
                      
                      
                  </div>

              </div>
          </div>  


          <?php include 'scriptFiles.php';?>  
      </body>
   </html>
