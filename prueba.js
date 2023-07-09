$(function(){
    $('#NIT').keyup(function(){
        let NIT = $('#NIT').val();
        $.ajax({
            url: 'leerSalxUni.php',
            type: 'POST',
            data: { NIT },
            success: function(response){
                console.log("YEI!");
            }
        })
    })
});