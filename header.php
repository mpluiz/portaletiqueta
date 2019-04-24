<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">                                                                                                                                                                                           
  <meta http-equiv="X-UA-Compatible" content="IE=edge">                                                                                                                                                            
  <meta name="viewport" content="width=device-width, initial-scale=1">                                                                                                                                             

  <!-- CSS FILES -->                                                                                                                                                                                              
    <link rel="stylesheet" type="text/css" href="<?php template_directory(); ?>/assets/css/style.css">                                                                                                          

  <!-- FAVICON -->                                                                                                                                                                                              
    <link rel="shortcut icon" href="<?php template_directory(); ?>/assets/images/Favicon.ico" type="image/x-icon">                                                                                     

  <!-- VENDORS -->
    <!-- JQUERY -->
    <script src="<?php template_directory(); ?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>                                                                                                                       

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="<?php template_directory(); ?>/assets/vendor/owlcarousel/assets/owl.carousel.min.css">                  
    <link rel="stylesheet" type="text/css" href="<?php template_directory(); ?>/assets/vendor/owlcarousel/assets/owl.theme.default.min.css">  
    <script src="<?php template_directory(); ?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script> 

    <!-- BOOTSTRAP -->
    <script src="<?php template_directory(); ?>/assets/vendor/bootstrap/javascripts/bootstrap.js"></script> 
    
    <!-- GALLERY -->
    <script src="<?php template_directory() ?>/assets/vendor/gallery/js/jquery.gallerie.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php template_directory() ?>/assets/vendor/gallery/css/gallerie.css"/>
    <link rel="stylesheet" type="text/css" href="<?php template_directory() ?>/assets/vendor/gallery/css/gallerie-effects.css"/>

  <!-- CDN -->                                                                                                                                                                                              
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

  <!-- CUSTOM JS -->                                                                                            
    <script src="<?php template_directory(); ?>/assets/js/custom/newsletter.js"></script>
    <script src="<?php template_directory(); ?>/assets/js/custom/carousel.js"></script> 

  <!-- INFORMAÇÕES -->

<?php 
if (is_home() ){    
  echo'<title>Portal Etiqueta - Nóticias de Franca e região</title>';
}
?>

<?php
if (is_single() ){    
  if (have_posts() ){
    $post = get_post();
    $thumbnail = get_thumbnail($post->ID);
    $category = get_the_category();
?>

  <title><?php the_title() ?></title>

  <meta name="msapplication-starturl" content="<?php the_permalink() ?>"/>

  <meta itemprop="articleSection" content="<?php $category[0]->slug ?>">

  <meta itemprop="alternativeHeadline" content="<?php the_title() ?>">

  <!-- <meta itemprop="dateModified" content=""> -->
  <!-- <meta itemprop="datePublished" content="<?php //the_date() ?>"> -->
  <meta itemprop="description" content="<?php echo get_field('descricao', $post->ID) ?>">
  <meta itemprop="inLanguage" content="pt-BR">
  <!-- <meta itemprop="genre" content="News"> -->
  <!-- <meta itemprop="keywords" content="TAGS"> -->
  <meta itemprop="thumbnailUrl" content="<?php echo $thumbnail ?>">
  <meta itemprop="image" content="<?php echo $thumbnail ?>">
  <meta itemprop="url" content="<?php echo $thumbnail ?>">

  <!-- META FACEBOOK -->
  <!-- <meta property="fb:pages" content="1339941386139706" /> -->
  <meta property="og:title" content="<?php the_title() ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php the_permalink() ?>" />
  <meta property="og:image" itemprop="image" content="<?php echo $thumbnail ?>" />
  <meta property="og:site_name" content="Portal Etiqueta - Nóticias de Franca e região" />
  <meta property="og:description" content="<?php echo get_field('descricao', $post->ID) ?>" />
  <meta property="og:locale" content="pt_BR" />
  <!-- <meta property="fb:app_id" content="1654745308128965" /> -->

  <!-- META TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@etiquetaoficial">
  <meta name="twitter:creator" content="@etiquetaoficial">
  <meta name="twitter:title" content="<?php the_title() ?>">
  <meta name="twitter:description" content="<?php echo get_field('descricao', $post->ID) ?>">
  <meta name="twitter:image" content="<?php echo $thumbnail ?>">

<?php
      }
    }

