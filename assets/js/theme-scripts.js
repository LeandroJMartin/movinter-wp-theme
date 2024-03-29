$(document).ready(function () {
  /*-- Menu --*/
  $("#open_menu").click(function () {
    $("#menu").toggle("open");
    $(this).toggleClass("on");
  });

  $("#banner").owlCarousel({
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
        items: 1,
      },
    },
  });

  $("#expositores").owlCarousel({
    loop: false,
    mouseDrag: true,
    autoplay: true,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
        margin: 5,
      },
      768: {
        items: 4,
        margin: 15,
      },
      1024: {
        items: 6,
        margin: 25,
      },
    },
  });

  $(".open_logos").on("click", function () {
    let obj = $(this).data("type");
    $(`.${obj}`).css({ display: "block" });
  });

  function redirect_section() {
    let position = $("#form").offset().top;

    return $("html, body").animate({ scrollTop: position }, 600);
  }
  $(".btn-form").click(redirect_section);

  $(".open_modal").on("click", function () {
    let postname = $(this).attr("data-type");

    $("#" + postname).css({ display: "block" });
  });

  $(".close-modal").click(function () {
    $(".modal").css({ display: "none" });
  });

  const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

  // GET STATUS OF FORM HOME
  (() => {
    const form = document.querySelector("#form form");

    if (form) {
      const observer = new MutationObserver(function (mutations) {
        mutations.forEach(async function (mutation) {
          if (mutation.attributeName === "data-status") {
            const newDataValue = mutation.target?.dataset.status;

            if (newDataValue === "sent") {
              const hrefOrigin = window.location.origin;

              await sleep(1000);

              window.location.replace(`${hrefOrigin}/?form=success`);
            }
          }
        });
      });

      observer.observe(form, {
        attributes: true,
      });
    }
  })();

  $(".wpcf7-select option:first-child").text("Eu sou");
});
