<?php

// Pegando galeria de imagens do post relacionado
$post_gallery = (get_field('galeria', $post->ID));

if ($post_gallery):
  $gallery = get_post_gallery_images($post_gallery[0]);

?>

<div class="col-md-12 col-xs-12 m-top"><div class="border-noticia"></div></div>

<div id="gallery">
  <?php
    foreach ($gallery as $imagem){
      echo '<div class="col-md-3 col-xs-12 m-top">';
        echo '<a class="open" href="'.$imagem.'"><img class="img-gallery" src="'.$imagem.'"></a>';
      echo '</div>';
    }
  ?>
</div>

<div class="col-md-12 m-top"><button class="btn col-md-6 col-md-offset-3 col-xs-12" id="loadmore" hidden>CARREGAR MAIS</button></div>

<?php endif ?>

<script>
$(function () {                                                                                                                       
  // GALERIA
  var $gallery = $('#gallery').gallerie({
    thumbboxTriggerWidth: 0.5,
    thumbboxSpeed: 0,
    imageEvent: 'click',
    elem: 'a.open',
    wrapAround: true
  });

  // CARREGAR MAIS
  console.log($('.img-gallery'));
  $('.img-gallery').slice(0, 4).show();

  if ($('.img-gallery').length > 4) {
    $('#loadmore').attr('hidden', false);
  }

  $("#loadmore").on('click', function (e) {                                                                                                           
    e.preventDefault();                                                                                                                               
    $(".img-gallery:hidden").slice(0, 4).slideDown();                                                                                                        
    if ($(".img-gallery:hidden").length == 0) {                                                                                                              
      $("#load").fadeOut('slow');                                                                                                                     
    }                                                                                                                                                 
  });                                                                                                                                                 
}); 
</script>
