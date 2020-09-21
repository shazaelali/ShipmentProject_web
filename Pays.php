<?php 
     
	 include 'connect.php';
	 $Pays=$_POST["Pays"];
    
    //name="shipmentTypeName" shipTime
     if(empty($Pays)){
       header('location:typeShipmentd.php');//error
     }
     else{
		mysqli_query($connect,"INSERT INTO `pay`(`IdPay`, `NamePay`) VALUES (NULL,'$Pays')");
        
      header('location:controleShipment.php');
     }
     mysqli_close($connect);
     
    
 ?>