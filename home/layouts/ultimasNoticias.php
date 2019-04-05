<section id="ultimas_noticias">
  <div class="container">
    
    <div class="col-md-8">  
      <a class="title-section" href="/noticias/ultimas-noticias/"><h3>ÚLTIMAS NOTÍCIAS</h3></a>
      <div class="ultimas_noticias owl-carousel owl-theme">
      <?php
        foreach($noticias as $noticia){
          $id = $noticia->ID;
          $ultimas_noticias = get_field('ultimas_noticias', $id);
          $thumbnail = get_thumbnail($id);
          if($thumbnail != ''){
            if($ultimas_noticias == true){
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
      </div>  <!-- /.Carousel -->
    </div>  <!-- /.Col-8 -->
        
    <div class="col-md-4 publicidade-lateral">
      <div class="title-publicidade"><h3>PUBLICIDADE</h3></div>
      <?php
        foreach($publicidades as $publicidade){
          $id = $publicidade->ID;

          $date = get_field('ativo_ate', $id);
          $today = date('Ymd');
          
          if ($today <= $date){
            $ativo = get_field('ativo', $id, true);
            $duplo = get_field('segunda_imagem',$id, true);
            $posicao = get_field('posicao', $id);
            if($ativo == true){
              if($posicao == 'ultimas_noticias_lateral'){
                if($duplo != false){
                  echo '<div class="col-md-12 img-1">
                          <img src='.get_field('imagem',$publicidade->ID, true).'>
                        </div>
                        <div class="col-md-12 img-2">
                          <img src='.get_field('segunda_imagem',$publicidade->ID, true).'>
                        </div>
                      ';
                }else{
                  echo '<div class="col-md-12 img-full">
                          <img src='.get_field('imagem',$publicidade->ID, true).'>
                        </div>
                      ';
                }
              }
            }
          }
        }
      ?>
    </div>  <!-- /.Col-4 -->

    <div class="col-md-12 publicidade-inferior">
    <div class="title-publicidade"><h3>PUBLICIDADE</h3></div>
      <?php
        foreach($publicidades as $publicidade){
          $id = $publicidade->ID;

          $date = get_field('ativo_ate', $id);
          $today = date('Ymd');
          
            if ($today <= $date){

            $ativo = get_field('ativo', $id, true);
            $duplo = get_field('segunda_imagem',$id, true);
            $posicao = get_field('posicao', $id);

            if($ativo == true){
              if($posicao == 'ultimas_noticias_inferior'){
                if($duplo != false){
                  echo '<div class="col-md-6">
                          <img src='.get_field('imagem',$publicidade->ID, true).'>
                        </div>
                        <div class="col-md-6">
                          <img src='.get_field('segunda_imagem',$publicidade->ID, true).'>
                        </div>
                      ';
                }else{
                  echo '<div class="col-md-12">
                          <img src='.get_field('imagem',$publicidade->ID, true).'>
                        </div>
                      ';
                }
              }
            }
          }
        }
      ?>
    </div>  <!-- /.Col-12 -->

  </div>  <!-- /.Container -->
</section>
