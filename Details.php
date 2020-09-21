<?php 
     
   include 'connect.php';
   $DescriptionUpdate=$_POST["DescriptionUpdate"];
   $RegionDetails=$_POST["RegionDetails"];
   $NameDetail=$_POST["NameDetail"];
   $Date=date("Y-m-d");
   $time= date("h:i:sa");


    
    //name="shipmentTypeName" shipTime
     if(empty($DescriptionUpdate)||empty($RegionDetails)){
       
     }
     else{
		mysqli_query($connect,"INSERT INTO `detail`(`IdDetail`,`NameDetail` ,`date`, `time`, `IdDescriptionUpdate`, `IdRegion`) VALUES (NULL,'$Date','$time','$DescriptionUpdate','$RegionDetails')");

      header('location:controleShipment.php');
     }
     mysqli_close($connect);
     
    
 ?>