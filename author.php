<?php
/*

Template Name: Authors

*/
?>

<?php

$id = get_the_author_ID();

if ($id != null){

  // PEGANDO POSTS DO AUTOR ATUAL.
  $query = array('author' => $id, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $posts = get_posts($query);

  // PEGANDO INFORMAÇÕES DO AUTOR ATUAL
  $user_meta = get_the_author_meta($id);

}

get_header();

?>

<?php if ($id != null): ?>
<section id="author">

  <div class="header">
    <div class="container">

      <?php
        echo '<div class="author">
                <div class="circle">
                  '.get_avatar($id).'
                </div>

                <div class="info">
                  <span class="name">'.$user_meta['first_name'][0].'</span>
                  <p class="email">'.get_the_author_email().'</p>
                  <p class="bio">'.$user_meta['description'][0].'</p>
                </div>
              </div>';
      ?>

    </div>
  </div>

  <div class="posts">
    <div class="container">

      <?php
        foreach ($posts as $post){
          $id = $post->ID;
          $category = get_the_category($id);
          $thumbnail = get_thumbnail($id);
          if ($category[0]->slug == "blogs_e_colunas"){
            if ($thumbnail != ''){
              echo '
                <div class="col-md-4 item"> 
                  <a class="post" href='.get_permalink($id).'>
                    <img src='.$thumbnail.'>
                    <p class="page-noticia">'.get_field('categorias', $id).'</p>           
                  </a>
                  <a class="title-post" href='.get_permalink($id).'>
                    <h4>'.$post->post_title.'</h4>
                    <p class="post-description">'.get_field('descricao', $id).'</p>
                  </a>
                </div>
              ';
            }
          }
        }
      ?>

    </div>
  </div>

</section>

<?php else: ?>
<section id="not_found">


</section>
<?php endif; ?>

<?php get_footer(); ?>
