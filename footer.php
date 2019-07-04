<footer>

  <div class="container">

    <div class="col-md-3 logo rede-social">
      <a class="hidden-md hidden-lg" href="/"><img src="<?php template_directory() ?>/assets/images/layout/logo.png"></a>
      <div class="row">
        <a href="https://www.facebook.com/grupoetiquetaoficial" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/grupoetiqueta/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/grupoetiqueta" target="_blank"><i class="fab fa-twitter-square"></i></a>
        <a href="https://www.youtube.com/channel/UCq1ApjWeG5GANkeazymACFQ" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
      <a class="hidden-xs hidden-sm" href="/"><img src="<?php template_directory() ?>/assets/images/layout/logo.png"></a>
    </div>

    <div class="hidden-xs hidden-sm">
    <div class="col-md-3 noticias">
      <p class="title">NOTÍCIAS</p>
      <div class="col-md-12 no-padding">
        <div class="col-md-6 no-padding">
         <a href="/cidade"><p>Cidade</p></a>
         <a href="#"><p>Colunistas e blogs</p></a>
         <a href="/encontro"><p>Encontro</p></a>
         <a href="/esporte"><p>Esporte</p></a>
        </div>
        <div class="col-md-6">
          <a href="/politica"><p>Política</p></a>
          <a href="/social"><p>Social</p></a>
          <a href="/tv-etiqueta"><p>Videos</p></a>
        </div>
      </div>
    </div>

    <div class="col-md-2 canais">
      <p class="title">CANAIS</p>
      <div class="col-md-12 no-padding">
        <a href="/guia-gastronomias"><p>Guia Gastronômico</p></a>
      </div>
    </div>

    <div class="col-md-2 produtos">
      <p class="title">SOLUÇÕES</p>
      <div class="col-md-12 no-padding">
        <a href="/portal-etiqueta"><p>Portal Etiqueta</p></a>
        <a href="/etiqueta-eventos"><p>Etiqueta Eventos</p></a>
        <a href="/tv-etiqueta"><p>TV Etiqueta</p></a>
        <a href="/revista-etiqueta"><p>Revista Etiqueta</p></a>
      </div>
    </div>

    <div class="col-md-2 contato">
      <p class="title">CONTATO</p>
      <div class="col-md-12 no-padding">
        <a href="<?php template_directory() ?>/assets/pdf/midia_kit.pdf" target="_blank"><p>Mídia KIT</p></a>
        <a href="/contato"><p>Fale Conosco</p></a>
        <a href="/anuncie"><p>Anuncie</p></a>
      </div>
    </div>
    </div>

  </div>


  <div class="about">
    <div class="container">

      <div class="col-md-8 col-xs-12 col-sm-12 direitos">
        <?php if (is_author()): ?>
          <p>
            Todos os direitos reservados. Os artigos, opiniões e informações são de responsabilidade dos respectivos autores.
          </p>
        <?php else: ?>
          <p>Copyright Grupo Etiqueta. Todos os direitos reservados. 
             É proibida a reprodução do conteúdo desta página em qualquer meio de comunicação, eletrônico ou impresso, 
             sem autorização escrita do Grupo Etiqueta.
          </p>
        <?php endif; ?>
      </div>
      
      <div class="col-md-4 col-xs-12 row">
        
        <div class="col-md-6 col-xs-6 col-sm-6 conteudo">
          <a target="_blank" href="http://www.bettacommerce.com.br"><img src="<?php template_directory() ?>/assets/images/layout/logo-betta.png"></a>
        </div>
        <div class="col-md-6 col-xs-6 col-sm-6 produzido">
          <a target="_blank" href="/"><img src="<?php template_directory() ?>/assets/images/layout/logo-midia_integrada.png"></a>
        </div>

      </div>

    </div>
  </div>

  <a class="scrolltotop" href="#"><i class="fas fa-angle-up fa-2x"></i></a>
</footer>

</body>
</html>

<script>
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1000){
      $('.scrolltotop').fadeIn(200);
    } else{
      $('.scrolltotop').fadeOut(200);
    }
  });

  $('.scrolltotop').click(function(event) {
    var body = $('html, body');
    body.stop().animate({scrollTop:0}, 500, 'swing');
  });

});
</script>
