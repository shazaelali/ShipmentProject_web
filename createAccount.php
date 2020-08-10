<?php
include 'connect.php';
$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$add=$_POST["address"];
$em=$_POST["email"];
$pass=$_POST["password"];
$passHashed=password_hash($pass,PASSWORD_DEFAULT);
if(empty($fn)||empty($ln)||empty($add)||empty($em)||empty($pass)||($_POST["password"]!=$_POST["re-pass"])){
header('location:CreateAccount.html');
}
else{
mysqli_query($connect,"INSERT INTO `users`(`IdUsers`, `FirstName`, `LastName`, `Address`, `Email`, `Password`) VALUES (NULL,'$fn','$ln',
'$add','$em','$passHashed')");
 header('location:Login.html');
}
mysqli_close($connect); 
?>