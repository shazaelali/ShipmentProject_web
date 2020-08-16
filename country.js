
       $(document).ready(function(){
        $("#pay").on('change', function() {
            var payId=$(this).val();
            $.ajax({
                method:"POST",
                url:"insertShipment.php",
                data:{id : payId},
                dataType:"html",
                success:function(data)
                { 
                   $("#City").html(data);
                }

            }) ;
        });      
});


  console.log(",llf,,l");