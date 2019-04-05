$(document).ready(function(){
  $('.ultimas_noticias, .mais_populares, .social, .eventos, .radar, .banner').owlCarousel({                                                                                                              
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    dots: false
  });     

  $('.destaque, .gastronomia').owlCarousel({
    items:4,
    margin:10,
    responsiveClass:true,
    dots: false,
    nav: true,
    navText: [
      "<",
      ">"
    ]
  });

  $('.colunistas').owlCarousel({
    items:3,
    margin:10,
    responsiveClass:true,
    dots: false,
    nav: true,
    navText: [
      "<",
      ">"
    ]
  });
});
