<?php 
     
     include 'connect.php';
     $statusName=$_POST["statusName"];
    
    
    //name="shipmentTypeName" shipTime
     if(empty($statusName)){
     header('location:typeShipmentd.php');
     }
     else{
     mysqli_query($connect,"INSERT INTO `status`(`StatusID`, `statusName`, `Description`) VALUES (NULL,'$statusName','')");
    
      header('location:typeShipment.php');
     }
     mysqli_close($connect);
     
    
 ?>
