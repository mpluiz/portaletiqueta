<?php

// Pegando galeria de imagens do post relacionado
$post_gallery = (get_field('galeria', $post->ID));

if ($post_gallery):
  $gallery = get_post_gallery_images($post_gallery[0]);

?>

<div class="col-md-12 m-top"><div class="border-noticia"></div></div>

<div id="gallery">
  <?php
    foreach ($gallery as $imagem){
      echo '<div class="col-md-3 m-top">';
        echo '<a class="open" href="'.$imagem.'"><img class="thumb" src="'.$imagem.'"></a>';
      echo '</div>';
    }
  ?>
</div>

<div class="col-md-12 m-top"><button class="btn col-md-6" id="loadmore" hidden>CARREGAR MAIS</button></div>

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
  $(".thumb").slice(0, 8).show();                                                                                                                      

  if ($('.thumb').length > 8) {
    $('#loadmore').attr('hidden', false);
  }

  $("#loadmore").on('click', function (e) {                                                                                                           
    e.preventDefault();                                                                                                                               
    $(".thumb:hidden").slice(0, 4).slideDown();                                                                                                        
    if ($(".thumb:hidden").length == 0) {                                                                                                              
      $("#load").fadeOut('slow');                                                                                                                     
    }                                                                                                                                                 
  });                                                                                                                                                 
}); 
</script>
