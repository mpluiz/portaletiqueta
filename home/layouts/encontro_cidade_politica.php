<section  id="noticias_destaque">
  <div class="container">
    
  <div class="col-md-4 encontro">
    <a class="title-section" href="/encontro"><h3>ENCONTRO</h3></a>
    <?php 
    $count = 0;
    foreach($noticias as $noticia){
      if ($count >= 4){
        break;
      }
      $id = $noticia->ID;
      $category = get_the_category($id)[0];
      $thumbnail = get_thumbnail($id);
      if($thumbnail != ''){
        if($category->slug == 'encontro'){
          if($count == 0 ){
            echo '
              <div class="principal"> 
                <a class="post" href='.get_permalink($id).'>
                  <img src='.$thumbnail.'>
                </a>
                <a class="title-post" href='.get_permalink($id).'>
                  <h4>'.$noticia->post_title.'</h4>
                  <p class="post-description">'.get_field('descricao', $id).'</p>
                </a>
              </div>
            ';
            $count ++;
          }else{
            echo'
              <div class="sub"> 
                <a class="post" href='.get_permalink($id).'>
                  <img src='.$thumbnail.'>
                  <h4>'.$noticia->post_title.'</h4>
                </a>
              </div>
            ';
            $count ++;
          }
        }
      }
    }
    ?>
    <a class="btn btn-mais" href="/encontro">Veja +</a>
  </div> <!-- /.col-4 -->
  
  <div class="col-md-4 cidade">
    <a class="title-section" href="/cidade"><h3>CIDADE</h3></a>
    <?php 
    $count = 0;
    foreach($noticias as $noticia){
      if ($count >= 4){
        break;
      }
      $id = $noticia->ID;
      $category = get_the_category($id)[0];
      $thumbnail = get_thumbnail($id);
      if($thumbnail != ''){
        if($category->slug == 'cidade'){
          if($count == 0 ){
            echo '
              <div class="principal"> 
                <a class="post" href='.get_permalink($id).'>
                  <img src='.$thumbnail.'>
                </a>
                <a class="title-post" href='.get_permalink($id).'>
                  <h4>'.$noticia->post_title.'</h4>
                  <p class="post-description">'.get_field('descricao', $id).'</p>
                </a>
              </div>
            ';
            $count ++;
          }else{
            echo'
              <div class="sub"> 
                <a class="post" href='.get_permalink($id).'>
                  <img src='.$thumbnail.'>
                  <h4>'.$noticia->post_title.'</h4>
                </a>
              </div>
            ';
            $count ++;
          }
        }
      }
    }
    ?>
    <a class="btn btn-mais" href="/cidade">Veja +</a>
  </div> <!-- /.col-4 -->

  <div class="col-md-4 politica">
    <a class="title-section" href="/politica"><h3>POLÍTICA</h3></a>
    <?php 
    $count = 0;
    foreach($noticias as $noticia){
      if ($count >= 4){
        break;
      }
      $id = $noticia->ID;
      $category = get_the_category($id)[0];
      $thumbnail = get_thumbnail($id);
      if($thumbnail != ''){
        if($category->slug == 'politica'){
          if($count == 0 ){
            echo '
              <div class="principal"> 
                <a class="post" href='.get_permalink($id).'>
                  <img src='.$thumbnail.'>
                </a>
                <a class="title-post" href='.get_permalink($id).'>
                  <h4>'.$noticia->post_title.'</h4>
                  <p class="post-description">'.get_field('descricao', $id).'</p>
                </a>
              </div>
            ';
            $count ++;
          }else{
            echo'
              <div class="sub"> 
                <a class="post" href='.get_permalink($id).'>
                  <img src='.$thumbnail.'>
                  <h4>'.$noticia->post_title.'</h4>
                </a>
              </div>
            ';
            $count ++;
          }
        }
      }
    }
    ?>
    <a class="btn btn-mais" href="/politica">Veja +</a>
  </div> <!-- /.col-4 -->

  </div> <!-- /.container -->
</section>
