<section id="comments">
  <div class="container">
    <div class="fb-comments" data-href="<?php echo get_the_permalink(); ?>" data-numposts="5"></div>
    <div id="fb-root"></div>
  </div>
</section>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
