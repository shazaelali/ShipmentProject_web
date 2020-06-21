




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" type="text/css" href="css/signupStyle.css">-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!--<script> src="javaScript.js"</script>-->
    <title>Document</title>
</head>
<body >

    
    <div class="container">
   <div class="text-*-center font-italic" style="color:#7FB3D5"> 
   <h3> Welcome
       <?php 
      session_start();
       if(isset($_SESSION["name"])){
            echo  $_SESSION["name"];
        }
        
        else echo"error";?>
        to candidat page please vote </h3> </div>
		<div class="col-lg-12  d-block" style="">
		<div class="row " >	
            


</body>
</html>














