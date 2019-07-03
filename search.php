<?php
get_header();
?>

<section id="search">
  <div class="container">
    <div class="row">
      <?php
      if (have_posts()) {
        echo '<p class="resultado">Resultados para: <span>' . strtoupper(get_search_query()) . '</span></p>';
        while (have_posts()) : the_post();
          $id = get_the_ID();
          $category = get_the_category();
          $thumbnail = get_thumbnail($id);

          if ($thumbnail) {
            echo '
              <section id="noticias">
                <div class="col-md-4 item"> 
                  <a class="post" href=' . get_permalink($id) . '>
                    <img src=' . $thumbnail . '>
                    <label class="page-noticia">' . $category[0]->name . '</label>
                  </a>
                  <a class="title-post" href=' . get_permalink($id) . '>
                    <h4>' . get_the_title() . '</h4>
                    <p class="post-description">' . get_field('descricao', $id) . '</p>
                  </a>
                </div>
              </section>
              ';
          }

        endwhile;
      } else {
        echo '<div class="col-md-8 not-found no-padding">';
        echo '<p class="resultado">Não foi encontrado resultado para: <span>' . get_search_query() . '</span></p>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>