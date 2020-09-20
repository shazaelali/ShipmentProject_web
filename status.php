<?php 
     
	 include 'connect.php';
	 $statusName=$_POST["statusName"];
    
    //name="shipmentTypeName" shipTime
     if(empty($statusName)){
     header('location:typeShipmentd.php');//error
     }
     else{
		mysqli_query($connect,"INSERT INTO `status`(`StatusID`, `statusName`,`ImageStatus`) VALUES (NULL,'$statusName',' ')");
     
      header('location:Controle.php');
     }
     mysqli_close($connect);
     
    
 ?>