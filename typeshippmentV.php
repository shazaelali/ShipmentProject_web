<?php 
     
     include 'connect.php';
     $shipTName=$_POST["shipmentTypeName"];
     $shipTime=$_POST["shipTime"];
    
    //name="shipmentTypeName" shipTime
     if(empty($shipTName)||empty($shipTime)){
     header('location:typeShipmentd.php');
     }
     else{
     mysqli_query($connect,"INSERT INTO `shippmenttype`(`shipTypeID`, `TypeName`, `shipTime`) VALUES (NULL,'$shipTName','$shipTime')");
    
      header('location:typeShipment.php');
     }
     mysqli_close($connect);
     
    
 ?>
