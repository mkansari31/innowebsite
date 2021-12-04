$(document).ready(function () {


    $("#contact").validate({
        rules: {
            name: {
                required: true,

            },
            email: {
                required: true,
            },
            subject: {
                required: true,
            },
            message: {
                required: true,
            },
        },
        submitHandler: function ()  {

        }
        
    })
})