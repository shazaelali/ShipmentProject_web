<?php 
     
     include 'connect.php';
     $client=$_POST["NameClient"];
     $nameShipment=$_POST["NameShipment"];
     $pays=$_POST["locationpays"];
     $from=$_POST["From"];
     $to=$_POST["To"];
     $dateship=$_POST["Date"];
     $DateEstimate=$_POST["DateEstimate"];
     $weightship=$_POST["Weight"];
     $numOfItems=$_POST["NOItems"];
     $descriptionShip=$_POST["Decription"];
    
     $typeship=$_POST["StShip"];
     $status=$_POST["status"];
     
    
    //name="shipmentTypeName" shipTime
     if(empty($client)||empty($nameShipment)||empty($pays)||empty($from)||empty($to)||empty($dateship)||empty($DateEstimate)||empty($weightship)||empty($numOfItems)||empty($descriptionShip)||empty($typeship)||empty($status)){
     header('location:shippment.php');
     }
     else{
     mysqli_query($connect,"INSERT INTO `shippment`(`shippmentID`, `NameShippment`, `pays`,`From`, `To`, `Date`, `DateTOShip`, `Weight`, `NoOfItems`, `Description`, `IdUsers`, `StatusID`, `shipTypeID`) VALUES (NULL,'$nameShipment','$pays','$from','$to','$dateship','$DateEstimate','$weightship','$numOfItems','$descriptionShip','$client','$status','$typeship')");
     echo "INSERT INTO `shippment`(`shippmentID`, `NameShippment`, `pays`,`From`, `To`, `Date`, `DateTOShip`, `Weight`, `NoOfItems`, `Description`, `IdUsers`, `StatusID`, `shipTypeID`) VALUES (NULL,'$nameShipment','$pays','$from','$to','$dateship','$DateEstimate','$weightship','$numOfItems','$descriptionShip','$client','$status','$typeship')";
    //  header('location:controleShipment.php');
     }
     mysqli_close($connect);
     
    
 ?>
