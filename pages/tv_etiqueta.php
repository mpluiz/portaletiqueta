<?php

/*
  template name: Tv Etiqueta
*/

get_header(); 
include(dirname(dirname( __FILE__  )).'/query.php');
?>

<section id="tv_etiqueta">
  <div class="container">
    <div class="title-section"><h3>TV ETIQUETA</h3></div>
    <div class="clear-fix"></div>
    <?php
      echo '<p class="post-description">'.get_field('descricao', get_the_ID()).'</p>';
      foreach ($videos as $video){
        $id = $video->ID;
        echo '
          <div class="col-md-4 item"> 
            <iframe id="video-principal" width="100%" height="197px" src="https://www.youtube.com/embed/'.get_field('link_do_video', $video->ID).'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            <h4>'.$video->post_title.'</h4>
          </div>
        ';
      }
    ?>
  </div>
</section>

<?php get_footer(); ?>
