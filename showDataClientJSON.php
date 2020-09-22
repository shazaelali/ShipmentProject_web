<?php
   include 'connect.php';
 
   $q="SELECT * FROM users,`detail`,shippmenttype,shippment,status,descriptionupdate,region,ville,pay WHERE
    shippment.IdUsers=users.IdUsers AND shippment.shipTypeID=shippmenttype.shipTypeID AND 
    shippment.StatusID=status.StatusID AND shippment.IdDetail =detail.IdDetail AND 
    detail.IdDescriptionUpdate=descriptionupdate.IdDescriptionUpdate AND detail.IdRegion=region.IdRegion AND
     region.IdVille=ville.IdVille AND ville.IdPay=pay.IdPay";
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
  