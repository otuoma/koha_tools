$(document).ready(function (){
    $('#branches-table').DataTable();
    $('#upload-form').submit(function(e){

        e.preventDefault();

        const formData = new FormData(this);
        let url = $(this).attr('action');

        $.ajax({
            type: $(this).attr('method'),
            url: url,
            data: formData,
            cache:false,
            enctype: $(this).attr('enctype'),
            contentType: false,
            processData: false,
            success:function(data){
                window.alert(data);
                window.location = url;
            },
            error: function(err){
                window.alert(err);
                window.location = url;
            }
        });

    });
});
