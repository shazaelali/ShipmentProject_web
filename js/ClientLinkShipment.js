


$(function(){
        
    $.ajax({
      
    url:"clientLinkInsertJSON.php",
   
    success:function(data)
    { 
       var myJISON=JSON.parse(data);
       console.log(myJISON);
    
     
      for(i in myJISON ){
        
        
      //  <a href="productDetails.php?IdProducts=<?php echo($row['IdProducts'])?>">
      $("table").append('<tbody>');
      $("table").append('<tr>');
     
         $("table").append('<td><a href="ShipmentDetails.php?IdShipment="'+ myJISON[i].shippmentID +'>'+ myJISON[i].shippmentID +'</a> </td>');
         
         $("table").append('<td>'+ myJISON[i].From +" "+myJISON[i].To +'</td>');
         $("table").append('<td>'+ myJISON[i].From + myJISON[i].NameShippment +'</td>');
   
         $("table").append('</tr>');
       
      }
    }

});

});