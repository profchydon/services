@include('layouts.header')

@include('layouts.search')
@include('pages.escort')
@include('modals._review')

@include('layouts.footer')


<script>

$(document).ready(function(){

    $('#reviewform').submit(function () {

      event.preventDefault();

      const formData = {
        "user_id" : $("#review-user-id").val(),
        "escort_id" : $("#review-escort-id").val(),
        "reviewer" : $("#review-name").val(),
        "message" : $("#review-message").val(),
      }

      const data = JSON.stringify(formData);

      var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://localhost:8080/api/v1/reviews/create",
        "method": "POST",
        "headers": {
          "Content-Type": "application/json",
          "Authorization" : $("#review-user-auth").val(),
        },
        "processData": false,
        "data": data
      }

      $.ajax(settings).done(function (response) {
          if (response.message === "Review successful created") {
              $('#review-success-message').append("Thanks..your review has been added succesfully." );
              location.reload();
          }
      });



    });

});


</script>
