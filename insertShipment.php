<?php 
     
     include 'connect.php';
     $from=$_POST["From"];
     $to=$_POST["To"];
     $dateship=$_POST["Date"];
     $weightship=$_POST["Weight"];
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
     mysqli_query($connect," INSERT INTO `shippment`(`shippmentID`, `From`, `To`, `Date`, `Weight`, `NoOfItems`, `Description`, `ClientID`, `StatusID`, `shipTypeID`) VALUES (NULL,'$shipTName','$shipTime')");

      header('location:shippment.php');
     }
     mysqli_close($connect);
     
    
 ?>
