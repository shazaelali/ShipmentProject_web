
    $(function(){
        
        $.ajax({
          
        url:"CompanyInsertJSON.php",
       
        success:function(data)
        { 
           var myJISON=JSON.parse(data);
           console.log(myJISON);
           for(i in myJISON ){
           $("table").append('<tr>');
           $("table").append('<th scope="row">'+ myJISON[i].IdContract +'</th>');
           $("table").append('<td>'+ myJISON[i].NameEntreprise +'</td>');
           $("table").append('<td>'+ myJISON[i].TypeShipmentName +'</td>');
           $("table").append('<td>'+ myJISON[i].dateContarct +'</td>');
           $("table").append('<td>'+ myJISON[i].dateExpire +'</td>');
           $("table").append('<td>'+ myJISON[i].descriptionContract +'</td>');
           $("table").append('<td>'+ myJISON[i].DescriptionEntreprise +'</td>');
           }
        }
 
    });
   
 });