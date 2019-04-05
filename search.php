<?php
    get_header();
?>

<section id="search">
    <div class="container">
    <?php
        if (have_posts()){
        echo '<p class="resultado">Resultados para: <span>'.strtoupper(get_search_query()).'</span></p>';
          while ( have_posts() ) : the_post();
          $thumb_id = get_post_thumbnail_id(get_the_ID());
          if (get_the_category()[0]->name == 'Noticias'){
            if ($thumb_id != ''){
              echo '<div class="col-md-4 item">';
              echo  '<a href="'.get_the_permalink().'"><img src='.wp_get_attachment_image_url($thumb_id).'>';

              if (get_field('categorias', get_the_ID()) != ''){
                  echo '<p class="page-noticia">'.get_field('categorias', get_the_ID()).'</p>';

              }else if(get_field('categorias', get_the_id()) == ''){
                  echo '<p class="page-noticia">'.get_the_category()[0]->name.'</p>';
              } 

              echo  '<p class="title-post">'.get_the_title().'</p></a>';
              echo '</div>';
            }
          }
          endwhile;
        }else{
          echo '<div class="col-md-8 not-found no-padding">';
          echo '<p class="resultado">Não foi encontrado resultado para: <span>'.get_search_query().'</span></p>';
          echo '</div>';
          remove_footer();
        }
    ?>
    </div>
</section>

<?php
    get_footer();
?>
