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
            var formData = new FormData(form);
            $.ajax({
                url: 'sendEmail.php',
                data: formData,
                type: 'POST',
                contentType: false, 
                processData: false,
                success: function(res) {
                    if (res == true) {
                        $('.sent-message').show();
                        $("#contact-form")[0].reset();
                        setTimeout(function() {
                            $('#send-message').fadeOut('fast');
                        },5000);
                    }
                }
            });
        }
    })
  })