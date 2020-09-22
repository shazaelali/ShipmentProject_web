<?php 
     
   include 'connect.php';
   $DescriptionUpdate=$_POST["DescriptionUpdate"];
   $RegionDetails=$_POST["RegionDetails"];
   $NameDetail=$_POST["NameDetail"];
   $ShipmentName=$_POST["ShipmentName"];
   $Date=date("Y-m-d");
   $time= date("h:i:sa");


    
    //name="shipmentTypeName" shipTime
     if(empty($DescriptionUpdate)||empty($RegionDetails)||empty($NameDetail)||empty($ShipmentName)){
       
     }
     else{
		mysqli_query($connect,"INSERT INTO `detail`(`IdDetail`, `NameDetail`, `date`, `time`, `IdDescriptionUpdate`, `IdRegion`, `shippmentID`) VALUES (NULL,'$NameDetail','$Date','$time','$DescriptionUpdate','$RegionDetails','$ShipmentName')");

      header('location:controleShipment.php');
     }
     mysqli_close($connect);
     
    
 ?>