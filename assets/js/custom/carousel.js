$(document).ready(function () {
  $('.mais_populares, .social, .eventos, .radar').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: false
  });

  $('.destaque, .gastronomia').owlCarousel({
    items: 4,
    margin: 10,
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
    responsiveClass: true,
    dots: false,
    nav: true
  });

  $('.colunistas').owlCarousel({
    items: 3,
    margin: 10,
    responsiveClass: true,
    dots: false,
    nav: true,
    navText: [
      "<",
      ">"
    ]
  });
});
