<?php 
     
	 include 'connect.php';
     $statusName=$_POST["StatusName"];
     $IDShip=$_POST["ShipmentName"];
     $Image=$_POST['StatusImage'];
    
    //name="shipmentTypeName" shipTime
     if(empty($statusName)||empty($IDShip)||empty($Image)){
     header('location:typeShipmentd.php');//error
     }
     else{
		mysqli_query($connect,"INSERT INTO `status`(`StatusID`, `statusName`, `shippmentID`, `Id`) VALUES (NULL,'$statusName','$IDShip','$Image')");
      
      header('location:chauffeur.php');
     }
     mysqli_close($connect);
     
    
 ?>