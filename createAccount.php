
 <?php
 include 'connect.php';
 $fn=$_POST["firstName"];
 $ln=$_POST["lastName"];
 $add=$_POST["address"];
 $Gender=$_POST["Gender"];//Account
 $Account=$_POST["Account"];
 $em=$_POST["email"];
 $pass=$_POST["password"];
 $image=$_POST["image"];
 $passHashed=password_hash($pass,PASSWORD_DEFAULT);
 if(empty($fn)||empty($ln)||empty($add)||empty($em)||empty($pass)||empty($Gender)||empty($Account)||empty($image)||($_POST["password"]!=$_POST["re-pass"])){
 header('location:CreateAccount1.php?Messagepass=ErrorPass');
 }
 else{
   
   mysqli_query($connect,"INSERT INTO `users`(`IdUsers`, `FirstName`, `LastName`, `imgUser`, `Gender`, `Account`, `Address`, `Email`, `Password`) 
    VALUES (NULL,'$fn','$ln','$image','$Gender','$Account','$add','$em','$passHashed')");
    header('location:Login.php?Message=NewAcount');
   
  
 }

 mysqli_close($connect); 
?> 