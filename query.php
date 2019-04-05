<?php
  global $wpdb;

  $query = array('category' => '2', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1'); 
  $banners = get_posts($query);

  $query = array('category' => '3', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $noticias = get_posts($query);

  $query = array('category' => '4', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1'); 
  $publicidades = get_posts($query);

  $query = array('category' => '5', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '6'); 
  $videos = get_posts($query);

  $query = array('category' => '6', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $eventos = get_posts($query);

  $query = array('category' => '7', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $edicoes = get_posts($query);

  $query = array('category' => '8', 'orderby' => 'rand', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $gastronomias = get_posts($query);

  $query = array('category' => '9', 'orderby' => 'rand', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $parceiros = get_posts($query);

  $query = array('category' => '11', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $onde_encontrar = get_posts($query);

  $query = array('category' => '12', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $promocoes = get_posts($query);

  $query = array('category' => '13', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $radares = get_posts($query);

  $query = array('category' => '14', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $blogs_e_colunas = get_posts($query);

  $query = array('category' => '15', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $publicidade_personalizada = get_posts($query);

  $users = get_users();
  shuffle($users);
?>
