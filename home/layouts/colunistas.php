<section id="carousel-colunistas">
  <div class="container m-top-2x">
    <a class="title-section" href="#carousel-colunistas"><h3>BLOGS E COLUNAS</h3></a>
    <div class="colunistas owl-carousel owl-theme m-top">
      <?php
        foreach($users as $user){
          $user_meta = get_user_meta($user->ID);
          $link = get_author_posts_url($user->ID);
          if($user->roles[0] != 'administrator' && $user->roles[0] != 'editor'){
            echo '<div class="item">';

              echo '<a href="'.$link.'">';
                echo '<div class="circle">';
                  echo get_avatar($user->ID);
                echo '</div>';

                echo '<div class="info">';
                  echo '<span class="title">'.$user->display_name.'</span>';
                  echo '<p class="description">'.$user_meta['description'][0].'</p>';
                echo '</div>';
              echo '</a>';

            echo '</div>';
          }
        }
      ?>
    </div>
  </div> <!-- CONTAINER --> 
</section>
