<?php 
     
     include 'connect.php';
     $client=$_POST["NameClient"]
     $from=$_POST["From"];
     $to=$_POST["To"];
     $dateship=$_POST["Date"];
     $DateEstimate=$_POST["DateEstimate"];
     $weightship=$_POST["Weight"];
     $numOfItems=$_POST["NOItems"];
     $descriptionShip=$_POST["Decription"];
     $region=$_POST["Region"];
     $ville=$_POST["Ville"];//Region
     $pay=$_POST["pay"];
     $typeship=$_POST["StShip"];
     $status=$_POST["status"];
     
    
    //name="shipmentTypeName" shipTime
     if(empty($shipTName)||empty($shipTime)){
     header('location:shippment.php');
     }
     else{
     mysqli_query($connect,"INSERT INTO `shippment`(`shippmentID`, `From`, `To`, `Date`, `DateTOShip`, `Weight`, `NoOfItems`, `Description`, `IdUsers`, `StatusID`, `shipTypeID`) VALUES (NULL,'$from','$to','$dateship','$DateEstimate','$weightship','$numOfItems','$descriptionShip','$from','$from','$from')");

      header('location:shippment.php');
     }
     mysqli_close($connect);
     
    
 ?>
 