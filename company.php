<?php 
     session_start();
 ?>
  <!DOCTYPE html>
     <html lang="en">
      <head>
     <?php include 'files.php';?> 

     <link rel="stylesheet"  href="css/leftMenu.css">
     
     <link rel="stylesheet"  href="css/desginPages.css">
     <link rel="stylesheet" href="css/Company.css">
 
       <title>Company</title>
   </head>
   <body>


    <div class="d-flex">
        <?php include 'menuleftside.php';?>  

      <div class="w-100">

          <?php include 'topMenu.php';?>
       
           <div id="content">
              <div class="container-fluid" >

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
                     <div class="col-lg-12 col-12 col-sm-12">

                         <div class="row">

                             <div class="col-sm-12 col-lg-12" >
                                 <div class="desginDiv">
                                   
                                     <div>
                                         <i class="fa fa-building-o iconPage" aria-hidden="true"></i>
                                         <span > Company</span>
                                     </div>
                                     <table class="table table-striped">
                                         <thead>
                                             <tr>
                                                 <th scope="col">Id contrat</th>
                                                 <th scope="col">Name Company</th>
                                                 <th scope="col">Type Shipment</th>
                                                 <th scope="col">Date Contarct </th>
                                                 <th scope="col">Date Expire</th>
                                                 <th scope="col">Decription Company </th>
                                                 <th scope="col">Decription contrat</th>
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
    </div>  


    <?php include 'scriptFiles.php';?>
    <script src="js/jquery-3.5.1.min.js"></script> 
     <script src="js/CompanyScript.js">
     
    </script>

   </body>
  </html>
