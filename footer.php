<footer>

  <div class="container">

    <div class="col-md-3 logo rede-social">
      <a href="/"><img src="<?php template_directory() ?>/assets/images/layout/logo.png"></a>
      <div class="row">
        <a href="https://www.facebook.com/RevistaEtiquetaOficial" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/revistaetiqueta/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/etiquetaoficial" target="_blank"><i class="fab fa-twitter-square"></i></a>
        <a href="https://www.youtube.com/channel/UCq1ApjWeG5GANkeazymACFQ" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="col-md-3 noticias">
      <p class="title">NOTÍCIAS</p>
      <div class="col-md-12 no-padding">
        <div class="col-md-6 no-padding">
         <a href="/noticias/cidade"><p>Cidade</p></a>
         <a href="#"><p>Colunistas e blogs</p></a>
         <a href="/noticias/encontro"><p>Encontro</p></a>
         <a href="/noticias/esporte"><p>Esporte</p></a>
        </div>
        <div class="col-md-6">
          <a href="/noticias/franca-e-regiao"><p>Franca e Região</p></a>
          <a href="/noticias/politica"><p>Política</p></a>
          <a href="/noticias/social"><p>Social</p></a>
          <a href="/tv-etiqueta"><p>Videos</p></a>
        </div>
      </div>
    </div>

    <div class="col-md-2 canais">
      <p class="title">CANAIS</p>
      <div class="col-md-12 no-padding">
        <!-- <a href="/guias/classificados"><p>Classificados</p></a>
        <a href="/guias/empregos"><p>Empregos</p></a>
        <a href="/guias/eventos"><p>Guia Eventos</p></a> -->
        <a href="/guia/gastronomia"><p>Guia Gastronômico</p></a>
      </div>
    </div>

    <div class="col-md-2 produtos">
      <p class="title">PRODUTOS</p>
      <div class="col-md-12 no-padding">
        <a href="#"><p>Etiqueta Eventos</p></a>
        <a href="/eventos"><p>Portal Etiqueta</p></a>
        <a href="#"><p>Revista Etiqueta</p></a>
        <a href="/"><p>TV ETIQUETA</p></a>
      </div>
    </div>

    <div class="col-md-2 contato">
      <p class="title">CONTATO</p>
      <div class="col-md-12 no-padding">
        <a href="#"><p>Fale Conosco</p></a>
        <a href="#"><p>Institucional</p></a>
        <a href="#"><p>Mídia Kit</p></a>
      </div>
    </div>

  </div>


  <div class="about">
    <div class="container">

      <div class="col-md-8 direitos row">
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
      
      <div class="col-md-4 pull-right">
        
        <div class="col-md-6 conteudo">
          <a target="_blank" href="http://www.bettacommerce.com.br"><img src="<?php template_directory() ?>/assets/images/layout/logo-betta.png"></a>
        </div>
        <div class="col-md-6 produzido">
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
