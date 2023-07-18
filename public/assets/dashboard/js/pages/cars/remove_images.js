$(document).ready(function (){
    $(document).on('click','#remove_car_images',function (){
        var url =  $(this).data("url");
        var id = $(this).data("id");
        var _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "POST",
            url: url,
            data: {id: id,_token:_token},
            success: function (data) {
                console.log('success')
            }
        });
    });
});
