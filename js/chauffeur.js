
    $(function(){
        
        $.ajax({
          
        url:"HistoryJSON.php",
       
        success:function(data)
        { 
           var myJISON=JSON.parse(data);
           console.log(myJISON);
           for(i in myJISON ){
            
            
            
           $("table").append('<tbody>');
           $("table").append('<tr>');
           $("table").append('<td scope="row">'+ myJISON[i].IdHistory +'</td>');
           $("table").append('<td>'+ myJISON[i].FirstName+" "+myJISON[i].LastName +'</td>');
           $("table").append('<td>'+ myJISON[i].shippmentID +'</td>');
           $("table").append('<td>'+ myJISON[i].Date +'</td>');
           $("table").append('<td>'+ myJISON[i].time +'</td>');
           $("table").append('<td>'+ myJISON[i].Email +'</td>');
   
           $("table").append('</tr>');
           $("table").append('</tbody>');
           }
        }
 
    });
   
 });