<section id="ultimas_noticias">
  <div class="container">

    <div class="col-md-8">
      <a class="title-section" href="#ultimas_noticias">
        <h3>ÚLTIMAS NOTÍCIAS</h3>
      </a>
      <div class="row">
        <?php
        $count = 0;
        foreach ($noticias as $noticia) {
          $id = $noticia->ID;
          $ultimas_noticias = get_field('ultimas_noticias', $id);
          $chamada_sem_foto = get_field('chamada_sem_foto', $id);
          $descricao = get_field('descricao', $id);
          $thumbnail = get_thumbnail($id);

          if ($thumbnail == false && $ultimas_noticias == true && $chamada_sem_foto == true) {
            echo '<div class="col-md-12 noticia-sem-foto">
                   <a href=' . get_permalink($id) . '>
                     <h4>' . $noticia->post_title . '</h4>
                   </a>
                   <label class="descricao">' . $descricao . '</label>
                   <div class="separador"></div>
              </div>';
            $count++;
          }

          if ($count == 1) {
            break;
          }
        }

        $count = 0;
        foreach ($noticias as $noticia) {
          $id = $noticia->ID;
          $ultimas_noticias = get_field('ultimas_noticias', $id);
          $descricao = get_field('descricao', $id);
          $chamada_sem_foto = get_field('chamada_sem_foto', $id);
          $category = get_the_category($id)[0]->name;
          $thumbnail = get_thumbnail($id);

          if ($thumbnail != false && $ultimas_noticias == true && $chamada_sem_foto == false) {
            echo '<div class="col-md-6 noticia-dupla">
                    <div class="box-imagem">
                      <a href=' . get_permalink($id) . '>
                        <img src="' . $thumbnail . '">
                        <label class="cat-noticia">' . $category . '</label>
                      </a>
                    </div>
                    <div class="box-info">
                      <a href=' . get_permalink($id) . '>
                        <label class="title">' . $noticia->post_title . '</label>
                      </a>
                      <a href=' . get_permalink($id) . '>
                        <label class="descricao">' . $descricao . '</label>
                      </a>
                    </div>
                  </div>';
            $count++;
          }

          if ($count == 2) {
            break;
          }
        }
        ?>
      </div>
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
            if ($posicao == 'ultimas_noticias_lateral') {
              if ($duplo != false) {
                echo '<div class="col-md-12 img-1">
                          <img src=' . get_field('imagem', $publicidade->ID, true) . '>
                        </div>
                        <div class="col-md-12 img-2">
                          <img src=' . get_field('segunda_imagem', $publicidade->ID, true) . '>
                        </div>
                      ';
              } else {
                echo '<div class="col-md-12 img-full">
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

    <div class="col-md-12 publicidade-inferior">
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
            if ($posicao == 'ultimas_noticias_inferior') {
              if ($duplo != false) {
                echo '<div class="col-md-6">
                          <img class="img-1" src=' . get_field('imagem', $publicidade->ID, true) . '>
                        </div>
                        <div class="col-md-6">
                          <img class="img-2" src=' . get_field('segunda_imagem', $publicidade->ID, true) . '>
                        </div>
                      ';
              } else {
                echo '<div class="col-md-12">
                          <img src=' . get_field('imagem', $publicidade->ID, true) . '>
                        </div>
                      ';
              }
            }
          }
        }
      }
      ?>
    </div> <!-- /.Col-12 -->

  </div> <!-- /.Container -->
</section>