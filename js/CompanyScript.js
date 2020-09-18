
    $(function(){
        
        $.ajax({
          
        url:"CompanyInsertJSON.php",
       
        success:function(data)
        { 
           var myJISON=JSON.parse(data);
           console.log(myJISON);
           for(i in myJISON ){
           $("table").append('<tr>');
           $("table").append('<th scope="row">'+ myJISON[i].IdEntreprise +'</th>');
           $("table").append('<td>'+ myJISON[i].NameEntreprise +'</td>');
           $("table").append("");
           $("table").append("");
           $("table").append("");
           $("table").append("");
           }
        }
 
    });
   
 });