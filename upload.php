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
					include 'connect.php';
					 $image =$fileName;
					 $sql="INSERT INTO `files`(`Id`, `Name`)  VALUES (NULL,'$image')";
					 mysqli_query($connect,$sql);
					 header('location:Controle.php');
				} else{
					echo"Error";
				}
				
			} else
			{
				echo" Just les jpg et png files ";
			}
	  }
	  
	  
	  
	  
	  
	  
  
 



?>