<section id="destaque">
  <div class="container m-top-2x">
    <a class="title-section" href="/noticias/destaques/"><h3>DESTAQUES</h3></a>
    <div class="destaque owl-carousel owl-theme m-top">
      <?php
          foreach($noticias as $noticia){
            $id = $noticia->ID;
            $destaque = get_field('destaque', $noticia->ID, true);
            if ($destaque == true){
              $thumbnail = get_thumbnail($noticia->ID);
              if ($thumbnail != ''){
              echo '
                <div class="item"> 
                  <a class="post" href='.get_permalink($id).'>
                    <img src='.$thumbnail.'>
                    <p class="cat-noticia">'.get_field('categorias', $id).'</p>           
                  </a>
                  <a class="title-post" href='.get_permalink($id).'>
                    <h4>'.$noticia->post_title.'</h4>
                    <p class="post-description">'.get_field('descricao', $id).'</p>
                  </a>
                </div>
              ';
              }
            }
          }
      ?>
    </div>
  </div> <!-- CONTAINER --> 
</section>
