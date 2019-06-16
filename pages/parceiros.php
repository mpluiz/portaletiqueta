<?php

/*
  Template Name: Parceiros
*/

include(dirname(dirname( __FILE__  )).'/query.php');
get_header(); 

?>
<section id="parceiros">
  <div class="container">
    <a class="title-section"><h3>PARCEIROS</h3></a>
    <div class="parceiros m-top-2x row">
    <?php
      foreach($parceiros as $parceiro){
      $thumb_id = get_post_thumbnail_id($parceiro->ID);
        if ($thumb_id != ''){
          echo '<div class="col-md-3">
                  <figure class="figure">
                    <a href="'.get_field('link' ,$parceiro->ID).'" target="_blank"><img src='.wp_get_attachment_image_url($thumb_id).'"></a>
                  </figure>
                </div>';
        }
      }
    ?>
    </div>   
  </div>
</section>

<?php get_footer(); ?>