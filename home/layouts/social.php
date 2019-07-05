<section id="social">
  <div class="container">

    <div class="col-md-8">
      <a class="title-section" href="/social">
        <h3>SOCIAL</h3>
      </a>
      <div class="social owl-carousel owl-theme">
        <?php
        foreach ($noticias as $noticia) {
          $id = $noticia->ID;
          $social = get_field('social', $id);
          $category = get_the_category($id)[0];
          $thumbnail = get_thumbnail($id);
          if ($thumbnail != '') {
            if ($social == true) {
              echo '
                  <div class="item"> 
                    <a class="post" href=' . get_permalink($id) . '>
                      <img src=' . $thumbnail . '>
                      <p class="cat-noticia">' . $category->name . '</p>           
                    </a>
                    <a class="title-post" href=' . get_permalink($id) . '>
                      <h4>' . $noticia->post_title . '</h4>
                      <p class="post-description">' . get_field('descricao', $id) . '</p>
                    </a>
                  </div>
                ';
            }
          }
        }
        ?>
      </div> <!-- /.Carousel -->

      <div class="destaque owl-carousel owl-theme m-top">
        <?php

        foreach ($noticias as $noticia) {
          $id = $noticia->ID;
          $social = get_field('social', $id);
          $category = get_the_category($id)[0];
          $thumbnail = get_thumbnail($id);
          if ($thumbnail != '') {
            if ($category->slug == 'social') {
              if ($social == false) {
                echo '
                        <div class="item"> 
                          <a class="post" href=' . get_permalink($id) . '>
                            <img src=' . $thumbnail . '>
                            <p class="cat-noticia">' . $category->name . '</p>           
                          </a>

                          <a class="title-post" href=' . get_permalink($id) . '>
                            <p class="post-description">' .$noticia->post_title. '</p>
                          </a>
                        </div>
                      ';
              }
            }
          }
        }
        ?>
      </div>
      <a class="btn btn-mais" href="/social">Veja +</a>
    </div> <!-- /.Col-8 -->

    <div class="col-md-4 publicidade-lateral">
      <div class="title-publicidade">
        <h3>PUBLICIDADE</h3>
      </div>
      <?php
      foreach ($publicidades as $publicidade) {
        $id = $publicidade->ID;

        $date = get_field('ativo_ate', $id);
        $today = date('Ymd');

        if ($today <= $date) {

          $ativo = get_field('ativo', $id, true);
          $duplo = get_field('segunda_imagem', $id, true);
          $posicao = get_field('posicao', $id);

          if ($ativo == true) {
            if ($posicao == 'social_lateral') {
              if ($duplo != false) {
                echo '<div class="col-md-12 col-xs-6 img-1">
                          <img src=' . get_field('imagem', $publicidade->ID, true) . '>
                        </div>
                        <div class="col-md-12 img-2">
                          <img src=' . get_field('segunda_imagem', $publicidade->ID, true) . '>
                        </div>
                      ';
              } else {
                echo '<div class="col-md-12 col-xs-6 img-full">
                          <img src=' . get_field('imagem', $publicidade->ID, true) . '>
                        </div>
                      ';
              }
            }
          }
        }
      }
      ?>
    </div> <!-- /.Col-4 -->

  </div> <!-- /.Container -->
</section>