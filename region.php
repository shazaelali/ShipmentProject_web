<?php 
     
   include 'connect.php';
   $Region=$_POST["Region"];
   $IdVille=$_POST["villeSelect"];
  


    
    //name="shipmentTypeName" shipTime
     if(empty($Region)||empty($IdVille)){
      header('location:controleShipment.php?messegeRegionError= error Region');
     }
     else{
		mysqli_query($connect,"INSERT INTO `region`(`IdRegion`, `regionName`, `IdVille`) VALUES (NULL,'$Region','$IdVille')");
        
      header('location:controleShipment.php?messegeRegion=Insert Region');
     }
     mysqli_close($connect);
     
    
 ?>