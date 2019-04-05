<?php

/*
  template name: Quem Somos
*/

get_header(); 

// Pegando Conteudo da pagina e aplicando filtro ao content
$post = get_page();
$content = apply_filters('the_content', $post->post_content);

// Pegando a ultima edição da revista etiqueta.
include(dirname(dirname( __FILE__  )).'/query.php');
?>

<section id="quem_somos">
  <div class="container no-padding">
    <a class="title-section"><h3>QUEM SOMOS</h3></a>

      <div class="col-md-12 quem_somos m-top">

        <div class="col-md-9 content">
          <?php echo $content; ?>
        </div>

        <div class="col-md-3 img">
          <img src="<?php echo get_field('img', get_the_ID()); ?>">
        </div>

    </div>
<?php include ('includes/modalImg.php'); ?>
  </div>
</section>

<?php get_footer(); ?>
