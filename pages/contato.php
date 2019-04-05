<?php

/*
  template name: Contato
*/

get_header(); 
?>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLFKw9-00oPGwTDCMvu-QrmQ-e-f0qLoA&callback=initMap">
</script>

<script src="<?php template_directory()?>/assets/js/custom/inputmask.js"></script>
<script src="<?php template_directory()?>/assets/js/custom/maps.js"></script>
<script src="<?php template_directory()?>/assets/js/custom/contato.js"></script>

<section id="contato">
  <div class="container">
    <a class="title-section"><h3>CONTATO</h3></a>

    <!-- DIV DO GOOGLE MAPS -->
    <div id="map"></div>
    
    <form class="col-md-6" id="contatoForm" method="POST" onsubmit="return false">
      <p class="bg-success"></p>
      <p class="bg-danger"></p>
      <input type="text" class="form-control" placeholder="Nome" id="nome" required>
      <input type="text" class="form-control m-top" placeholder="Nome da empresa/CNPJ" id="cnpj" required>
      <input type="email" class="form-control m-top" id="email" placeholder="E-mail" required>
      <input type="text" class="form-control m-top" id="telefone" placeholder="Telefone" required>
      <textarea class="form-control m-top" placeholder="Mensagem" rows="4" id="mensagem" required></textarea>
      <input id="contatoEnviar" class="pull-right m-top btn" type="submit" name="enviar" value="Enviar" />
    </form>
  </div> <!-- .container -->
</section>

<?php
get_footer();
/* key: AIzaSyDxXFGnvq23L3t8DnPNX9fRkuc6OXkWKIc */
?>
