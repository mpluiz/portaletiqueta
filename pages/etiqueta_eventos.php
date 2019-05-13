<?php

/*
  template name: Etiqueta Eventos
*/

get_header(); 

$post = get_page(get_the_ID());
$content = apply_filters('the_content', $post->post_content);
?>

<section id="etiqueta_eventos">
  <div class="container">
    <div class="title-section"><h3>ETIQUETA EVENTOS</h3></div>
    <div class="clear-fix"></div>
    <?php echo $content; ?>
  </div>
</section>

<?php get_footer(); ?>
