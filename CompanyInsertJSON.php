<?php
   include 'connect.php';
 
   $q="SELECT *FROM `contract`,`entreprise`,`shippmenttype`WHERE contract.IdEntreprise = entreprise.IdEntreprise AND shippmenttype.shipTypeID=contract.shipTypeID";
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
  
         
       