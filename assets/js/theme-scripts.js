$(document).ready(function () {

  /*-- Menu --*/
  $('#open-menu').click(function() {
      $('.menu').toggle('open');
  });

  $('#banner').owlCarousel({
    loop: false,
    margin: 1,
    mouseDrag: true,
    autoplay: true,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
          items: 1,
      },
      768: {
          items: 1,
      },
      1024: {
          items: 1
      }
    }
  });

  $('#expositores').owlCarousel({
    loop: false,
    margin: 25,
    mouseDrag: true,
    autoplay: true,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
          items: 2,
      },
      768: {
          items: 4,
      },
      1024: {
          items: 6
      }
    }
  });

});
