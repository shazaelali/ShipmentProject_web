<?php 
     
     include 'connect.php';
    
     $DescriptionDetails=$_POST["DescriptionDetails"];
    
    //name="shipmentTypeName" shipTime
     if(empty($DescriptionDetails)){
     header('location:typeShipmentd.php');//error
     }
     else{
     mysqli_query($connect,"INSERT INTO `descriptionupdate`(`IdDescriptionUpdate`, `NameDescUpdate`) VALUES (NULL,'$DescriptionDetails')");
     
      header('location:Controle.php');
     }
     mysqli_close($connect);
     
    
 ?>