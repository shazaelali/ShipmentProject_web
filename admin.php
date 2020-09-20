<?php 
     session_start();

 ?>
 <?php
       include 'connect.php';
         $q=" SELECT * FROM `pages`" ;

         $res=mysqli_query($connect,$q);

         $query = "SELECT Account, count(*) as number FROM users GROUP BY Account";  
         $result = mysqli_query($connect, $query);  
         $qu = "SELECT Address, count(*) as number FROM users GROUP BY Address";  
         $resulta = mysqli_query($connect, $qu);  
        //user count
         $Query="SELECT Account,count('Account')FROM `users` WHERE Account='Client' GROUP BY Account";
         $Query_result = mysqli_query($connect, $Query);  
        //admin count
         $QueryAdmin="SELECT Account,count('Account')FROM `users` WHERE Account='Admin' GROUP BY Account";
         $Query_resultAdmin = mysqli_query($connect, $QueryAdmin); 
        // contract count 
         $QueryContract="SELECT count('contract')FROM `contract`";
         $Query_resultContract = mysqli_query($connect, $QueryContract); 
        //shipment count
         $QueryShipment="SELECT count('shippment')FROM `shippment`";
         $Query_resultShipment = mysqli_query($connect, $QueryShipment); 
?>
  <!DOCTYPE html>
     <html lang="en">
         <head>
             <?php include 'files.php';?>  
   
             <link rel="stylesheet"  href="css/desginPages.css">
             
             <link rel="stylesheet"  href="css/leftMenu.css">
             <link rel="stylesheet" href="css/admin.css">

              <title>Admin</title>
         </head>
         <body>


     <div class="d-flex">
        <?php include 'menuleftside.php';?>  
  
        <div class="w-100">
              <?php include 'topMenu.php';?>
            <div id="content">
                <div class="container-fluid top" >

                    
                    <div class="row">
                        <div class="col-lg-12 col-12">



                            <div class="row">
                                 <!--left side-->
                                <div class="col-lg-12 col-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 div">
                                            <div class="card text-white border-light" style="margin-bottom:0;background-color:#0a636e70">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xl mb-1">Total users</div>
                                                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                                               <?php  
                                                                  while($row = mysqli_fetch_array($Query_result))  
                                                                   {  
                                                                    echo $row["count('Account')"];  
                                                                      }  
                                                                    ?>  
      
                                                                  

                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fa fa-users" aria-hidden="true" style="color:wight ; font-size:40"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6 mb-3 div">
                                            <div class="card text-white border-light" style="margin-bottom:0;background-color:#956072d9">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs mb-1">Total admin</div>
                                                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                                            <?php  
                                                                  while($row = mysqli_fetch_array($Query_resultAdmin))  
                                                                   {  
                                                                    echo $row["count('Account')"];  
                                                                      }  
                                                                    ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fa fa-lock" aria-hidden="true" style="color:wight ; font-size:40"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3  div " style="margin:0">
                                            <div class=" card border-light " style="margin-bottom:0;background-color: white">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs mb-1" style="color:#26B7D4">Total contart</div>
                                                            <div class="h3 mb-0 font-weight-bold text-gray-800" style="color:#707070">

                                                            <?php  
                                                                  while($row = mysqli_fetch_array($Query_resultContract))  
                                                                   {  
                                                                    echo $row["count('contract')"];  
                                                                      }  
                                                                    ?>  
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fa fa-newspaper-o" aria-hidden="true" style="color:#26B7D4 ; font-size:50"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3  div " style="margin:0">
                                            <div class="card border-light" style="margin-bottom:0;background-color: white">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs mb-1" style="color:#26B7D4">Total shipment</div>
                                                            <div class="h3 mb-0 font-weight-bold text-gray-800" style="color:#707070">
                                                            <?php  
                                                                  while($row = mysqli_fetch_array($Query_resultShipment))  
                                                                   {  
                                                                    echo $row["count('shippment')"];  
                                                                      }  
                                                                    ?>  
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fa fa-truck" aria-hidden="true" style="color:#26B7D4 ; font-size:50"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    

                                    <div class="row">

                                        <div class="col-sm-12 col-lg-12" >
                                            <div class="formDiv">



                                            

                                              <div id="top_x_div" style="width: 300px; height: 300px;"></div>
                                                   
                                            


                                        </div>
                                    </div>
                                     
                                    <div class="row">

                                        <div class="col-sm-12 col-lg-12">
                                             <div class="row">
                                                 <div class="col-md-8 mb-3 div"> 
                                                        <div class="formDiv" 
                                                        style="width: fit-content;margin-left: 15px;">


                                                           <div id="piechart" style="" >
                                                           </div> 
                                                     </div>
                                                  </div>
                                                  
                                              
                                              </div>
                                              

                                        </div>
                                    </div>

                                </div>
                                 
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
     </div>
     
     

           
     
     <?php include 'scriptFiles.php';?>  
       <!--chart for user contry-->
       <script src="https://www.gstatic.com/charts/loader.js"></script>

       <script type="text/javascript" >
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
             var data = google.visualization.arrayToDataTable([
               ['Admin', 'User'],
                  <?php  
                          while($row = mysqli_fetch_array($resulta))  
                          {  
                               echo "['".$row["Address"]."', ".$row["number"]."],";  
                          }  
                          ?>  
      
                ]);

           var options = {
             
             pieSliceText: 'label',
             title: 'User Address',
             pieStartAngle: 100,
              pieHole: 0.4 ,
              'width':550,
               'height':400,
              
            };

           var chart = new google.visualization.PieChart(document.getElementById('piechart'));
           chart.draw(data, options);
          }
       </script> 

      <!--chart for user Account-->
      <script type="text/javascript" >
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawStuff);

          function drawStuff() {
               var data = new google.visualization.arrayToDataTable([
                 ['Admin', 'User'],
                <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Account"]."', ".$row["number"]."],";  
                          }  
                          ?>  
            ]);

           var options = {
              title: 'Number Of Accounts',
              width: 900,
              legend: { position: 'none' },
              chart: { title: 'umber Of Accounts',
              subtitle: 'Number Of users by  Accounts' },
              bars: 'horizontal', // Required for Material Bar Charts.
              axes: {
                   x: {
                     0: { side: 'top', label: 'Percentage'} // Top x-axis.
                 }
               },
               bar: { groupWidth: "90%" }
             };

             var chart = new google.charts.Bar(document.getElementById('top_x_div'));
              chart.draw(data, options);
           }
     </script>


    </body>
  </html>

     
