<?php
  include 'connect.php';
 if(isset($_GET['IDChauffeur'])){
     $IDChauff=$_GET['IDChauffeur'];
                                     

     mysqli_query($connect," DELETE FROM `users` WHERE IdUsers='$IDChauff'");
   
     header('location:ChauffeurAdminPage.php');
 }


?>