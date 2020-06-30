<?php 
     
     include 'connect.php';
     $nameCompany=$_POST["NameCompany"];//NameCompany Description DateContrat DateExpireContrat StShip
     $contractDesc=$_POST["Description"];
     $Datec=$_POST["DateContrat"];
     $DateE=$_POST["DateExpireContrat"];
     $status=$_POST["StShip"];

    
   
     if(empty($nameCompany)||empty($contractDesc)||empty($Datec)||empty($DateE)||empty($status)){
     header('location:contrat.php');
     }
     else{
     mysqli_query($connect,"INSERT INTO `shippmenttype`(`shipTypeID`, `TypeName`, `shipTime`) VALUES (NULL,'$shipTName','$shipTime')");
    
     header('location:contrat.php');
     }
     mysqli_close($connect);
     
    
 ?>