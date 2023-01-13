$(document).ready(function () {

  /*-- Menu --*/
  $('#open_menu').click(function() {
      $('#menu').toggle('open');
      $(this).toggleClass('on');
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
    mouseDrag: true,
    autoplay: true,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
          items: 2,
          margin: 5
      },
      768: {
          items: 4,
          margin: 15
      },
      1024: {
          items: 6,
          margin: 25
      }
    }
  });

});
