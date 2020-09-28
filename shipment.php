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

       <title>Shipment</title>
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

                            <div style="margin: 20px;"> </div>

       
                         </div>
                     </div>
                  </div>

             </div>
                <div class="row">
                    <div class="col-lg-8 col-12">

                    <div class="row">
                             <div class="col-sm-12 col-lg-12">
                                <div class="styleDiv" >
                                      <div>
                                      <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                          <span  class="title">Shipment </span>
                                      </div>
                                   <form name="shippmentForm" action="insertShipment.php" method="post">
                                 
                                            <label  class="title">Name client</label>
                                                <select class="form-control form-control-lg" placeholder="Name client" name="NameClient" id="NameClient">
                                              
                                                    <?php
                                                    include 'connect.php';
                                                    $q = 'SELECT * FROM users WHERE Account ="Client"';  
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['IdUsers'].'">'.$row['FirstName']." ".$row['LastName'].'</option>';
                                                    }
                                                    ?>

                                                </select>
                                                 <div class="form-group">
                                                      <label class="title">pay</label>
                                                      <select class="form-control form-control-lg" placeholder="Location pays" name="locationpays" >

                                                          <?php
                                                              include 'connect.php';
                                                              $q=" SELECT `IdPay`, `NamePay` FROM `pay`" ;
                                                              $res=mysqli_query($connect,$q);

                                                                while($row=mysqli_fetch_assoc($res))
                                                                 {
                                                                  echo'
                                                                      <option values="'.$row['NamePay'].'">'.$row['NamePay'].'</option>';
                                                                }
                                                             ?>

                                               
                                                         </select>
                                                  </div>

                                                   <div class="form-group">
                                                  <label  class="title" > From ville</label>

                                                  <select class="form-control form-control-lg" placeholder="location ville"  name="From" name="From">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `IdVille`, `NameVille`, `IdPay` FROM `ville`";
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['NameVille'].'">'.$row['NameVille'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                  </select>

                                                 </div>
                                                 <div class="form-group">
                                                  <label  class="title" > To ville</label>

                                                  <select class="form-control form-control-lg" placeholder="location ville"  name="To" name="To">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="SELECT `IdVille`, `NameVille`, `IdPay` FROM `ville`";
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['NameVille'].'">'.$row['NameVille'].'</option>';
                                                    }
                                                    ?>
                                                     
                                                  </select>

                                                 </div>
                                                   

                                              
                                                <div class="form-group">
                                                    <label for="Date" class="title">Date </label>
                                                    <input type="date" class="form-control form-control-lg" id="Date" name="Date" placeholder="Date ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Date" class="title"> Date Estimate </label>
                                                    <input type="date" class="form-control form-control-lg" id="DateEstimate" name="DateEstimate" placeholder="Date Estimate ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Weight" class="title">Weight</label>
                                                    <input type="text" class="form-control form-control-lg" id="Weight" name="Weight" placeholder="Weight">
                                                </div>
                                                <div class="form-group">
                                                    <label for="No oF Items" class="title">No oF Items</label>
                                                    <input type="text" class="form-control form-control-lg"  name="NOItems" placeholder="No oF Items">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Decription" class="title">Decription</label>
                                                    <input type="text" class="form-control form-control-lg" id="Decription" name="Decription" placeholder="Decription">
                                                </div>


                                                 
                                                <label class="title">Type Shippement</label>
                                                <select class="form-control form-control-lg" placeholder="Type Shippement" name="StShip">

                                                    <?php
                                                    include 'connect.php';
                                                    $q=" SELECT  `shipTypeID`,`TypeName` FROM `shippmenttype`" ;
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option value="'.$row['shipTypeID'].'">'.$row['TypeName'].'</option>';
                                                    }
                                                    ?>

                                                </select>
                                           <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />
                                            </form>
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
