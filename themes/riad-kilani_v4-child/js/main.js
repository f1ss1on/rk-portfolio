//Main JS Functions
jQuery(document).ready(function($) {
  /*JS FOR LOADING
  setTimeout(function() {
    $("body").addClass("loaded");
  }, 3000);
  */
  
  //Smooth Scrolling
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top
            },
            1000
          );
          return false;
        }
      }
    });
  });

  //Sticky Header
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
      $("header").addClass("sticky");
    } else {
      $("header").removeClass("sticky");
    }
  });


  //Background Movement with Mouse
  /*$('#about').mousemove(function(e){
    var amountMovedX = (e.pageX * -1 / 6);
    var amountMovedY = (e.pageY * -1 / 6);
    $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
});*/

  //Give Nav some Navbar Action
  $("#primary-menu").addClass("navbar");

  //Adds alternate background color to sections
  $(".content-wrapper section:odd").css("background-color", "#f3f3f3");

  //Add class to mobil social button
  $(".mobile-social").click(function() {
    $(this).toggleClass("open");
  });
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top
            },
            1000
          );
          return false;
        }
      }
    });
  });

  // Run Adaptive background
  $.adaptiveBackground.run({
    parent: "1" //don't make it do anything to the background
  });

  // Run FlexSlider
  $(".flexslider").flexslider({
    controlNav: false,
    animation: "slide",

    start: function(slider) {
      $("body").removeClass("loading");

      //Find the current slide and it's image
      var thisSlide = slider.slides.eq(slider.currentSlide);
      var thisImg = $(thisSlide).find("img");

      //Take the data-ab-color property that AD set and apply it to the parent.
      $("#featured").css({ background: $(thisImg).attr("data-ab-color") });
    },

    before: function(slider) {
      // Find the current slide and it's image
      var animateSlide = slider.slides.eq(slider.animatingTo);
      var thisImg = $(animateSlide).find("img");

      //Take the data-ab-color property that AD set and apply it to the parent.
      $("#featured").css({ background: $(thisImg).attr("data-ab-color") });
    }
  });

  /*
* Function to animate leaving a page
*/
  $.fn.leavePage = function() {
    this.click(function(event) {
      // Don't go to the next page yet.
      event.preventDefault();
      linkLocation = this.href;

      // Fade out this page first.
      $("body").fadeOut(500, function() {
        // Then go to the next page.
        window.location = linkLocation;
      });
    });
  };

  $(".mobile-button").click(function(event) {
    $("#content").toggleClass("mobile-open");
    event.stopPropagation();
  });

  $(document).click(function(event) {
    if (!$(event.target).hasClass('link')) {
      $("#content").removeClass("mobile-open");
    }
  });

  /*
* Call the leavePage function upon link clicks with the "transition" class
*/
  $(".transition").leavePage();
}); //End NoConflict jQuery Wrapper
