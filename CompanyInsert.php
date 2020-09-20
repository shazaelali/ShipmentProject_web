<?php 
     
     include 'connect.php';
     $companyName=$_POST["CompanyName"];
     $companyDec=$_POST["CompanyDec"];
    
    //name="shipmentTypeName" shipTime
     if(empty($companyName)||empty($companyDec)){
     header('location:typeShipmentd.php');
     }
     else{
     mysqli_query($connect,"INSERT INTO `entreprise`(`IdEntreprise`, `NameEntreprise`, `DescriptionEntreprise`) VALUES (NULL,'$companyName','$companyDec')");
    
      header('location:Controle.php');
     }
     mysqli_close($connect);
     
    
 ?>