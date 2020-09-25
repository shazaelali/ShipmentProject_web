

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
   
    <?php include 'files.php';?> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/client.css">
  
   

   <!--<script> src="javaScript.js"</script>-->
    <title>Document</title>
</head>
<body >


   
<a class="dropdown-item paddingMenu" href="LogOut.php"style="padding: 0px;" > <i class="fa fa-sign-out" aria-hidden="true"></i>logOut</a>
   <div class="container-fluid" style="height:100%;overflow:auto;background-color:#F5F5F5">

     <div class="row">

        <div class="col-12">
            <div class="row">
                <div class="col-12">
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
                <div class="image" style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                   
                        <div style=" height: 330px;">


                            <div class="text colorBleu" > Shipment Summary</div>
                            <div > <img src="images/images (1).png"class="logoImages" /></div>
                            <div  class="text" id="shippmentID"> </div>
                            <div>
                            
                                     
                                      
                                       
                                    <table style="width:100%;margin-left: 99px">  
                                    <tr>
                                      <td>  <img src="images/images (1).png"class="satutsImages" /> </td>
                                       <td>  <img src="images/images (1).png"class="satutsImages" /> </td>
                                       <td>  <img src="images/images (1).png"class="satutsImages" /> </td>
                                    </tr>

                                    </table>
                               
                                 </div>

                             <div class="location"> 

                                  <div>
                                    <span class="SpanLocation">From 
                                       <span class="SpanLocation" id="Form" ></span>
                                      </span>

                                      <span class="SpanLocation"style="float: right;">to  
                                         <span class="SpanLocation"id="to" ></span>
                                       </span>
                                    </div>
                
                                  <div> <span class="SpanLocationDate" id="date"> </span>
                                     <span class="SpanLocationDate" id="DateShip" style="float: right;"> </span>
                                   </div>
                             </div>
                        </div>

                   
                </div>


            </div>
        </div>
        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;overflow-y: auto">
                   
                        <div  style=" height: 300px;">
                       <div class="text colorBleu postioncenter"> History</div>
                       <div class=" postioncenter"> Where Your Shipment Has Been</div>
                       
                       <table class="table table-striped" >
                         <thead>
                             <tr>
                                  <th scope="col">Date</th>
                                 <th scope="col">Location</th>
                                 <th scope="col">Activity</th>
                                
     
                             </tr>
                         </thead>
                          <tbody>
                         <tr>
                            <th scope="row">20-5-2020 11:02 AM</th>
                             <td>beirut Lebanon</td>
                              <td>Shipment still not received </td>  
                             
                        </tr>
                        <tr>
                            <th scope="row">1-6-2020 1:30AM</th>
                             <td>Dekweneh, Lebanon</td>
                              <td>Shipment received at Shipment origin sorting facility</td>  
                             
                        </tr>
                        <tr>
                            <th scope="row">2-6-2020 4:00 AM</th>
                             <td>Tripoli Branch, Lebanon</td>
                              <td>Shipment is out for delivery</td>  
                             
                        </tr>
                        <tr>
                            <th scope="row">10-6-2020 4:00 AM</th>
                             <td>Tripoli Branch, Lebanon</td>
                              <td>Shipment delivered Shaza</td>  
                             
                        </tr>
                       </tbody>
                        </table>
                      </div>
                    
                          
                    
                </div>


            </div>
        </div>
        <div class="row" >

            <div class="col-sm-12 col-lg-12" style="">
                <div  style="background-color:white ;border-radius: 5px;padding:15px;margin-bottom:20px;">
                  
                    <div style=" height: 240px;">
                        <div class="text colorBleu postioncenter">Details </div>
                       <div class=" postioncenter">More About Your Shipmnet</div>
                       <div style="margin-top:25px;">
                       <div class="row ">
                        <div class="col-4 backDeatil marg">
                          <div class="formdiv">
                            <div>Shipment Type </div>
                            <div id="typeShipment"></div>
                          </div> 
                         </div>
                         <div class="col-2 backDeatil marg"> 
                            <div class="formdiv">
                            <div>Weight </div>
                            <div ><div id="weigth"></div>
                            KG</div>
                          </div> 
                         </div>
                         <div class="col-2 backDeatil marg"> 
                            <div class="formdiv">
                            <div>Service </div>
                            <div>CODS,CODS</div>
                          </div> 
                         </div>
                         <div class="col-2 backDeatil marg"> 
                            <div class="formdiv">
                            <div >No. Of Items </div>
                            <div id="items"></div>
                          </div> 
                         </div>
                         

                     
                       </div>

                       <div class="col-7 backDeatil marg"> 
                            <div class="formdiv">
                              <div class="row">
                                <div class="col-4">
                                  <div class="">Origin</div>
                                  <div class=""><span id="Origin"></span></div>
                                  
                                </div>
                                <div class="col-4">
                                  
                                  
                                </div>
                                <div class="col-4">
                                <div class="">Destination</div>
                                <div class=""><span id="destintion"></span></div>
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

           <div class="col-lg-4 col-12">


        <div style="min-height:200px; background-color:white; border-radius: 5px; margin:0px 5px;margin-bottom:20px;padding-top:22px">
          
        <div class="text colorBleu postioncenter">Customer Support </div>
        <div class=" postioncenter"></div>
        <div class=" postioncenter">Questions About your Shipment</div>
        <div class="border-bottom" style="padding-top: 22px;"></div>
        <div style="padding-left: 10px;">
            <div  >Support</div>
          <div class=" postioncenter" >submit Request</div>
        </div>
    
        

   

        
    </div>

    </div>
      </div>


  </div>
		
            
  <?php include 'scriptFiles.php';?>
    <script src="js/jquery-3.5.1.min.js"></script> 
  <script src="js/client.js"></script>

</body>
</html>














