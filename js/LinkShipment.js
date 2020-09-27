


$(function(){
        
    $.ajax({
      
    url:"ShippmentJSON.php",
   
    success:function(data)
    { 
       var myJISON=JSON.parse(data);
       console.log(myJISON);
    
     
      for(i in myJISON ){
        
        
      //  <a href="productDetails.php?IdProducts=<?php echo($row['IdProducts'])?>">
    //   $("table").append('<tbody>');
    //   $("table").append('<tr>');
     
        
         
    //      $("table").append('<td>'+ myJISON[i].From +" "+myJISON[i].To +'</td>');
    //      $("table").append('<td>'+ myJISON[i].From + myJISON[i].NameShippment +'</td>');
   
    //      $("table").append('</tr>');
       
      }
    }

});

});