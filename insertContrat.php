<?php 
 $i=1;
include 'connect.php';
$IdCompany=$_POST["nameCompany"];//NameCompany Description DateContrat DateExpireContrat StShip
$contractDesc=$_POST["Description"];
$Datec=$_POST["DateContrat"];
$DateE=$_POST["DateExpireContrat"];
$ShipmentType=$_POST["StShip"];
  echo $nameCompany;

  


if(empty($IdCompany)||empty($contractDesc)||empty($Datec)||empty($DateE)||empty($ShipmentType)){
  
  header('location:Contrat.php?MessageError=Not Insert');//error
          
}
else{
  
  mysqli_query($connect,"INSERT INTO `contract`(`IdContract`, `dateContarct`, `dateExpire`, `descriptionContract`, `shipTypeID`, `IdEntreprise`) VALUES (NULL,'$Datec','$DateE','$contractDesc','$ShipmentType','$IdCompany')");
  
   header('location:Contrat.php?Message=Insert company');
   
}
mysqli_close($connect);


?>