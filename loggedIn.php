

 <?php 
      session_start();
       if(isset($_SESSION["name"])){
            echo "bonjour". $_SESSION["name"];
        }else{

            header("Location:Login.html");
        }
        
        // else echo"error";
        ?>


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


   
<a class="dropdown-item paddingMenu" href="LogOut.php"style="padding: 0px;" > <i class="fa fa-sign-out" aria-hidden="true"></i>logOut</a>
<div class="container-fluid" style="height:100%;overflow:auto;background-color:#F5F5F5">

<div class="row">

    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <div style="margin: 20px;">
                   
                </div>
            </div>
            <div class="col-6">

                <div style="margin: 20px;">

                  
                   
</div>

                
                    </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-8 col-12">
       
      

        <div class="row" >

            <div class="col-sm-12 col-lg-12" style="">
                <div class="chart-container" style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                   

                    <div class="card-body">


                        <div id="bar-example" style=" height: 220px;"></div>

                    </div>
                </div>


            </div>
        </div>



        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div class="chart-container" style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                   

                    <div class="card-body">


                        <div id="bar-example" style=" height: 220px;"></div>

                    </div>
                </div>


            </div>
        </div>

        <div class="row" >

            <div class="col-sm-12 col-lg-12" style="">
                <div class="chart-container" style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                  

                    <div class="card-body">


                        <div id="bar-example" style=" height: 220px;"></div>

                    </div>
                </div>


            </div>
        </div>

      
    </div>

    <div class="col-lg-4 col-12">


        <div class="row " style="min-height:318px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;">
           


        </div>

        <div class="row " style="min-height:318px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;">
           


        </div>


   

        
    </div>

</div>
</div>


  
		
            


</body>
</html>














