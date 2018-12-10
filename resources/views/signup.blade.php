@include('layouts.header')

<style media="screen">
.navbar-default {
  display: none;
}
.container.login-body {
    padding: 50px 10px;
}
</style>

@include('pages.signup')

@include('layouts.footer')



<script>

$(document).ready(function(){

    $('#signup-form').submit(function () {
        event.preventDefault();

        const formData = {
            "name" : $("#name").val(),
            "username" : $("#username").val(),
            "email" : $("#email").val(),
            "password" : $("#password").val(),
            "phone" : $("#phone").val(),
            "user_type" : "escort"
        }

        const data = JSON.stringify(formData);

        var settings = {
          "async": true,
          "crossDomain": true,
          "url": "http://localhost:8080/api/v1/users/create",
          "method": "POST",
          "headers": {
            "Content-Type": "application/json"
          },
          "processData": false,
          "data": data
        }

        $.ajax(settings).done(function (response) {
            if (response.message === "Email address already exist") {
                $('#signup-email-error-message').append(response.message);
            }else if (response.message === "Username already exist") {
                $('#signup-username-error-message').append(response.message);
            }else if (response.message === "Phone number already exist") {
                $('#signup-phone-error-message').append(response.message);
            }else if (response.message === "User created successfully") {
                $('#signup-success-message').show();
                $('#signup-success-message').append("Congrats! Your account was created successfully. An email for verification has been sent to "+$("#email").val()+ ". Kindly check your email and complete the verification process." );
            }
        });


    });

});


</script>