?>

</head>

<body <?php body_class(); ?>>

<header>

<nav class="navbar top-menu">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/quem-somos"><img src="<?php template_directory() ?>/assets/images/layout/logo-midia.png"></a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">

      <ul class="nav navbar-nav">
        <li><a href="/revista-etiqueta"><img class="logo-xs" src="<?php template_directory() ?>/assets/images/layout/revista-xs.png"></a></li>
        <li><a href="/portal-etiqueta"><img class="logo-xs" src="<?php template_directory() ?>/assets/images/layout/portal-xs.png"></a></li>
        <li><a href="/tv-etiqueta"><img class="logo-xs" src="<?php template_directory() ?>/assets/images/layout/tv-xs.png"></a></li>
        <li><a href="/etiqueta-eventos"><img class="logo-xs" src="<?php template_directory() ?>/assets/images/layout/eventos-xs.png"></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a class="menu" href="/grupo-etiqueta/servicos/parceiros/">Parceiros</a></li>
        <li><a class="menu" href="<?php template_directory() ?>/assets/pdf/midia_kit.pdf" target="_blank">Mídia KIT</a></li>
        <li><a class="menu" href="/contato">Fale Conosco</a></li>
        <li><a class="menu" href="https://www.facebook.com/RevistaEtiquetaOficial" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
        <li><a class="menu" href="https://www.instagram.com/revistaetiqueta/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a class="menu" href="https://twitter.com/etiquetaoficial" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
      </ul>

    </div> <!-- .nav-collapse -->

  </div> <!-- .container -->
</nav>
<!-- <div class="padding-bottom"></div> -->

<div class="central-menu">
  <div class="container">

    <div class="col-md-3 logo">
     <a href="/"><img src="<?php template_directory() ?>/assets/images/layout/logo.png"></a>
    </div>

    <div class="col-md-3 search">
      <?php get_search_form(); ?>
    </div>

    <div class="col-md-3 previsao">
