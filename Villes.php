<?php 
     
   include 'connect.php';
   $IdPay=$_POST["namePays"];
   $Ville=$_POST["Ville"];
  
   echo $Ville;
   echo $IdPay;

    
    //name="shipmentTypeName" shipTime
     if(empty($Ville)||empty($IdPay)){
      header('location:controleShipment.php?messageVilleError=Not Insert');
     }
     else{
		mysqli_query($connect,"INSERT INTO `ville`(`IdVille`, `NameVille`, `IdPay`) VALUES (NULL,'$Ville','$IdPay')");
        
      header('location:controleShipment.php?messageVille=InsertVille');
     }
     mysqli_close($connect);
     
    
 ?>