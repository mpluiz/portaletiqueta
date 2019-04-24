<?php

/*
  template name: Quem Somos
*/

get_header(); 

// Pegando Conteudo da pagina e aplicando filtro ao content
$post = get_page(get_the_ID());
$content = apply_filters('the_content', $post->post_content);
?>

<section id="quem_somos">
  <div class="container">
    <a class="title-section"><h3>QUEM SOMOS</h3></a>
      <?php echo $content; ?>
  </div>
</section>

<?php get_footer(); ?>
