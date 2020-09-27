<?php
  include 'connect.php';
 if(isset($_GET['IDShipment'])){
     $Idship=$_GET['IDShipment'];

    
     
       $q="INSERT INTO deleteshipment
        SELECT * FROM shippment
        WHERE shippment.shippmentID='$Idship'";
            mysqli_query($connect,$q);                                      

     mysqli_query($connect," DELETE FROM `shippment` WHERE shippmentID='$Idship'");
     mysqli_query($connect," DELETE FROM detail  WHERE shippmentID='$Idship'");
     mysqli_query($connect,"DELETE FROM `status` WHERE shippmentID='$Idship'");
    
     header('location:chauffeur.php');
 }


?>