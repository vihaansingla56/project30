$(function () {
    $('.form-container').on('submit', function (e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        $form = $(this);
        if (name == "") {
            $form.find('.status').html("<p style='text-align:center;' class='alert alert-danger'>Name is required</p>");
        }
        else if (email == "") {
            $form.find('.status').html("<p style='text-align:center;' class='alert alert-danger'>Email is not valid </p>");
        }
        else if (password == "") {
            $form.find('.status').html("<p style='text-align:center;' class='alert alert-danger'>password is required</p>");
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
                name = $('#name').val("");
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

