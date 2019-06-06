<?php
  global $wpdb;

  $query = array('category_name' => 'banners', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1'); 
  $banners = get_posts($query);

  $query = array('category_name' => 'noticias', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $noticias = get_posts($query);

  $query = array('category_name' => 'publicidades', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1'); 
  $publicidades = get_posts($query);

  $query = array('category_name' => 'videos', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '6'); 
  $videos = get_posts($query);

  $query = array('category_name' => 'eventos', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $eventos = get_posts($query);

  $query = array('category_name' => 'edicoes', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $edicoes = get_posts($query);

  $query = array('category_name' => 'gastronomias', 'orderby' => 'rand', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $gastronomias = get_posts($query);

  $query = array('category_name' => 'parceiros', 'orderby' => 'rand', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $parceiros = get_posts($query);

  $query = array('category_name' => 'promocao', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $promocoes = get_posts($query);

  $query = array('category_name' => 'radares', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $radares = get_posts($query);

  $query = array('category_name' => '14', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $blogs_e_colunas = get_posts($query);

  $query = array('category_name' => '15', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'); 
  $publicidade_personalizada = get_posts($query);

  $users = get_users();
  shuffle($users);
?>
