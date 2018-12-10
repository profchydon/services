@extends('layouts.master')

@section('content')
@include('layouts.search')

@include('layouts.feature')

@include('pages.vip_escorts')

@endsection


<script type="text/javascript">


$(document).ready(function(){

    $('#login-form').submit(function () {
        event.preventDefault();

        const formData = {
            "username" : $("#username").val(),
            "password" : $("#password").val(),
        }

        const data = JSON.stringify(formData);

        var settings = {
          "async": true,
          "crossDomain": true,
          "url": "http://localhost:8080/api/v1/auth/login",
          "method": "POST",
          "headers": {
            "Content-Type": "application/json"
          },
          "processData": false,
          "data": data
        }

        $.ajax(settings).done(function (response) {
            if (response.message === "Incorrect login details") {
                $('#login-error-message').append("");
                $('#login-error-message').append(response.message);
                console.log(response);
            }else if (response.message === "User's account has not been activated") {
                console.log(response);
                $('#login-success-message').append("");
                $('#login-success-message').append("Your account has not been activated. You will be redirected to the account activation page shortly");
                setTimeout("window.location='activation'", 3000);
                var redirect = "activation/"+response.data;
                $.ajax({
                    url: redirect,
                    type: "GET",
                  });
            }else if (response.message === "Ok") {
                console.log(response);
                setTimeout("window.location='escort'", 1000);
            }
        });


    });

});


</script>
