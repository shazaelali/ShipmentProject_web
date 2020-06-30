<?php
session_start();
include 'connect.php';
$em=$_POST["email"];
$pass=$_POST["password"];
$q="SELECT * FROM `users` where `Email` = '".$em."'"; //1st way 

$res=mysqli_query($connect,$q);
//$a=array();
//print_r($res);
//print_r($a);
if(mysqli_num_rows($res)==1){//>0 plusieur email meme password /==1 email avec pass unique 
    //exists
    $row=mysqli_fetch_assoc($res);
    if(password_verify($pass,$row['Password']))
    {
        if($pass=="admin123"){
         // session_start();
            $_SESSION['id']=$row["IdUsers"];
            $_SESSION['name']=$row["FirstName"]." ".$row["LastName"];

            header('location:admin.php');
          }
         else{
          //session_start();
    
          $_SESSION['id']=$row["IdUsers"];
          $_SESSION['name']=$row["FirstName"]." ".$row["LastName"];
       
         
           header('location:loggedIn.php');
           }  
    }else{
        //not existe
         header('location:Login.html');
            }
 }
  else{
//not existe
 header('location:Login.html');
    }
mysqli_free_result($res);  //trye7 system men millons recreds dans le memoire 
mysqli_close($connect);
?>