<?php
// Pegando galeria de imagens do post relacionado
$id_gallery = (get_field('publicidade_personalizada', $post->ID));

if ($id_gallery) {
  $id = $id_gallery[0]->ID;

  $ativo = get_field('ativo', $id);
  $date = get_field('ativo_ate', $id);
  $today = date('Ymd');

  $imagem1 = get_field('imagem', $id);
  $imagem2 = get_field('segunda_imagem', $id);
}
?>

<section id="publicidade-interna">
  <div class="col-md-4 publicidade-lateral">
    <?php
    if ($id_gallery) {
      if ($today <= $date) {
        if ($ativo == true) {

          if ($id_gallery != false) {
            echo '<div class="title-publicidade"><h3>PUBLICIDADE</h3></div>';
          }
          if ($imagem1 != '' && $imagem2 != '') {
            echo '<div class="col-md-12 img-1">
                  <img src=' . $imagem1 . '>
                </div>
                <div class="col-md-12 img-2">
                  <img src=' . $imagem2 . '>
                </div>
              ';
          } else if ($imagem1 != '' && $imagem2 == '') {
            echo '<div class="col-md-12 img-full">
                  <img src=' . $imagem1 . '>
                </div>
              ';
          }
        }
      }
    }
    ?>
  </div> <!-- /.Col-4 -->
</section>