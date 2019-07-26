<section id="gastronomia">
  <div class="container m-top-2x">
    <a class="title-section" href="/guia-gastronomias/"><h3>GASTRONOMIA</h3></a>
    <div class="destaque owl-carousel owl-theme m-top">
<?php
    foreach($gastronomias as $gastronomia){
      $id = $gastronomia->ID;

      $date = get_field('ativo_ate', $id);
      $today = date('Ymd');
      
      if ($today <= $date){

        $thumbnail = get_thumbnail($id);
        if ($thumbnail != ''){
          echo '
            <div class="item"> 
              <a class="post" href='.get_permalink($id).'>
                <img src='.$thumbnail.'>
                <p class="cat-gastronomia">Gastronomia</p>           
              </a>
              <a class="title-post" href='.get_permalink($id).'>
                <h4>'.$gastronomia->post_title.'</h4>
                <p class="post-description">'.get_field('descricao', $id).'</p>
              </a>
            </div>
          ';
        }
      }
    }
?>
    </div>
    <a class="btn btn-mais" href="/guia-gastronomias">Veja +</a>
  </div> <!-- CONTAINER --> 
</section>

<section id="publicidade_inferior">
  <div class="container">
    <div class="col-md-12 col-xs-12 publicidade-inferior">
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
              if($posicao == 'gastronomia_inferior'){
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
