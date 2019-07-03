<section id="mais_populares">
  <div class="container">
    
    <div class="col-md-8">  
      <a class="title-section" href="/mais-populares/"><h3>DESTAQUES</h3></a>
      <div class="mais_populares owl-carousel owl-theme">
      <?php
        foreach($noticias as $noticia){
          $id = $noticia->ID;
          $mais_popular = get_field('mais_popular', $id);
          $thumbnail = get_thumbnail($id);
          if($thumbnail != ''){
            if($mais_popular == true){
              echo '
                <div class="item"> 
                  <a class="post" href='.get_permalink($id).'>
                    <img src='.$thumbnail.'>
                    <p class="cat-noticia">'.$category->name.'</p>           
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
              if($posicao == 'mais_populares_lateral'){
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

  </div>  <!-- /.Container -->
</section>

<section id="publicidade_inferior">
  <div class="container">
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
              if($posicao == 'tv_etiqueta_inferior'){
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
  </div> <!-- CONTAINER --> 
</section>
