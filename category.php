<?php get_header(); ?>

<section id="category">
  <div class="container">
    <a class="title-section" href="#">
      <h3><?php single_cat_title(); ?></h3>
    </a>
    <div class="row">
      <?php
      if (have_posts()) {
        while (have_posts()) : the_post();

          $id = get_the_ID();
          $category = get_the_category();
          $category_parent = get_category_parents($category[0]->category_parent);
          $thumbnail = get_thumbnail($id);

          if (($category[0]->slug == 'noticias') or ($category_parent == 'Noticias/')) {
            if ($thumbnail) {
              echo '
              <section id="noticias">
                <div class="col-md-4 item"> 
                  <a class="post" href=' . get_permalink($id) . '>
                    <img src=' . $thumbnail . '>
                  </a>
                  <a class="title-post" href=' . get_permalink($id) . '>
                    <h4>' . get_the_title() . '</h4>
                    <p class="post-description">' . get_field('descricao', $id) . '</p>
                  </a>
                </div>
              </section>
            ';
            }
          }

          if ($category[0]->name == 'Revista') { }


          if ($category[0]->name == 'Eventos') { }

          if ($category[0]->slug == 'promocao') {
            $date = get_field('promocao_ate', $id);
            $today = date('Ymd');
            if ($today > $date) {
              echo '
                  <section id="promocao">    
                    <div class="col-md-4 item-inativo">
                      <div class="disable" disabled>
                        <a class="disabled" href=""><img src=' . $thumbnail . ' disabled>
                        <div class="box">
                          <h3>' . get_the_title() . '</h3>
                          <p class="post-description">' . get_field('descricao', $id) . '</p>
                          <p><i class="fas fa-toggle-off fa-3x"></i></p>
                          <p class="inativo">Finalizado</p>
                        </div></a>
                      </div>
                    </div>
                  </section>
                  ';
            } else if ($today < $date) {
              echo '
                  <section id="promocao">    
                    <div class="col-md-4 item-ativo">
                      <a href="' . get_the_permalink() . '"><img src=' . $thumbnail . '>
                      <div class="box">
                        <h3>' . get_the_title() . '</h3>
                        <p class="post-description">' . get_field('descricao', $id) . '</p>
                        <label>Início: '.date('d/m/Y' ,strtotime(get_field('promocao_de', $id))).' </label>
                        <label>Término: '.date('d/m/Y' ,strtotime($date)).' </label>
                        <p><i class="fas fa-toggle-on fa-3x"></i></p>
                        <p class="ativo">Ativo</p>
                      </div></a>
                    </div>
                  </section>
                  ';
            }
          }

        endwhile;
      } else {
        echo '
          <div class="col-md-12">
            <p>Nenhum registro encontrado.</p>
          </div>
        ';
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>