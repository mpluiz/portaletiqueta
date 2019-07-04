<section id="videos-home">
  <div class="container">
    <h3 style="color: #fff; font-weight: 700;">TV ETIQUETA</h3>
    <div class="col-md-12 videos no-padding">

      <div class="col-md-8 video-principal no-padding">
      <?php 
        foreach ($videos as $video):
          if (get_field('video_principal', $video->ID) == true):
      ?>
      <iframe id="video-principal" width="100%" height="475px" src="https://www.youtube.com/embed/<?php echo get_field('link_do_video', $video->ID) ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      <?php 
          endif;
        endforeach;
      ?>
      </div>

      <div class="col-md-4 no-padding lista-videos">
        <span class="list-group-item title">ÚLTIMOS VÍDEOS</span>
        <?php
          foreach ($videos as $video):
            if (get_field('video_principal', $video->ID) != true):
        ?>
        <button type="button" class="list-group-item title-video" value="https://www.youtube.com/embed/<?php echo get_field('link_do_video', $video->ID) ?>?rel=0&amp;showinfo=0"><img class="col-md-4" src="http://i1.ytimg.com/vi/<?php echo get_field('link_do_video', $video->ID)?>/default.jpg"><span class="col-md-8"><?php echo $video->post_title ?></span></button>
        <?php 
            endif;
          endforeach;
        ?>
      <div>

    </div>
  </div>
</section>

<script>
  $('button.title-video').click(function(){
    new_url = $(this).val();
    iframe = document.getElementById('video-principal');
    iframe.src = new_url;
  });
</script>
