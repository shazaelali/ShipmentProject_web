<?php 
     session_start();
    
 ?>
 
<!DOCTYPE html>
  <html lang="en">
     <head>
    
      <?php include 'files.php';?>  

     <link rel="stylesheet"  href="css/leftMenu.css">
       
     <link rel="stylesheet"  href="css/desginPages.css">
  
     <title>Contract</title>
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
                                   <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                   <span style="color:#26B7D4; font-size: x-large;">Contart</span>
                               </div>
                               <div class="card-body">

                                   <form name="typeshippmentForm" action="insertContrat.php" method="post">

                                       <div class="form-group">
                                       <label style=" color: #26B7D4;font-size: x-large;">Comanys Name</label>
                                                <select class="form-control form-control-lg" placeholder="Comany Name" name="nameCompany">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `IdEntreprise`, `NameEntreprise`, `Description` FROM `entreprise`" ;
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option values="'.$row['IdEntreprise'].'">'.$row['NameEntreprise'].'</option>';
                                                    }
                                                    ?>

                                                </select>

                                       </div>

                                       <div class="form-group">
                                           <label for="Description" style=" color: #26B7D4;font-size: x-large;">Description</label>
                                           <input type="text" class="form-control form-control-lg" id="Description" name="Description" placeholder="Description">
                                       </div>

                                       <div class="form-group">
                                           <label for="DateContrat" style=" color: #26B7D4;font-size: x-large;">Date Contrat</label>
                                           <input type="date" class="form-control form-control-lg" id="DateContrat" name="DateContrat" placeholder="Date Contrat">
                                       </div>
                                       <div class="form-group">
                                           <label for="DateExpireContrat" style=" color: #26B7D4;font-size: x-large;">Date Expire Contrat</label>
                                           <input type="date" class="form-control form-control-lg" id="DateExpireContrat" name="DateExpireContrat" placeholder="Date Expire Contrat">
                                       </div>

                                       <label style=" color: #26B7D4;font-size: x-large;">Type Shippement</label>
                                       <select class="form-control form-control-lg" placeholder="Type Shippement" name="StShip">

                                           <?php
                                           include 'connect.php';
                                           $q=" SELECT  `shipTypeID`,`TypeName` FROM `shippmenttype`" ;
                                           $res=mysqli_query($connect,$q);

                                           while($row=mysqli_fetch_assoc($res))
                                           {
                                           echo'
                                           <option values="'.$row['shipTypeID'].'">'.$row['TypeName'].'</option>';
                                           }
                                           ?>

                                       </select>

                                      
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                   </form>


                               </div>
                           </div>


                       </div>
                   </div>

               </div>


               <div class="col-lg-4 col-12">


                   <div class="row " style="min-height:318px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;">
                   </div>
                    

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
