<?php
// Aplicando os filtros no conteudo do post
$content = apply_filters('the_content', $post->post_content);
// Pegando imagem principal do post
//
$get_inicio = strtotime(get_field('promocao_de', $post->ID));
$inicio = date('d/m/Y', $get_inicio);

$get_termino = strtotime(get_field('promocao_ate', $post->ID));
$termino = date('d/m/Y', $get_termino);

$thumbnail = get_thumbnail($post->ID);
echo '<section id="single-promocao"> 
        <div class="container">
          <div class="col-md-8 m-top content">

            <h2 class="title">'.$post->post_title.'</h2>
            <p>'.get_field('descricao', $post->ID).'</p>

            <div class="compartilhar m-top">
              <span class="facebook"><i class="fab fa-facebook-f"></i></span>
              <span class="twitter"><i class="fab fa-twitter"></i></span>
              <span class="linkedin"><i class="fab fa-linkedin-in"></i></span>
              <span class="hidden-md hidden-lg hidden-sm whatsapp"><i class="fab fa-whatsapp"></i></span>
            </div>

            '.$content.'

            </br>
            <p>Para participar acesse o link e siga os regulamentos: <a class="link" target="_blank" href='.get_field('link_instagram', $post->ID).'>Instagram</a></p>
            <p><strong>Inicio: </strong>'.$inicio.'</p>
            <p><strong>Término: </strong>'.$termino.'</p>
          </div>';
// include (dirname(dirname( __FILE__  )).'/includes/publicidade_interna.php');
// include (dirname(dirname( __FILE__  )).'/includes/gallery/gallery.php');
echo    '</div>
      </section>';
?>

<script>
$(function() {
  $('.facebook').click(function() {
    window.open("https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>", "facebook", "height=500,width=500");
  });

  $('.twitter').click(function() {
    window.open("https://twitter.com/home?status=<?php the_permalink() ?>", "twitter", "height=500,width=500");
  });

  $('.linkedin').click(function() {
    window.open("https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink() ?>", "linkedin", "height=500,width=500");
  });

  $('.whatsapp').click(function() {
    window.open("whatsapp://send?text=<?php the_permalink() ?>");
  });
});
</script>
