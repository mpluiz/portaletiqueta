<section id="banner">
  <div class="container">
    <div class="banner owl-carousel owl-theme">
    <?php 
      foreach ($banners as $banner){

        $date = get_field('ativo_ate', $banner->ID);
        $today = date('Ymd');
        
        if ($today <= $date){
          $id = $banner->ID;
          $thumbnail = get_thumbnail($id);
          if ($thumbnail != ''){
            if (get_field('extender', $id)) {
              echo '<a class="post extend" href='.get_field('link', $id).' target="_blank">
                      <img src='.$thumbnail.'>
                  </a>';
            } else {
              echo '<a class="post" href='.get_field('link', $id).' target="_blank">
                      <img src='.$thumbnail.'>
                  </a>';
            }
          }
        }
      }
    ?>
    </div>
  </div>
</section>
