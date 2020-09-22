
    $(function(){
        
        $.ajax({
          
        url:"showDataClientJSON.php",
       
        success:function(data)
        { 
           var myJISON=JSON.parse(data);
           console.log(myJISON);
        
         
          for(i in myJISON ){
            
            
            $("#shippmentID").append(myJISON[i].shippmentID);
            $("#Form").append(myJISON[i].From);
            $("#to").append(myJISON[i].To);
            $("#date").append(myJISON[i].date);
           // console.log(myJISON[i].date);
            $("#DateShip").append(myJISON[i].DateTOShip); //NoOfItems
            $("#typeShipment").append(myJISON[i].TypeName );
            $("#items").append(myJISON[i].NoOfItems );
            $("#weigth").append(myJISON[i].Weight );
            $("#Origin").append(myJISON[i].From );
            $("#destintion").append(myJISON[i].To );
            
        //    $("table").append('<td>'+ myJISON[i].TypeShipmentName +'</td>');
        //    $("table").append('<td>'+ myJISON[i].dateContarct +'</td>');
        //    $("table").append('<td>'+ myJISON[i].dateExpire +'</td>');
        //    $("table").append('<td>'+ myJISON[i].descriptionContract +'</td>');
        //    $("table").append('<td>'+ myJISON[i].DescriptionEntreprise +'</td>');
        //    $("table").append('</tr>');
        //    $("table").append('</tbody>');
          }
        }
 
    });
   
 });