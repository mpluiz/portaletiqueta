<section id="banner">
  <div class="container">
    <div class="banner">
    <?php 
      foreach ($banners as $banner){

        $date = get_field('ativo_ate', $banner->ID);
        $today = date('Ymd');
        
        if ($today <= $date){
          $id = $banner->ID;
          $thumbnail = get_thumbnail($id);
          if ($thumbnail != ''){
            echo '<a class="post" href='.get_field('link', $id).' target="_blank">
                    <img src='.$thumbnail.'>
                 </a>';
          }
        }
      }
    ?>
    </div>
  </div>
</section>

<script>
  $(function() {
    $('.banner').hover(function() {
      $(this).toggleClass('open');
    })
  });
</script>
