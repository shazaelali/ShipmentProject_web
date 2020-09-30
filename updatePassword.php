
<?php
 session_start();
 include 'connect.php';
     $oldpass=$_POST['password'];

     $newpass=$_POST['Newpassword'];
     $repass=$_POST['Comfirmpassword'];

     $userId= $_SESSION['id'];
     $passHashed=password_hash($newpass,PASSWORD_DEFAULT);
   
       if(empty($oldpass)||empty($newpass)||empty($repass)){
          echo"<script>alert('Your new and Retype Password is not match'); </script>";//window.location='myProfile.php'
         header('location:MyProfile.php?filde=null');
         echo"1";
    }
    else{
    
     $res=mysqli_query($connect,"SELECT `IdUsers`,`Password` FROM `users` WHERE IdUsers= '$userId'");
       echo"SELECT `IdUsers`,`Password` FROM `users` WHERE IdUsers= '$userId'";
     if(mysqli_num_rows($res)>0){
        //exist   
       $row=mysqli_fetch_assoc($res);
        echo $row["Password"];
       if(!password_verify($newpass,$row['Password'])){ //if($a[$i]["Email"]==$em && password_verify($pass,$a[$i]["Password"]))
        
            if($repass!=$newpass) {
            // echo "<script>alert('rep_pass no match');</script>"; 
             header('location:MyProfile.php?passnew=notMatch');}
             else{
               if($repass==$newpass) 
                  $update=mysqli_query($connect,"UPDATE `users` set `Password`='$passHashed'WHERE IdUsers= '$userId'");
                   // echo "<script>alert('Update Sucessfully') </script>"; 
                    header('location:MyProfile.php?NewPass=update');
              
                 
               
             }
            
    
  
    
     }else{
      header('location:MyProfile.php?pass=samePass');
     }
    }
}
?>