@include('layouts.header')

@include('pages.escorts.dashboard')

@include('modals._escort')

@include('layouts.footer')


<script>

$(document).ready(function(){


    $('#availability').on('change', function() {

        var availability = $("#availability").val();

        if (availability === "Incall") {

            $('#incall-row').hide();
            $('#outcall-row').hide();
            $('#incall-row').show();

        }else if (availability === "Outcall") {

            $('#incall-row').hide();
            $('#outcall-row').hide();
            $('#outcall-row').show();

        }else if (availability === "Both") {

            $('#incall-row').hide();
            $('#outcall-row').hide();
            $('#incall-row').show();
            $('#outcall-row').show();

        }


    });


    $('#escortform').submit(function () {

      event.preventDefault();

      const formData = {
          "user_id" : $("#user_id").val(),
          "gender" : $("#gender").val(),
          "country" : $("#country").val(),
          "state" : $("#state").val(),
          "city" : $("#city").val(),
          "year_of_birth" : $("#year_of_birth").val(),
          "ethnicity" : $("#ethnicity").val(),
          "bust_size" : $("#bust_size").val(),
          "build" : $("#build").val(),
          "weight" : $("#weight").val(),
          "height" : $("#height").val(),
          "smoker" : $("#smoker").val(),
          "sex_orientation" : $("#sex_orientation").val(),
          "availability" : $("#availability").val(),
          "looks" : $("#looks").val(),
          "height" : $("#height").val(),
          "language" : $("#language").val(),
          "incall_1hr" : $("#incall_1hr").val(),
          "incall_1dy" : $("#incall_1dy").val(),
          "incall_1wk" : $("#incall_1wk").val(),
          "incall_overnight" : $("#incall_overnight").val(),
          "outcall_1hr" : $("#outcall_1hr").val(),
          "outcall_1dy" : $("#outcall_1dy").val(),
          "outcall_1wk" : $("#outcall_1wk").val(),
          "outcall_overnight" : $("#outcall_overnight").val(),
          "about" : $("#about").val(),
      }

      console.log(formData);

      const data = JSON.stringify(formData);

      var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://localhost:8080/api/v1/escorts/create",
        "method": "POST",
        "headers": {
          "Content-Type": "application/json"
        },
        "processData": false,
        "data": data
      }

      $.ajax(settings).done(function (response) {
          if (response.message === "Escort created successfully") {
              $('#escort-message').append("Escort details added successfully." );
              location.reload();
          }
      });



    });

});


</script>
