


$(function(){
        
    $.ajax({
      
    url:"ShippmentJSON.php",
   
    success:function(data)
    { 
       var myJISON=JSON.parse(data);
       console.log(myJISON);
    
     
      for(i in myJISON ){
        
        
      
         $("table").append('<tbody>');
      $("table").append('<tr>');
     
   
         $("table").append('<td>'+  myJISON[i].shippmentID +'</td>');
         $("table").append('<td>'+  myJISON[i].FirstName+" "+ myJISON[i].LastName +'</td>');
         $("table").append('<td>'+  myJISON[i].From +'</td>');
         $("table").append('<td>'+  myJISON[i].To +'</td>');
         $("table").append('<td>'+  myJISON[i].DateTOShip +'</td>');
         $("table").append('</tr>');

         $("table").append('</tbody>');
       
      }
    }

});

});