$(function () {
    $('.form-container').on('submit', function (e) {
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        $form = $(this);
       if (email == "") {
            $form.find('.status').html("<p style='text-align:center;' class='alert alert-danger'>Failed to login</p>");
        }
        else if (password == "") {
            $form.find('.status').html("<p style='text-align:center;' class='alert alert-danger'>Failed to login</p>");
        }
        else {
            $form.find('.status').html("");
            $("#button").html(" <span class='spinner-border spinner-border-sm'></span>  Loading..");
            submitForm($form)
        }
    });
});


function submitForm($form) {
    $.ajax({
        url: $form.attr('action'),
        method: $form.attr('method'),
        data: $form.serialize(),
        success: function (response) {
            response = $.parseJSON(response);
            if (response.success) {
                email = $('#email').val("");
                password = $('#password').val("");
                $form.find('.status').html(response.message);
                $("#button").html("Register");
                window.location = response.url;
            }
            else if (response.error) {
                $form.find('.status').html(response.message);
                $("#button").html("Register");
            }
            else {
                $form.find('.status').html(response.message);
                $("#button").html("Register");

            }
        }

    });
}

