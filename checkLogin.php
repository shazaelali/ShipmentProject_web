<?php
 session_start();
include 'connect.php';
$em=$_POST["email"];
$pass=$_POST["password"];
$q="SELECT * FROM `users` where `Email` = '".$em."'"; //1st way 

$res=mysqli_query($connect,$q);
$a=array();
print_r($res);
print_r($a);
if(mysqli_num_rows($res)==1){
    while($row=mysqli_fetch_assoc($res)){
        $a[]=$row;
    }
for($i=0;$i<count($a);$i++){
if($a[$i]["Email"]==$em && password_verify($pass,$a[$i]["Password"])){
    if($pass=="admin123"){
        header('location:admin.php');
    } else{
   
    $_SESSION['id']=$row["IdUsers"];
    $_SESSION['name']=$row["FirstName"]." ".$row["LastName"];
     
    header('location:loggedIn.php');

    break 1;}
}else{

header('location:Login.html');
       }
}
}
else{

 header('location:Login.html');
    }
    
mysqli_close($connect);
?>