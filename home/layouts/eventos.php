<section id="eventos">
  <div class="container">
    <h3 style="color: #fff; font-weight: 700;">EVENTOS</h3>
    <div class="eventos owl-carousel owl-theme">
    <?php
    foreach ($eventos as $evento){
      $id = $evento->ID;
      $thumbnail = get_thumbnail($id);
      if ($thumbnail != ''){
        echo '<div class="item">
                <img src='.$thumbnail.'>
                  <div class="box">
                    <div class="head">
                      <h4>'.$evento->post_title.'</h3>
                      <p class="post-description">'.get_field('descricao', $id).'</p>
                    </div>
                    <div class="body">
                      <p><i class="fas fa-calendar"></i>'.' '.get_field('data', $evento->ID, true).'</p>
                      <p><i class="fas fa-location-arrow"></i>'.' '.get_field('local', $evento->ID, true).'</p>
                      <p><i class="fas fa-map-marker"></i>'.' '.get_field('cidade', $evento->ID, true).'</p>
                    </div>
                  </div>
                <a href="'.get_permalink($evento->ID).'" class="btn btn-default veja-mais">Veja +</a>
              </div>';
      }
    }
    ?>
    </div>
  </div>
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
            $unico = get_field('imagem', $id, true);
            $duplo = get_field('segunda_imagem',$id, true);
            $triplo = get_field('terceira_imagem',$id, true);
            $posicao = get_field('posicao', $id);

            if($ativo == true){
              if ($posicao == 'eventos_inferior'){
                if ($unico == true && $duplo == false && $triplo == false){
                  echo '<div class="col-md-12">
                          <img src='.get_field('imagem', $id, true).'>
                        </div>
                      ';
                }
                if ($unico == true && $duplo == true && $triplo == false){
                  echo '<div class="col-md-6">
                          <img src='.get_field('imagem', $id, true).'>
                        </div>
                        <div class="col-md-6">
                          <img src='.get_field('segunda_imagem', $id, true).'>
                        </div>
                      ';
                }
                if ($unico == true && $duplo == true && $triplo == true){
                  echo '<div class="col-md-4">
                          <img src='.get_field('imagem', $id, true).'>
                        </div>
                        <div class="col-md-4">
                          <img src='.get_field('segunda_imagem', $id, true).'>
                        </div>
                        <div class="col-md-4">
                          <img src='.get_field('terceira_imagem', $id, true).'>
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
