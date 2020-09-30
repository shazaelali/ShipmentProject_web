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
                          <div class="col-12">
                   <div class="row">
                       <div class="col-6">
                           <div style="margin:10px;">
                              <span style="color: #26B7D4;font-size: 32px;">Deleted shipment</span>
                           </div>
                       </div>
                       <div class="col-6">
                           <div style="margin:10px;float: right">
                              
                             
                              <a class="" href="LogOut.php" id="button"style="padding: 0px; color: #212529; font-size: 32px;" > LogOut </a>
                              <i class="faIcon fa fa-sign-out " style="font-size: 32px;" aria-hidden="true"></i>

                             
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
                                                       <th scope="col"></th>
                                                       <th scope="col"></th>
                                                       <th scope="col"></th>
                                                       <th scope="col"></th>
                                                       <th scope="col"></th>
                                                   
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

     