<?php
    $today = date('Y-m-d');
    $query = $wpdb->get_results('SELECT * FROM pte_clima');

    if($today == $query[0]->data){
      $cidade = $query[0]->cidade;
      $icone = $query[0]->icone;
      $max = $query[0]->max;
      $min = $query[0]->min;
    }else{
      $previsao = clima_tempo();
      $cidade = $previsao['name'];
      $icone = $previsao['data'][0]['text_icon']['icon']['day'];
      $max = $previsao['data'][0]['temperature']['max'];
      $min = $previsao['data'][0]['temperature']['min'];
      $query = $wpdb->query('
                                UPDATE pte_clima SET
                                  cidade = "'.$cidade.'",
                                  icone = "'.$icone.'",
                                  `max` = '.$max.',
                                  `min` = '.$min.',
                                  `data` = "'.$today.'"
                                  where id = 1;
                               ');
        }

        echo 
        '
          <img src='.get_template_directory_uri().'/assets/vendor/climaTempo/'.$icone.'.png'.'>
          <div class="info">
            <span class="title">Franca '.date('d/m').'</span>
            <p>mín.<span class="min">'.$min.'°C</span> máx. <span class="max">'.$max.'°C</span></p>
          </div>
        ';
?>
    </div>

    <div class="col-md-3 box-radar">

<?php  
        include('query.php');
        $count = 0;
        foreach($radares as $radar){
          $ativo = get_field('ativo', $radar->ID);
          if ($ativo == true){
            $count++;
          }
        }
        if ($count > 0) :
?>

      <div class="radar owl-carousel owl-theme">
<?php
          foreach($radares as $radar){
            $ativo = get_field('ativo', $radar->ID);
            if ($ativo == true){
              echo 
                '<div class="item">
                <p class="title-radar">Radar Móvel '.get_field('data', $radar->ID).'</p>
                <p class="rua"><span>'.get_field('rua_km', $radar->ID).'</span></p>
                </div>';
            }
          }
?>
        </div>
      </div>
      <?php endif; ?>
    </div>

  </div> <!-- .container -->
</div> <!-- .central-menu -->

<div class="bottom-menu">
  <nav class="navbar">
    <div class="container">

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">

          <li class="dropdown drop-noticias m-right-2x">
            <a class="button-dropdown" href="/noticias">NOTÍCIAS <span class="caret"></span></a>
            <ul class="dropdown-menu row noticias">
              <li class="col-md-6">
      	        <a href="/agronegocio">AGRONEGÓCIO</a>
                <a href="/arquitetura-e-decoracao">ARQUITETURA E DECORAÇÃO</a>
                <a href="/brasil">BRASIL</a>
                <a href="/cidade">CIDADE</a>
                <a href="/classificados">CLASSIFICADOS</a>
                <a href="/clima">CLIMA</a>
                <a href="/comportamento">COMPORTAMENTO</a>
                <a href="/cotidiano">COTIDIANO</a>
                <a href="/cultura">CULTURA</a>
                <a href="/economia">ECONOMIA</a>
                <a href="/empreendedorismo">EMPREEDEDORISMO</a>
                <a href="/emprego">EMPREGO</a>
                <a href="/encontro">ENCONTRO</a>
                <a href="/entretenimento">ENTRETENIMENTO</a>
                <a href="/erramos">ERRAMOS</a>
                <a href="/especial">ESPECIAL</a>
                <a href="/esporte">ESPORTE</a>
                <a href="/etiquetando">ETIQUETANDO</a>
              </li>
              <li class="col-md-6">
                <a href="/gastronomia">GASTRONOMIA</a>
                <a href="/internet">INTERNET</a>
                <a href="/moda">MODA</a>
                <a href="/mundo">MUNDO</a>
                <a href="/natureza">NATUREZA</a>
                <a href="/negocios">NEGÓCIOS</a>
                <a href="/open-business">OPEN BUSINESS</a>
                <a href="/pet">PET</a>
                <a href="/politica">POLÍTICA</a>
                <a href="/prefeitura">PREFEITURA</a>
                <a href="/publieditorial">PUBLIEDITORIAL</a>
                <a href="/religiao">RELIGIÃO</a>
                <a href="/saude">SAÚDE</a>
                <a href="/seu-dinheiro">SEU DINHEIRO</a>
                <a href="/social">SOCIAL</a>
                <a href="/tecnologia">TECNOLOGIA</a>
                <a href="/turismo">TURISMO</a>
                <a href="/urgente">URGENTE</a>
                <a href="/vida-e-estilo">VIDA E ESTILO</a>
              </li>
            </ul>
          </li>

          <li class="m-right-2x"><a href="/encontro">ENTREVISTAS</a></li>
          <li class="m-right-2x"><a href="/social">SOCIAL</a></li>
          <li class="m-right-2x"><a href="/tv-etiqueta">TV ETIQUETA</a></li>
          <li class="m-right-2x"><a href="/guia-gastronomias">GASTRONOMIA</a></li>

          <li class="dropdown m-right-2x">
            <a href="javascript:()" class="cursor-default">GUIAS <span class="caret"></span></a>
            <ul class="dropdown-menu guias">
              <li class="disabled"><a>EVENTOS</a></li>
              <li class="disabled"><a>CLASSIFICADOS</a></li>
            </ul>
          </li>

          <li class="m-right-2x"><a href="/promocao">PROMOÇÕES</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="anuncie"><a href="/grupo-etiqueta/servicos/anuncie">ANUNCIE</a></li>
        </ul>

      </div> <!-- .nav-collapse -->

    </div> <!-- .container -->
  </nav>
</div> <!-- .central-menu -->

</header>


<script>
$(document).ready(function() {
  $(".dropdown").hover(
    function() {
      $('.dropdown-menu', this).css('opacity', '1');
      $('.dropdown-menu', this).css('visibility', 'visible');
    },
    function() {
      $('.dropdown-menu', this).css('opacity', '0');
      $('.dropdown-menu', this).css('visibility', 'hidden');
    }
  );
});
</script>
