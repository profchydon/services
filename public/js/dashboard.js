$(document).ready(function() {
  //State and City Stuff
  $.ajax({
    url: "/js/locations.json",
    type: "GET",
    dataType: "json"
  }).done(function(error) {
    mydata = error;
    for (var state in mydata.States) {
      $("#state").append(
        '<option value="' + String(state) + '">' + String(state) + " </option>"
      );
      $("#edit-state").append(
        '<option value="' + String(state) + '">' + String(state) + " </option>"
      );
    }
  });
  $("#state").change(function(event) {
    var selectedState = $(this).val();
    $("#city").empty();
    //Get cities for selectedState
    var cities = mydata.States[String(selectedState)];
    $("#city").append(
      '<option value="" selected disabled>Please select</option>'
    );

    for (var i = 0; i < cities.length; i++) {
      $("#city").append(
        '<option value="' +
          String(cities[i]) +
          '">' +
          String(cities[i]) +
          " </option>"
      );
    }
  });
  $("#edit-state").change(function(event) {
    var selectedState = $(this).val();
    $("#edit-city").empty();
    //Get cities for selectedState
    var cities = mydata.States[String(selectedState)];
    $("#edit-city").append(
      '<option value="" selected disabled>Please select</option>'
    );

    for (var i = 0; i < cities.length; i++) {
      $("#edit-city").append(
        '<option value="' +
          String(cities[i]) +
          '">' +
          String(cities[i]) +
          " </option>"
      );
    }
  });

  $("#animated-thumbnails").lightGallery({
    thumbnail: true
  });
  $("#video-gallery").lightGallery({
    videojs: true
  });

  $("#partner-slide").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items: 6,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3],
    itemsMobile: [479, 2]
  });

  $("#availability").on("change", function() {
    var availability = $("#availability").val();

    if (availability === "Incall") {
      $("#incall-row").hide();
      $("#outcall-row").hide();
      $("#incall-row").show();
    } else if (availability === "Outcall") {
      $("#incall-row").hide();
      $("#outcall-row").hide();
      $("#outcall-row").show();
    } else if (availability === "Both") {
      $("#incall-row").hide();
      $("#outcall-row").hide();
      $("#incall-row").show();
      $("#outcall-row").show();
    }
  });

  $("#edit-availability").on("change", function() {
    var editavailability = $("#edit-availability").val();

    if (editavailability === "Incall") {
      $("#edit-incall-row").hide();
      $("#edit-outcall-row").hide();
      $("#edit-incall-row").show();
    } else if (editavailability === "Outcall") {
      $("#edit-incall-row").hide();
      $("#edit-outcall-row").hide();
      $("#edit-outcall-row").show();
    } else if (editavailability === "Both") {
      $("#edit-incall-row").hide();
      $("#edit-outcall-row").hide();
      $("#edit-incall-row").show();
      $("#edit-outcall-row").show();
    }
  });

  $("#escortform").submit(function() {
    event.preventDefault();

    const formData = {
      user_id: $("#user_id").val(),
      gender: $("#gender").val(),
      country: $("#country").val(),
      state: $("#state").val(),
      city: $("#city").val(),
      year_of_birth: $("#year_of_birth").val(),
      ethnicity: $("#ethnicity").val(),
      bust_size: $("#bust_size").val(),
      build: $("#build").val(),
      weight: $("#weight").val(),
      height: $("#height").val(),
      smoker: $("#smoker").val(),
      sex_orientation: $("#sex_orientation").val(),
      availability: $("#availability").val(),
      looks: $("#looks").val(),
      height: $("#height").val(),
      language: $("#language").val(),
      incall_1hr: $("#incall_1hr").val(),
      incall_1dy: $("#incall_1dy").val(),
      incall_1wk: $("#incall_1wk").val(),
      incall_overnight: $("#incall_overnight").val(),
      outcall_1hr: $("#outcall_1hr").val(),
      outcall_1dy: $("#outcall_1dy").val(),
      outcall_1wk: $("#outcall_1wk").val(),
      outcall_overnight: $("#outcall_overnight").val(),
      about: $("#about").val()
    };

    console.log(formData);

    const data = JSON.stringify(formData);

    var settings = {
      async: true,
      crossDomain: true,
      url: $("#base_url").val() + "/api/v1/escorts/create",
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      processData: false,
      data: data
    };

    $.ajax(settings).done(function(response) {
      if (response.message === "Escort created successfully") {
        $("#escort-message").append("Escort details added successfully.");
        location.reload();
      }
    });
  });

  $("#escorteditform").submit(function() {
    event.preventDefault();

    const formData = {
      user_id: $("#edit-user_id").val(),
      gender: $("#edit-gender").val(),
      country: $("#edit-country").val(),
      state: $("#edit-state").val(),
      city: $("#edit-city").val(),
      year_of_birth: $("#edit-year_of_birth").val(),
      ethnicity: $("#edit-ethnicity").val(),
      bust_size: $("#edit-bust_size").val(),
      build: $("#edit-build").val(),
      weight: $("#edit-weight").val(),
      height: $("#edit-height").val(),
      smoker: $("#edit-smoker").val(),
      sex_orientation: $("#edit-sex_orientation").val(),
      availability: $("#edit-availability").val(),
      looks: $("#edit-looks").val(),
      height: $("#edit-height").val(),
      language: $("#edit-language").val(),
      incall_1hr: $("#edit-incall_1hr").val(),
      incall_1dy: $("#edit-incall_1dy").val(),
      incall_1wk: $("#edit-incall_1wk").val(),
      incall_overnight: $("#edit-incall_overnight").val(),
      outcall_1hr: $("#edit-outcall_1hr").val(),
      outcall_1dy: $("#edit-outcall_1dy").val(),
      outcall_1wk: $("#edit-outcall_1wk").val(),
      outcall_overnight: $("#edit-outcall_overnight").val(),
      about: $("#edit-about").val()
    };

    console.log(formData);

    const data = JSON.stringify(formData);

    var settings = {
      async: true,
      crossDomain: true,
      url: $("#base_url").val() + "/api/v1/escorts/update",
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: $("#edit-auth").val()
      },
      processData: false,
      data: data
    };

    $.ajax(settings).done(function(response) {
      if (response.message === "Update was successful") {
        location.reload();
        $("#escorts-edit").modal("toggle");
        swal("Successful!", "Your update was successful", "success");
      }
    });
  });

  $("#usereditform").submit(function() {
    event.preventDefault();

    const formData = {
      name: $("#edit-name").val(),
      phone: $("#edit-phone").val(),
      email: $("#edit-email").val()
    };

    console.log(formData);

    const data = JSON.stringify(formData);

    var settings = {
      async: true,
      crossDomain: true,
      url: $("#base_url").val() + "/api/v1/users/update",
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: $("#edit-auth").val()
      },
      processData: false,
      data: data
    };

    $.ajax(settings).done(function(response) {
      if (response.message === "Email address already exist") {
        $("#edit-email-error-message").empty();
        $("#edit-phone-error-message").empty();
        $("#edit-email-error-message").append("Email address already exist");
        swal("Error!", "Email address already exist", "error");
      } else if (response.message === "Phone number already exist") {
        $("#edit-email-error-message").empty();
        $("#edit-phone-error-message").empty();
        $("#edit-phone-error-message").append("Phone number already exist");
        swal("Error!", "Phone number already exist", "error");
      } else if (response.message === "User updated successfully") {
        $("#edit-escort-message").append("User updated successfully.");
        location.reload();
        $("#user-edit").modal("toggle");
        swal("Successful!", "Your update was successful", "success");
      }
    });
  });

  $("#priceeditform").submit(function() {
    event.preventDefault();

    const formData = {
      user_id: $("#price-edit-user_id").val(),
      incall_1hr: $("#price-edit-incall_1hr").val(),
      incall_1dy: $("#price-edit-incall_1dy").val(),
      incall_1wk: $("#price-edit-incall_1wk").val(),
      incall_overnight: $("#price-edit-incall_overnight").val(),
      outcall_1hr: $("#price-edit-outcall_1hr").val(),
      outcall_1dy: $("#price-edit-outcall_1dy").val(),
      outcall_1wk: $("#price-edit-outcall_1wk").val(),
      outcall_overnight: $("#price-edit-outcall_overnight").val()
    };

    console.log(formData);

    const data = JSON.stringify(formData);

    var settings = {
      async: true,
      crossDomain: true,
      url: $("#base_url").val() + "/api/v1/escorts/update",
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: $("#price-edit-auth").val()
      },
      processData: false,
      data: data
    };

    $.ajax(settings).done(function(response) {
      if (response.message === "Update was successful") {
        location.reload();
        $("#price-update").modal("toggle");
        swal("Successful!", "Your update was successful", "success");
      }
    });
  });
});
