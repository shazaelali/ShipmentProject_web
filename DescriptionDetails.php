<?php 
     
     include 'connect.php';
    
     $DescriptionDetails=$_POST["DescriptionDetails"];
    
    //name="shipmentTypeName" shipTime
     if(empty($DescriptionDetails)){
        header('location:controleShipment.php?MessageDecreptionerror=Inert not done');
     }
     else{
     mysqli_query($connect,"INSERT INTO `descriptionupdate`(`IdDescriptionUpdate`, `NameDescUpdate`) VALUES (NULL,'$DescriptionDetails')");
     
      header('location:controleShipment.php?MessageDecreption=Inert done');
     }
     mysqli_close($connect);
     
    
 ?>