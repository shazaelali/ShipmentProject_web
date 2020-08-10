

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
   
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="stylesheet" type="text/css" href="css/signupStyle.css">-->
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
                            <div  class="text"> id</div>
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

                                  <div><span class="SpanLocation">From beiurt  </span>
                                      <span class="SpanLocation"style="float: right;">to tripoli </span>
                                    </div>
                
                                  <div> <span class="SpanLocationDate"> 20-5-2020</span>
                                   <span class="SpanLocationDate" style="float: right;"> 25-5-2020</span></div>
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
                            <div>Overnight (Parcel)</div>
                          </div> 
                         </div>
                         <div class="col-2 backDeatil marg"> 
                            <div class="formdiv">
                            <div>Weight </div>
                            <div>0.24 KG</div>
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
                            <div>No. Of Items </div>
                            <div>1</div>
                          </div> 
                         </div>
                         

                     
                       </div>

                       <div class="col-4 backDeatil marg"> 
                            <div class="formdiv">
                              <div class="row">
                                <div class="col-4">
                                  <div class="">Origin</div>
                                  <div class="">Beirut</div>
                                  
                                </div>
                                <div class="col-4">
                                  
                                  
                                </div>
                                <div class="col-4">
                                <div class="">Destination</div>
                                <div class="">Tripoli</div>
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
		
            



</body>
</html>














