<?php 
     
   include 'connect.php';
   $DescriptionUpdate=$_POST["DescriptionUpdate"];
   $RegionDetails=$_POST["RegionDetails"];
   $ShipmentName=$_POST["ShipmentName"];
   
   $Date=date("Y-m-d");
   $time= date("h:i:sa");


    
    //name="shipmentTypeName" shipTime
     if(empty($DescriptionUpdate)||empty($RegionDetails)||empty($ShipmentName)){
       
     }
     else{
		mysqli_query($connect,"INSERT INTO `detail`(`IdDetail`, `date`, `time`, `IdDescriptionUpdate`, `IdRegion`, `shippmentID`) VALUES (NULL,'$Date','$time','$DescriptionUpdate','$RegionDetails','$ShipmentName')");

     header('location:chauffeur.php');
     }
     mysqli_close($connect);
     
    
 ?>