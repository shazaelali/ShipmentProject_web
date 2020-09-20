
    $(function(){
        
        $.ajax({
          
        url:"CompanyInsertJSON.php",
       
        success:function(data)
        { 
           var myJISON=JSON.parse(data);
           console.log(myJISON);
           for(i in myJISON ){
            
            
            
           $("table").append('<tbody>');
           $("table").append('<tr>');
           $("table").append('<td scope="row">'+ myJISON[i].IdContract +'</td>');
           $("table").append('<td>'+ myJISON[i].NameEntreprise +'</td>');
           $("table").append('<td>'+ myJISON[i].TypeShipmentName +'</td>');
           $("table").append('<td>'+ myJISON[i].dateContarct +'</td>');
           $("table").append('<td>'+ myJISON[i].dateExpire +'</td>');
           $("table").append('<td>'+ myJISON[i].descriptionContract +'</td>');
           $("table").append('<td>'+ myJISON[i].DescriptionEntreprise +'</td>');
           $("table").append('</tr>');
           $("table").append('</tbody>');
           }
        }
 
    });
   
 });