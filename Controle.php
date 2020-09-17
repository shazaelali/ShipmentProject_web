<?php 
     session_start();

 ?>
  <!DOCTYPE html>
     <html lang="en">
      <head>

         <?php include 'files.php';?>  
   
         <link rel="stylesheet"  href="css/leftMenu.css">

          <link rel="stylesheet"  href="css/desginPages.css">

           <title>Controle</title>
     </head>
       <body>


        <div class="d-flex">
          <?php include 'menuleftside.php';?>  

          <div class="w-100">

          <?php include 'topMenu.php';?>

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
                      <div class="col-lg-8 col-12">

                          <div class="row">

                              <div class="col-sm-12 col-lg-12">
                                  <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                                      <div>
                                          <i class="fa fa-file">   </i>
                                          <span style="color:#26B7D4; font-size: x-large;">Type Shippement</span>
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


                      </div>

                      <div class="col-lg-4 col-12">
                          <div class="row " style="min-height:200px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;">
                              <div>
                                  <i class="fa fa-file">   </i>
                                  <span style="color:#26B7D4; font-size: x-large;">Status</span>
                              </div>
                              <div class="card-body">

                                  <form name="StatusForm" action="status.php" method="post">

                                      <div class="form-group">


                                          <label for="statusName" style=" color: #26B7D4;font-size: x-large;">Status Name </label>
                                          <input type="text" class="form-control form-control-lg" id="statusName" name="statusName" placeholder="Status Name">
                                      </div>

                                      <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />


                                  </form>

                                  <div class="row " style="min-height:318px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;">

                                        
                                  




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
