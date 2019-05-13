<?php

/*
  template name: Gastronomias
*/

include(dirname(dirname( __FILE__  )).'/query.php');
get_header();
?>

<section id="guia-gastronomia">
  <div class="container">
    <a class="title-section"><h3>GASTRONOMIA</h3></a>
    <?php echo '<p class="post-description">'.get_field('descricao', get_the_ID()).'</p>'; ?>
  </div>

  <div class="destaque-gastronomia">
    <div class="container">
<?php
  foreach($gastronomias as $gastronomia){
    $id = $gastronomia->ID;

    $date = get_field('ativo_ate', $id);
    $today = date('Ymd');
    
    if ($today <= $date){

      $destaque = get_field('destaque', $id);
      if ($destaque == true){ 
      $thumbnail = get_thumbnail($id);
        if ($thumbnail != false){
          echo '<div class="col-md-4 item">
                  <a href="'.get_permalink($id).'"><img src='.$thumbnail.'>
                  <div class="box">
                    <p class="title-post">'.$gastronomia->post_title.'</p>
                    <p class="description">'.get_field('descricao', $id).'</p>
                  </div></a>
                </div>';
        }
      }
    }
  }
?>
    </div>
  </div>

  <div class="container">
  <div class="clearfix"></div>
  <?php
    foreach($gastronomias as $gastronomia){
      $id = $gastronomia->ID;
      $date = get_field('ativo_ate', $id);
      $today = date('Ymd');
      
      if ($today <= $date){

        $thumbnail = get_thumbnail($id);
        if ($thumbnail != false){
          echo '<div class="col-md-4 item">
                  <a href="'.get_permalink($id).'"><img src='.$thumbnail.'>
                  <div class="box">
                    <p class="title-post">'.$gastronomia->post_title.'</p>
                    <p class="description">'.get_field('descricao', $id).'</p>
                  </div></a>
                </div>';
        }
      }
    }
  ?>
  </div>
</section>

<?php
get_footer();
?>
