$(document).ready(function () {
    $("#contact-form").validate({
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
        submitHandler: function (form)  {
            $(form).submit();
        }
    })
  })