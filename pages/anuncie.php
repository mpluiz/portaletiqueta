<?php

/*
  Template Name: Anuncie
*/

get_header(); 

?>

<script src="<?php template_directory(); ?>/pages/includes/js/inputmask.js"></script>
<script src="<?php template_directory()?>/pages/includes/js/anuncie.js"></script>

<section id="anuncie">
  <div class="container">
    <a class="title-section"><h3>ANUNCIE</h3></a>
    <div class="clearfix"></div>
    <form class="col-md-6" id="anuncieForm" method="POST" onsubmit="return false">
      <p class="bg-success"></p>
      <p class="bg-danger"></p>
      <label class="msg-success" id="message"></label>
      <input type="text" class="form-control" placeholder="Nome" id="nome" required>
      <input type="text" class="form-control m-top" placeholder="Nome da empresa/CNPJ" id="cnpj" required>
      <input type="email" class="form-control m-top" id="email" placeholder="E-mail" required>
      <input type="text" class="form-control m-top" id="telefone" placeholder="Telefone" required>
      <div class="form-group m-top">  
        <select class="form-control" id="select">
          <option value="" disabled selected>Mídias</option>
          <option value="1">Revista Etiqueta</option>
          <option value="2">TV Etiqueta</option>
          <option value="3">Portal Etiqueta</option>
          <option value="4">Eventos Etiqueta</option>
        </select>
      </div>
      <textarea class="form-control m-top" placeholder="Mensagem" rows="4" id="mensagem" required></textarea>
      <input id="contatoEnviar" class="pull-right m-top btn" type="submit" name="enviar" value="Enviar" />
    </form>
  </div> <!-- .container -->
</section>
<?php

get_footer();

?>
