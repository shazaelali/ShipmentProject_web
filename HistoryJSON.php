<?php
   include 'connect.php';
 
   $q="SELECT * FROM `history`,users WHERE users.IdUsers=history.IdUsers";
   $res=mysqli_query($connect,$q);
   
   if(mysqli_num_rows($res)>0){
        //exist   
       while($row=mysqli_fetch_assoc($res)){
         // echo  $row['NameIngrendient'];
          $dataArray[]=$row;
    
        }
    }
    echo json_encode($dataArray,JSON_FORCE_OBJECT);
?>
  