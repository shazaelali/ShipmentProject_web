<?php
 session_start();
 
   
 
  
   
  ?>
  
 
  <!DOCTYPE html>
     <html lang="en">
         <head>
             <?php include 'files.php';?>  
   
             <link rel="stylesheet"  href="css/desginPages.css">
             
             <link rel="stylesheet"  href="css/leftMenu.css">
             <link rel="stylesheet" href="css/admin.css">

              <title>Deleted Shipment</title>
         </head>
         <body>


     <div class="d-flex">
        <?php include 'leftside.php';?>  
  
        <div class="w-100">
              <?php include 'topMenu.php';?>
            <div id="content">
                <div class="container-fluid top" >

                    
                    <div class="row">
                        <div class="col-lg-12 col-12">

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
                                 <!--left side-->
                                <div class="col-lg-12 col-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-3 div">
                                            <div class="card  border-light" style="margin-bottom:0;">
                                                <div class="card-body">
                                                <table class="table">
                                                  
                                                     <tr>
                                                       <th scope="col">ID Shipment</th>
                                                       <th scope="col"> Name</th> 
                                                       <th scope="col">Origine</th>
                                                       <th scope="col">Destination</th>
                                                       <th scope="col">DateEstime</th>
                                                   
                                                    </tr>
                                                
                                                
                                                
                                                   
                                          
                                                   
                                                  
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
        </div>
     </div>
     
     

           
     
     <?php include 'scriptFiles.php';?> 
     <script src="js/jquery-3.5.1.min.js"></script>  
      <script src="js/LinkShipment.js"></script>


    </body>
  </html>

     
