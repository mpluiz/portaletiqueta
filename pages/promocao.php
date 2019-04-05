<?php

/*
  Template Name: Promoção
*/

include(dirname(dirname( __FILE__  )).'/query.php');
get_header(); 
?>

<section id="promocao">
  <div class="container">
    <a class="title-section"><h3>PROMOÇÕES</h3></a>
    <div class="clear-fix"></div>
<?php
    echo '<p class="post-description">'.get_field('descricao', get_the_ID()).'</p>';
    foreach ($promocoes as $promocao){
       $thumbnail = get_thumbnail($promocao->ID);
       if ($thumbnail != false){
        $date = get_field('promocao_ate', $promocao->ID);
        $today = date('Ymd');
        if ($today < $date){
          echo '<div class="col-md-4 item-inativo">
                  <div class="disable" disabled>
                    <a class="disabled" href=""><img src='.$thumbnail.' disabled>
                    <div class="box">
                      <h4>'.$promocao->post_title.'</h4>
                      <p class="post-description">'.get_field('descricao', $promocao->ID).'</p>
                      <p><i class="fas fa-toggle-off fa-3x"></i></p>
                      <p class="inativo">Finalizado</p>
                    </div></a>
                  </div>
                </div>';
        }else if($today > $date){
          echo '<div class="col-md-4 item-ativo">
                  <a href="'.get_permalink($promocao->ID).'"><img src='.$thumbnail.'>
                  <div class="box">
                    <h4>'.$promocao->post_title.'</h4>
                    <p class="post-description">'.get_field('descricao', $promocao->ID).'</p>
                    <p><i class="fas fa-toggle-on fa-3x"></i></p>
                    <p class="ativo">Ativo</p>
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
