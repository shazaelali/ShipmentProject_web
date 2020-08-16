<?php 

include 'connect.php';
$nameCompany=$_POST["nameCompany"];//NameCompany Description DateContrat DateExpireContrat StShip
$contractDesc=$_POST["Description"];
$Datec=$_POST["DateContrat"];
$DateE=$_POST["DateExpireContrat"];
$status=$_POST["StShip"];
  echo $nameCompany;

   


if(empty($nameCompany)||empty($contractDesc)||empty($Datec)||empty($DateE)||empty($status)){
  
          header('location:shipment.php');
          
}
else{
  
   mysqli_query($connect,"INSERT INTO `contract`(`IdContract`, `dateContarct`, `dateExpire`, `description`, `TypeName`, `NameEntreprise`) VALUES (NULL,'$Datec','$DateE','$contractDesc','$status','$nameCompany')");
   
    
    header('location:Contrat.php');
   
}
mysqli_close($connect);


?>