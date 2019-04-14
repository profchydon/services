function goFeature() {
  var token = $('input[name="_token"]').attr("value");
  var email = $("#email").val();
  var escort_id = $("#escort_id").val();
  var user_id = $("#user_id").val();
  var api_key = $("#api_key").val();
  var duration = $("#duration :selected").val();

  if (duration == "7") {
    amount = 5000;
  } else if (duration == "14") {
    amount = 9000;
  } else if (duration == "21") {
    amount = 13000;
  } else if (duration == "31") {
    amount = 17000;
  }

  var handler = PaystackPop.setup({
    key: "pk_test_8d18f652ec39f7839f86277eda11281d04238e78",
    email: email,
    amount: amount + "00",
    ref: "XCORT" + Math.floor(Math.random() * 1000000 + 1),
    metadata: {
      custom_fields: [
        {
          display_name: "Go Feature",
          variable_name: "Go Feature",
          value: "2"
        }
      ]
    },
    callback: function(response) {
      verifyTransaction(response.reference);

      const formData = {
        escort_id: escort_id,
        user_id: user_id,
        duration: duration,
        amount: amount,
        reference_id: response.reference,
        type: "Feature"
      };

      const data = JSON.stringify(formData);

      var settings = {
        async: true,
        crossDomain: true,
        url: $("#base_url").val() + "/api/v1/features/create",
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: api_key
        },
        processData: false,
        data: data
      };

      $.ajax(settings)
        .done(function(response) {
          if (response.message === "Feature successfully created") {
              swal("Successful!", "Your Go Feature Subscription was successful", "success");
              setTimeout("window.location='/escort/transactions/all'", 1000);
          }
        })
        .fail(function(data) {
          console.log("error encountered");
        });
    }
  });
  handler.openIframe();
}

function goSilver() {
  var token = $('input[name="_token"]').attr("value");
  var email = $("#email").val();
  var escort_id = $("#escort_id").val();
  var user_id = $("#user_id").val();
  var api_key = $("#api_key").val();
  var duration = $("#silver_duration :selected").val();

  if (duration == "7") {
    amount = 3000;
  } else if (duration == "14") {
    amount = 5000;
  } else if (duration == "21") {
    amount = 14000;
  } else if (duration == "31") {
    amount = 18000;
  }

  var handler = PaystackPop.setup({
    key: "pk_test_8d18f652ec39f7839f86277eda11281d04238e78",
    email: email,
    amount: amount + "00",
    ref: "XCORT" + Math.floor(Math.random() * 1000000 + 1),
    metadata: {
      custom_fields: [
        {
          display_name: "Go Silver",
          variable_name: "Go Silver",
          value: "2"
        }
      ]
    },
    callback: function(response) {
      verifyTransaction(response.reference);

      const formData = {
        escort_id: escort_id,
        user_id: user_id,
        duration: duration,
        amount: amount,
        reference_id: response.reference,
        type: "Go Silver"
      };

      const data = JSON.stringify(formData);

      var settings = {
        async: true,
        crossDomain: true,
        url: $("#base_url").val() + "/api/v1/subscription/create",
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: api_key
        },
        processData: false,
        data: data
      };

      $.ajax(settings)
        .done(function(response) {
          if (response.message === "Subscription successfully created") {
              swal("Successful!", "Your Go Silver Subscription was successful", "success");
              setTimeout("window.location='/escort/transactions/all'", 1000);
          }
        })
        .fail(function(data) {
          console.log("error encountered");
        });
    }
  });
  handler.openIframe();
}

function goGold() {
  var token = $('input[name="_token"]').attr("value");
  var email = $("#email").val();
  var escort_id = $("#escort_id").val();
  var user_id = $("#user_id").val();
  var api_key = $("#api_key").val();
  var duration = $("#gold_duration :selected").val();

  if (duration == "7") {
    amount = 5000;
  } else if (duration == "14") {
    amount = 9000;
  } else if (duration == "21") {
    amount = 13000;
  } else if (duration == "31") {
    amount = 17000;
  }

  var handler = PaystackPop.setup({
    key: "pk_test_8d18f652ec39f7839f86277eda11281d04238e78",
    email: email,
    amount: amount + "00",
    ref: "XCORT" + Math.floor(Math.random() * 1000000 + 1),
    metadata: {
      custom_fields: [
        {
          display_name: "Go Gold",
          variable_name: "Go Gold",
          value: "2"
        }
      ]
    },
    callback: function(response) {
      verifyTransaction(response.reference);

      const formData = {
        escort_id: escort_id,
        user_id: user_id,
        duration: duration,
        amount: amount,
        reference_id: response.reference,
        type: "Go Gold"
      };

      const data = JSON.stringify(formData);

      var settings = {
        async: true,
        crossDomain: true,
        url: $("#base_url").val() + "/api/v1/subscription/create",
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: api_key
        },
        processData: false,
        data: data
      };

      $.ajax(settings)
        .done(function(response) {
          if (response.message === "Subscription successfully created") {
              swal("Successful!", "Your Go Gold Subscription was successful", "success");
              setTimeout("window.location='/escort/transactions/all'", 1000);
          }
        })
        .fail(function(data) {
          console.log("error encountered");
        });
    }
  });
  handler.openIframe();
}

function goPlatinum() {
  var token = $('input[name="_token"]').attr("value");
  var email = $("#email").val();
  var escort_id = $("#escort_id").val();
  var user_id = $("#user_id").val();
  var api_key = $("#api_key").val();
  var duration = $("#platinum_duration :selected").val();

  if (duration == "7") {
    amount = 10000;
  } else if (duration == "14") {
    amount = 19000;
  } else if (duration == "21") {
    amount = 28000;
  } else if (duration == "31") {
    amount = 37000;
  }

  var handler = PaystackPop.setup({
    key: "pk_test_8d18f652ec39f7839f86277eda11281d04238e78",
    email: email,
    amount: amount + "00",
    ref: "XCORT" + Math.floor(Math.random() * 1000000 + 1),
    metadata: {
      custom_fields: [
        {
          display_name: "Go Platinum",
          variable_name: "Go Platinum",
          value: "2"
        }
      ]
    },
    callback: function(response) {
      verifyTransaction(response.reference);

      const formData = {
        escort_id: escort_id,
        user_id: user_id,
        duration: duration,
        amount: amount,
        reference_id: response.reference,
        type: "Go Platinum"
      };

      const data = JSON.stringify(formData);

      var settings = {
        async: true,
        crossDomain: true,
        url: $("#base_url").val() + "/api/v1/subscription/create",
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: api_key
        },
        processData: false,
        data: data
      };

      $.ajax(settings)
        .done(function(response) {
          if (response.message === "Subscription successfully created") {
              swal("Successful!", "Your Go Platinum Subscription was successful", "success");
              setTimeout("window.location='/escort/transactions/all'", 1000);
          }
        })
        .fail(function(data) {
          console.log("error encountered");
        });
    }
  });
  handler.openIframe();
}

function verifyTransaction(ref) {
  var url = "https://api.paystack.co/transaction/verify/" + ref;

  fetch(url, {
    method: "GET", // or 'PUT'
    headers: {
      "Content-Type": "application/json",
      Authorization: "Bearer sk_test_6a14c95ada2d325d9e5a1f325de84dc9a96613e8"
    }
  })
    .then(res => res.json())
    .then(response => response.data.authorization.authorization_code)
    .catch(error => console.error("Error:", error));
}
