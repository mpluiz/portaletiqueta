<?php get_header(); ?> 
 
<section id="noticias">
  <div class="container">
  <a class="title-section" href="#"><h3><?php strtoupper(single_cat_title()); ?></h3></a>
    <div class="clear-fix"></div>
    <?php 
			while ( have_posts() ) : the_post();
    
        $id = get_the_ID();
        $category = get_the_category();
        $thumbnail = get_thumbnail($id);

        if ($category[0]->name == 'Noticias'){
          if ($thumbnail != ''){
            echo '
              <div class="col-md-4 item"> 
                <a class="post" href='.get_permalink($id).'>
                  <img src='.$thumbnail.'>
                  <p class="page-noticia">'.$category[1]->name.'</p>           
                </a>
                <a class="title-post" href='.get_permalink($id).'>
                  <h4>'.get_the_title().'</h4>
                  <p class="post-description">'.get_field('descricao', $id).'</p>
                </a>
              </div>
            ';
          }
        }

        if ($category[0]->name == 'Revista'){

        }


        if ($category[0]->name == 'Eventos'){

        }
			 
			endwhile; 
    ?>
  </div>
</section>

<?php get_footer(); ?>
