"use strict";

// ------------------------------------
// HELPER FUNCTIONS TO TEST FOR SPECIFIC DISPLAY SIZE (RESPONSIVE HELPERS)
// ------------------------------------

function is_display_type(display_type) {
  return (
    $(".display-type").css("content") == display_type ||
    $(".display-type").css("content") == '"' + display_type + '"'
  );
}
function not_display_type(display_type) {
  return (
    $(".display-type").css("content") != display_type &&
    $(".display-type").css("content") != '"' + display_type + '"'
  );
}
function os_init_sub_menus() {
  // INIT MENU TO ACTIVATE ON HOVER
  var menu_timer;
  $(".menu-activated-on-hover").on(
    "mouseenter",
    "ul.main-menu > li.has-sub-menu",
    function() {
      var $elem = $(this);
      clearTimeout(menu_timer);
      $elem
        .closest("ul")
        .addClass("has-active")
        .find("> li")
        .removeClass("active");
      $elem.addClass("active");
    }
  );

  $(".menu-activated-on-hover").on(
    "mouseleave",
    "ul.main-menu > li.has-sub-menu",
    function() {
      var $elem = $(this);
      menu_timer = setTimeout(function() {
        $elem
          .removeClass("active")
          .closest("ul")
          .removeClass("has-active");
      }, 30);
    }
  );

  // INIT MENU TO ACTIVATE ON CLICK
  $(".menu-activated-on-click").on("click", "li.has-sub-menu > a", function(
    event
  ) {
    var $elem = $(this).closest("li");
    if ($elem.hasClass("active")) {
      $elem.removeClass("active");
    } else {
      $elem
        .closest("ul")
        .find("li.active")
        .removeClass("active");
      $elem.addClass("active");
    }
    return false;
  });
}

$(function() {
  // INIT MOBILE MENU TRIGGER BUTTON
  $(".mobile-menu-trigger").on("click", function() {
    $(".menu-mobile .menu-and-user").slideToggle(200, "swing");
    return false;
  });

  os_init_sub_menus();

  // #12. CONTENT SIDE PANEL TOGGLER

  $(".content-panel-toggler, .content-panel-close, .content-panel-open").on(
    "click",
    function() {
      $(".all-wrapper").toggleClass("content-panel-active");
    }
  );

  // #23. Autosuggest Search
  $(".autosuggest-search-activator").on("click", function() {
    var search_offset = $(this).offset();
    // If input field is in the activator - show on top of it
    if ($(this).find('input[type="text"]')) {
      search_offset = $(this)
        .find('input[type="text"]')
        .offset();
    }
    var search_field_position_left = search_offset.left;
    var search_field_position_top = search_offset.top;
    $(".search-with-suggestions-w")
      .css("left", search_field_position_left)
      .css("top", search_field_position_top)
      .addClass("over-search-field")
      .fadeIn(300)
      .find(".search-suggest-input")
      .focus();
    return false;
  });

  $(".search-suggest-input").on("keydown", function(e) {
    // Close if ESC was pressed
    if (e.which == 27) {
      $(".search-with-suggestions-w").fadeOut();
    }

    // Backspace/Delete pressed
    if (e.which == 46 || e.which == 8) {
      // This is a test code, remove when in real life usage
      $(".search-with-suggestions-w .ssg-item:last-child").show();
      $(".search-with-suggestions-w .ssg-items.ssg-items-blocks").show();
      $(".ssg-nothing-found").hide();
    }

    // Imitate item removal on search, test code
    if (e.which != 27 && e.which != 8 && e.which != 46) {
      // This is a test code, remove when in real life usage
      $(".search-with-suggestions-w .ssg-item:last-child").hide();
      $(".search-with-suggestions-w .ssg-items.ssg-items-blocks").hide();
      $(".ssg-nothing-found").show();
    }
  });

  $(".close-search-suggestions").on("click", function() {
    $(".search-with-suggestions-w").fadeOut();
    return false;
  });
});
