<?php 
     
     include 'connect.php';
     $shipTName=$_POST["shipmentTypeName"];
     $shipTime=$_POST["shipTime"];
    
    //name="shipmentTypeName" shipTime
     if(empty($shipTName)||empty($shipTime)){
        header('location:controleShipment.php?MessageTypeError= not insert Type');}
     else{
     mysqli_query($connect,"INSERT INTO `shippmenttype`(`shipTypeID`, `TypeName`, `shipTime`) VALUES (NULL,'$shipTName','$shipTime')");
    
     header('location:controleShipment.php?MessageType=insert type');
     }
     mysqli_close($connect);
     
    
 ?>
