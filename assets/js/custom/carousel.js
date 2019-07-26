$(document).ready(function () {
  $('.mais_populares, .social, .eventos, .radar, .banner').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: false
  });

  $('.gastronomias, .destaque').owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      567: {
        items: 2,
      },

      1024: {
        items: 4,
      }
    },
    beforeInit: function (elem) {
      random(elem);
    },
    navText: [
      "<",
      ">"
    ]
  });

  $('.sub-social').owlCarousel({
    items: 4,
    margin: 10,
    responsiveClass: true,
    dots: false,
    nav: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
      },
      567: {
        items: 2,
      },

      1024: {
        items: 4,
      }
    },
    navText: [
      "<",
      ">"
    ]
  });

  $('.patrocinadores').owlCarousel({
    items: 8,
    margin: 10,
    loop: true, 
    autoplay: true,
    autoplayTimeout: 1000,
    responsiveClass: true,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 3,
      },
      567: {
        items: 6,
      },

      1024: {
        items: 8,
      }
    },
  });

  $('.colunistas').owlCarousel({
    items: 3,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1000,
    responsiveClass: true,
    dots: false,
    nav: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      567: {
        items: 2,
      },

      1024: {
        items: 3,

      }
    },
    beforeInit: function (elem) {
      random(elem);
    },
    navText: [
      "<",
      ">"
    ]
  });
});
