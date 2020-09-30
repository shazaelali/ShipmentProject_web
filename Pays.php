<?php 
     
	 include 'connect.php';
	 $Pays=$_POST["Pays"];
    
    //name="shipmentTypeName" shipTime
     if(empty($Pays)){
       header('location:controleShipment.php?messageError= not insert pay');//error
     }
     else{
		mysqli_query($connect,"INSERT INTO `pay`(`IdPay`, `NamePay`) VALUES (NULL,'$Pays')");
        
      header('location:controleShipment.php?MessagePay=insert pay');
     }
     mysqli_close($connect);
     
    
 ?>