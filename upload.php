<?php
    var_dump($_FILES);
  
	 
	 if(!empty($_FILES))
	  {  $fileName=$_FILES['file']['name'];
        
	     $fileSize=$_FILES['file']['size'];
	     $fileError=$_FILES['file']['error'];
		 $file_extenstion=strrchr($fileName,".");
		 $fileTmpName=$_FILES['file']['tmp_name'];
		 $file_dest='images/'.$fileName;
		  
		  $extension_autorisess= array('.jpg','.png');
		    if(in_array($file_extenstion,$extension_autorisess))
			{  
				if(move_uploaded_file($fileTmpName,$file_dest)){
					echo'fichier envoyer avec sucee';
					 $connect=mysqli_connect("localhost","root","","web3db");
					 $image =$fileName;
                     $sql="INSERT INTO `status`(`ImageStatus`) VALUES ('$image')";
                     
					 mysqli_query($connect,$sql);
				} else{
					echo"Error";
				}
				
			} else
			{
				echo" Just les jpg et png files ";
			}
	  }
	  
	  
	  
	  
	  
	  
  
 



?>