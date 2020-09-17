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
?>
  <!DOCTYPE html>
     <html lang="en">
         <head>
             <?php include 'files.php';?>  
   
             <link rel="stylesheet"  href="css/desginPages.css">
             
             <link rel="stylesheet"  href="css/leftMenu.css">

              <title>Admin</title>
         </head>
         <body>


     <div class="d-flex">
        <?php include 'menuleftside.php';?>  
  
        <div class="w-100">
              <?php include 'topMenu.php';?>
            <div id="content">
                <div class="container-fluid" style="height:100%;overflow:auto;background-color:#F5F5F5">

                    <div class="row">

                        <div class="col-12">
                            <div class="row">
                                
                                <div class="col-6">

                                    <div style="margin: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-12">



                            <div class="row">
                                 <!--left side-->
                                <div class="col-lg-12 col-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 div">
                                            <div class="card text-white border-light " style="margin-bottom:0;background-color: #8CBC59">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xl mb-1">Total users</div>
                                                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                                                1

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
                                            <div class="card text-white border-light" style="margin-bottom:0;background-color: #FB5151">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs mb-1">Total admin</div>
                                                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                                                1
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

                                                                2
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
                                                                3
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

                                        <div class="col-sm-12 col-lg-12">
                                             <div class="row">
                                                 <div class="col-md-6 mb-3 div"> 
                                                        <div class="formDiv">


                                                           <div id="piechart" style="width: 400px; height: 350px;">
                                                           </div> 
                                                     </div>
                                                  </div>
                                                  <div class="col-md-6 mb-3 div"> 
                                                        <div class="formDiv">

 
                                                            <div  class="heightDiv">

                                                           
                                                   

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
             legend: 'none',
             pieSliceText: 'label',
             title: 'User Address',
             pieStartAngle: 100,
              pieHole: 0.4 
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
              title: 'Chess opening moves',
              width: 900,
              legend: { position: 'none' },
              chart: { title: 'Chess opening moves',
              subtitle: 'popularity by percentage' },
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

     
