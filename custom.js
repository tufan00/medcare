$(document).ready(function(){

    $('#Catagory').on('change',function(){
        var CatagoryId = $(this).val();
        $.ajax({
            method: "POST",
            url:"ajax.php",
            data:{id:CatagoryId},
            dataType:"html",
            success:function(data){
                $("#Treatment").html(data);
            }

        });
    });
});