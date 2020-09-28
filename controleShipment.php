<?php 
     session_start();

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
              <div class="container-fluid top" >

                  
                  <div class="row">
                      <div class="col-lg-6 col-12">

                          <div class="row">

                              <div class="col-sm-12 col-lg-12">
                                  <div class="styleDiv">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span class="title">Pays</span>
                                      </div>
                                      <div class="card-body">
                                          <form name="Pays" action="Pays.php" method="post">


                                              <div class="form-group">

                                                  <label for="Pays" class="title">Insert Pay </label>
                                                  <input type="text" class="form-control form-control-lg"  name="Pays" placeholder="Pays Name">
                                              </div>
                                              
                                              <input type="submit" value="Create" class="btn btn-outline-dark" />
                                              <input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


                                          </form>


                                      </div>

                                  </div>


                              </div>
                               


                          </div>
                          <div class="row">
                          <div class="col-sm-12 col-lg-12">
                             <form name="Ville" action="Villes.php" method="post">
                                  <div class="styleDiv">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span  class="title">Ville </span>
                                      </div>
                                      <div class="card-body">
                                         <div class="form-group">
                                               <label  class="title" > Select Pays</label>

                                                <select class="form-control form-control-lg" placeholder="Select Pays" name="namePays">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `IdPay`, `NamePay` FROM `pay`";
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['IdPay'].'">'.$row['NamePay'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                </select>

                                       </div>

                                       


                                          <div class="form-group">

                                          <label for="Ville" class="title">Insert Ville </label>
                                          <input type="text" class="form-control form-control-lg"  name="Ville" placeholder="Ville Name">
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

                             <form name="Ville" action="region.php" method="post">
                                  <div class="styleDiv">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span  class="title">Region </span>
                                      </div>
                                      <div class="card-body">
                                         <div class="form-group">
                                               <label  class="title" > Select ville</label>

                                                <select class="form-control form-control-lg" placeholder="Select ville" name="villeSelect">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `IdVille`, `NameVille`, `IdPay` FROM `ville`";
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['IdVille'].'">'.$row['NameVille'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                </select>

                                           </div>

                                       


                                          <div class="form-group">

                                          <label for="Ville" class="title">Insert Region </label>
                                          <input type="text" class="form-control form-control-lg"  name="Region" placeholder="Region Name">
                                         </div>

                                          <input type="submit" value="Create" class="btn btn-outline-dark" />
                                          <input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


                                        


                                      </div>

                                  </div>
                                </form>


                              </div>
                          </div>
                           
                        
                         
                        
                      </div>

                      <div class="col-lg-6 col-12">

                          <div class="row">

                              <div class="col-sm-12 col-lg-12">
                                  <div class="styleDiv" style="">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span class="title">Type Shippement</span>
                                      </div>
                                      <div class="card-body">
                                          <form name="typeshippmentForm" action="typeshippmentV.php" method="post">


                                              <div class="form-group">

                                                  <label for="shipmentTypeName" style=" color: #26B7D4;font-size: x-large;">Type Shippement Name </label>
                                                  <input type="text" class="form-control form-control-lg" id="shipmentTypeName" name="shipmentTypeName" placeholder="Type Shippement">
                                              </div>
                                              <div class="form-group">

                                                  <label for="shipTime" style=" color: #26B7D4;font-size: x-large;">shipment Time</label>
                                                  <input type="text" class="form-control form-control-lg" id="shipTime" name="shipTime" placeholder="shipment Time">
                                              </div>
                                              <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


                                          </form>


                                      </div>

                                  </div>


                              </div>
                               


                          </div>
                          <div class="row">
                          <div class="col-sm-12 col-lg-12">
                                  <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span style="color:#26B7D4; font-size: x-large;">Company </span>
                                      </div>
                                      <div class="card-body">
                                          <form name="CompanyForm" action="CompanyInsert.php" method="post">


                                              <div class="form-group">

                                                  <label for="CompanyName" style=" color: #26B7D4;font-size: x-large;">Company Name </label>
                                                  <input type="text" class="form-control form-control-lg" id="CompanyId" name="CompanyName" placeholder="Company Name">
                                              </div>
                                              <div class="form-group">

                                                  <label for="CompanyDec" style=" color: #26B7D4;font-size: x-large;">Company Decription</label>
                                                  <input type="text" class="form-control form-control-lg" id="CompanyDec" name="CompanyDec" placeholder="Company Decription">
                                              </div>
                                              <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


                                          </form>


                                      </div>

                                  </div>


                              </div>
                          </div>
                          <div class="row">
                          <div class="col-sm-12 col-lg-12">

                           <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                              <div>
                                  <i class="fa fa-file">   </i>
                                  <span style="color:#26B7D4; font-size: x-large;"> Description update Details</span>
                              </div>
                              <div class="card-body">

                                  <form name="DescriptionDetails" action="DescriptionDetails.php" method="post">

                                      <div class="form-group">


                                          <label for="" style=" color: #26B7D4;font-size: x-large;"> </label>
                                          <input type="text" class="form-control form-control-lg"  name="DescriptionDetails" placeholder="Description update Details">
                                      </div>
                                     

                                      <input type="submit" value="Create" class="btn btn-outline-dark" />
                                      <input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


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
