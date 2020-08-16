<?php
                                                    include 'connect.php';
                                                    $NameId=$_POST['datapost'];
                                                    $q="SELECT * FROM `ville` WHERE IdPay='$NameId'" ;
                                                    $res=mysqli_query($connect,$q);

                                                    while($row=mysqli_fetch_assoc($res))
                                                    {
                                                    echo'
                                                    <option values="'.$row['IdVille'].'">'.$row['NameVille'].'</option>';
  }
    ?>