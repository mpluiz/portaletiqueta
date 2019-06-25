<?php

include(get_template_directory().'/includes/patrocinadores.php');

// Aplicando os filtros no conteudo do post
$content = apply_filters('the_content', $post->post_content);
// Pegando imagem principal do post
$thumbnail = get_thumbnail($post->ID);


echo '<section id="single-eventos"> 
        <div class="container">
          <div class="col-md-8 m-top content">

            <h2 class="title">'.$post->post_title.'</h2>
            <p>'.get_field('descricao', $post->ID).'</p>

            <div class="compartilhar m-top">
              <span class="facebook"><i class="fab fa-facebook-f"></i></span>
              <span class="twitter"><i class="fab fa-twitter"></i></span>
              <span class="linkedin"><i class="fab fa-linkedin-in"></i></span>
              <span class="hidden-md hidden-lg hidden-sm whatsapp"><i class="fab fa-whatsapp"></i></span>
              <span class="hidden-sm hidden-xs whatsapp" id="web"><i class="fab fa-whatsapp"></i></span>
            </div>';

            if (get_field('jornalista', $post->ID) != ''){
              echo '<label class="jornalista"><i class="fas fa-user"></i> '.get_field('jornalista', $post->ID).'</label>';
            }
            if (get_field('fotografo', $post->ID) != ''){
              echo '<label class="fotografo"><i class="fas fa-camera"></i> '.get_field('fotografo', $post->ID).'</label>';
            } 

            echo '<label class="horario"><i class="far fa-clock"></i> '.get_the_date('j F, Y g:i a', $post->ID).'</label>';

            echo $content ;

            echo '
            </br>
            <p><strong>Data: </strong>'.get_field('data', $post->ID).'  <i class="fas fa-calendar"></i></p>
            <p><strong>Local: </strong>'.get_field('local', $post->ID).'  <i class="fas fa-location-arrow"></i></p>
            <p><strong>Cidade: </strong>'.get_field('cidade', $post->ID).'  <i class="fas fa-map-marker"></i></p>
          </div>';

          include(get_template_directory().'/includes/publicidade_interna.php');
          include(get_template_directory().'/includes/gallery/gallery.php');

echo    '</div>
      </section>';
?>

<script>
$(function() {
  $('.facebook').click(function() {
    window.open("https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>", "facebook", "height=500,width=500");
  });

  $('.twitter').click(function() {
    window.open("https://twitter.com/home?status=<?php the_permalink() ?>", "twitter", "height=500,width=500");
  });

  $('.linkedin').click(function() {
    window.open("https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink() ?>", "linkedin", "height=500,width=500");
  });

  $('#web').click(function() {
    const link = '<?php the_permalink() ?>';
    window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(link), "_blank");
  });

  $('.whatsapp').click(function() {
    window.open("whatsapp://send?text=<?php the_permalink() ?>");
  });
});
</script>
