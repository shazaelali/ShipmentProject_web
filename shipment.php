<?php 
     session_start();
 ?>
  <!DOCTYPE html>
   <html lang="en">
      <head>
    
      <?php include 'files.php';?>  
   

     <link rel="stylesheet"  href="css/leftMenu.css">

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

                            <div class="col-sm-12 col-lg-12" style="">
                                <div class="chart-container" style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                                    <div>
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                        <span style="color:#26B7D4; font-size: x-large;">Shipment</span>
                                    </div>
                                    <div class="card-body">

                                        <div id="bar-example">
                                            <form name="shippmentForm" action="insertShipment.php" method="post">
                                            <label style=" color: #26B7D4;font-size: x-large;">Name client</label>
                                                <select class="form-control form-control-lg" placeholder="Name client" name="NameClient" id="NameClient">

                                                    <?php
                                                    include 'connect.php';
                                                    $q = 'SELECT * FROM users WHERE Account ="Client" GROUP BY Account';  
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option values="'.$row['IdUsers'].'">'.$row['FirstName']." ".$row['LastName'].'</option>';
                                                    }
                                                    ?>

                                                </select>
                                                <div class="form-group">
                                                    <label for="From" style=" color: #26B7D4;font-size: x-large;">From</label>
                                                    <input type="text" class="form-control form-control-lg" id="From" name="From" placeholder="From">

                                                </div>

                                                <div class="form-group">
                                                    <label for="To" style=" color: #26B7D4;font-size: x-large;">To</label>
                                                    <input type="text" class="form-control form-control-lg" id="To" name="To" placeholder="To">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Date" style=" color: #26B7D4;font-size: x-large;">Date </label>
                                                    <input type="date" class="form-control form-control-lg" id="Date" name="Date" placeholder="Date ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Date" style=" color: #26B7D4;font-size: x-large;"> Date Estimate </label>
                                                    <input type="date" class="form-control form-control-lg" id="DateEstimate" name="DateEstimate" placeholder="Date Estimate ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Weight" style=" color: #26B7D4;font-size: x-large;">Weight</label>
                                                    <input type="text" class="form-control form-control-lg" id="Weight" name="Weight" placeholder="Weight">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Decription" style=" color: #26B7D4;font-size: x-large;">Decription</label>
                                                    <input type="text" class="form-control form-control-lg" id="Decription" name="Decription" placeholder="Decription">
                                                </div>


                                                  

                                                <label style=" color: #26B7D4;font-size: x-large;">pay</label>
                                                <select class="form-control form-control-lg" placeholder="pay" name="pay" id="pay" onchange="myFunction(this.value)">

                                                    <?php
                                                    include 'connect.php';
                                                    $q=" SELECT `IdPay`, `NamePay` FROM `pay`" ;
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option values="'.$row['IdPay'].'">'.$row['NamePay'].'</option>';
                                                    }
                                                    ?>

                                                </select>
                                                <label style=" color: #26B7D4;font-size: x-large;">Ville</label>
                                                <select class="form-control form-control-lg" placeholder="Ville" name="Ville" id="getville">

                                                    <?php
                                                    include 'connect.php';
                                                    $q=" SELECT `IdVille`, `NameVille`, `IdPay` FROM `ville`" ;
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option values="'.$row['IdVille'].'">'.$row['NameVille'].'</option>';
                                                    }
                                                    ?>

                                                </select>
                                                  
                                                <label style=" color: #26B7D4;font-size: x-large;">Region</label>
                                                <select class="form-control form-control-lg" placeholder="Region" name="Region">

                                                    <?php
                                                    include 'connect.php';
                                                    $q=" SELECT `IdRegion`, `regionName`, `IdVille` FROM `region`" ;

                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option values="'.$row['IdRegion'].'">'.$row['regionName'].'</option>';
                                                    }
                                                    ?>

                                                </select>

                                               




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


                                                <label style=" color: #26B7D4;font-size: x-large;">Status</label>
                                                <select class="form-control form-control-lg" placeholder="Status" name="status">

                                                    <?php
                                                    include 'connect.php';
                                                    $q="  SELECT `StatusID`, `statusName` FROM `status`" ;
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option values="'.$row['StatusID'].'">'.$row['statusName'].'</option>';
                                                    }
                                                    ?>

                                                </select>

                                                <input type="submit" value="Create" class="btn btn-outline-dark" /><input type="reset" class="btn btn-outline-dark" style="margin: 20px;" />
                                            </form>
                                        </div>

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
