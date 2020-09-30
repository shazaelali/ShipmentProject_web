<?php 
     
     include 'connect.php';
     $client=$_POST["NameClient"];
     $pays=$_POST["locationpays"];
     $from=$_POST["From"];
     $to=$_POST["To"];
     $dateship=$_POST["Date"];
     $DateEstimate=$_POST["DateEstimate"];
     $weightship=$_POST["Weight"];
     $numOfItems=$_POST["NOItems"];
     $descriptionShip=$_POST["Decription"];
     $typeship=$_POST["StShip"];
    
     
    
    //name="shipmentTypeName" shipTime
     if(empty($client)||empty($pays)||empty($from)||empty($to)||empty($dateship)||empty($DateEstimate)||empty($weightship)||empty($numOfItems)||empty($descriptionShip)||empty($typeship)){
     header('location:shipment.php?MessageError=Emty');
     }
     else{
     mysqli_query($connect,"INSERT INTO `shippment`(`shippmentID`,`pays`,`From`, `To`, `Date`, `DateTOShip`, `Weight`, `NoOfItems`, `Description`, `IdUsers`,  `shipTypeID`) VALUES (NULL,'$pays','$from','$to','$dateship','$DateEstimate','$weightship','$numOfItems','$descriptionShip','$client','$typeship')");
     echo "INSERT INTO `shippment`(`shippmentID`,`pays`,`From`, `To`, `Date`, `DateTOShip`, `Weight`, `NoOfItems`, `Description`, `IdUsers`,  `shipTypeID`) VALUES (NULL,'$pays','$from','$to','$dateship','$DateEstimate','$weightship','$numOfItems','$descriptionShip','$client','$typeship')";
          
     header('location:shipment.php?Message=suscsses');
     }
     mysqli_close($connect);
     
    
 ?>
