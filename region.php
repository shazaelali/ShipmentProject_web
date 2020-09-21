<?php 
     
   include 'connect.php';
   $Region=$_POST["Region"];
   $IdVille=$_POST["villeSelect"];
  


    
    //name="shipmentTypeName" shipTime
     if(empty($Region)||empty($IdVille)){
       
     }
     else{
		mysqli_query($connect,"INSERT INTO `region`(`IdRegion`, `regionName`, `IdVille`) VALUES (NULL,'$Region','$IdVille')");
        
      header('location:controleShipment.php');
     }
     mysqli_close($connect);
     
    
 ?>