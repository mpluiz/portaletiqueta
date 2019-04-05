<?php

  add_theme_support('post-thumbnails');

  function clima_tempo(){
    $response = file_get_contents("http://apiadvisor.climatempo.com.br/api/v1/forecast/locale/4144/days/15?token=9ba7da500a2c3e2acb17a47930ad7f50");
    $response = json_decode($response, true);
    return $response;
  }

  function validaEmail($email) {

    $validacao = "#^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$#i";

    if (preg_match($validacao, $email)){
      return true;
    }else{
      return false;
    }

  }

  function template_directory(){
    echo get_template_directory_uri(); 
  }
  

  function get_thumbnail($id){
    $thumb_id = get_post_thumbnail_id($id, 'full');
    $thumb_url = wp_get_attachment_image_url($thumb_id, 'full');
    if ($thumb_url != ''){
      return $thumb_url;
    }else{
      return false;
    }
  }

  function dd($post){
    echo '<pre>';
    var_dump($post);
  }

  add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;"  )  );

?>
