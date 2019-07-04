<?php
/*

Template Name: Authors

*/
?>

<?php

$author = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

if ($author->ID != null) {

  // PEGANDO POSTS DO AUTOR ATUAL.
  $query = array('author' => $author->ID, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $posts = get_posts($query);

  // PEGANDO INFORMAÇÕES DO AUTOR ATUAL
  // $user_meta = get_the_author_meta('display_name');

}

get_header();

?>

<?php if ($author->ID != null): ?>
<section id="author">

  <div class="header">
    <div class="container">

      <?php
        echo '<div class="author">
                <div class="circle">
                  '.get_avatar($author->ID).'
                </div>

                <div class="info">
                  <span class="name">'.$author->display_name.'</span>
                  <p class="email">'.$author->user_email.'</p>
                  <p class="bio">'.$author->description.'</p>
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
