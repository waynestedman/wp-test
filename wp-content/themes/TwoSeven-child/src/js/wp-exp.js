$(document).ready(function(){
  $('#ingredientsDesc').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '#ingredientsSlider'
  });
  $('#ingredientsSlider').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '#ingredientsDesc',
    dots: false,
    centerMode: true,
    centerPadding: '60px',
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 5
        }
      },
      {
        breakpoint: 501,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      }
    ]
  }); // ingredients carousel
  $('#testimonialSlider').slick({
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    fade: true,
    speed: 1200,
    cssEase: 'ease-in-out'
  }); // testimonial slider
// Regimen
  // Set intial tab states
  $("#regimenSimple").css("display", "block");
  $("#regimenSimpleBtn").addClass("tabActive");
  $("#simple1").css("display", "block");
  $(".regimenTab").click(function(event) {
    var target = $( event.target );
    $(".regimenTab .regimenTablinks").removeClass("tabActive");
    target.addClass("tabActive");
    $(".regimenTab-subtxt").removeClass("tabActive");
    if (target.is("#regimenSimpleBtn")) {
      $("#regimenCore").css("display", "none");
      $("#regimenSimple").css("display", "block");
      $("#simple1").css("display", "block");
    } else if (target.is("#regimenCoreBtn")) {
      $("#regimenCore").css("display", "block");
      $("#regimenSimple").css("display", "none");
      $("core1").css("display", "block");
    } else {
      console.log("Regimen selection error!");
    } // if else
  }); // Regimen Tab click event
}); // document ready
