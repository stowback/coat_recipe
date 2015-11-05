<?php
  $gender = get_the_terms( $post->ID, 'gender-cat' );
  $gen = strtolower($gender[0]->name);

  if ($gen) {
    setcookie("gender",$gen, time()+ 3600 *24, COOKIEPATH, COOKIE_DOMAIN, false);
  } else {
    $gen = $_COOKIE['gender'];
  }
?>
<!DOCTYPE html>
<html lang="fr">


<head>

  <!-- METAS -->
  <meta charset="UTF-8">
  <title>Home</title>

  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/style.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/custom.css">
  <?php wp_head(); ?>

  <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/favicon.ico.png" />

</head>
<?php
  if (is_single() && get_post_type() != "coat") {
    $classBody = 'page-look';
  } else if (is_archive() || is_search() || is_page()) {
    $classBody = 'page-home';
  } else if(get_post_type() == "coat") {
    $classBody = 'page-product';
  } else {
    $classBody = 'page-intro';
  }
?>
<body class="<?= $classBody ?> container" data-url="<?= $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">

  <!-- HEADER -->
  <?php if ($classBody != 'page-intro'): ?>
    
  
  <header class="header">
    
    <!-- LOGO -->
    <a href="<?= get_site_url() ?>" class="header-logo">
      <img src="<?= get_template_directory_uri() ?>/assets/medias/images/logo.png" alt="">
    </a>
  
    <div class="search">
      <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Recherche"/>
      </form>
    </div>

    <!-- SWITCH -->
    <div class="header-gender-switch switch <?= ($gen == "homme") ? "active-left" : "active-right" ?>">
      <a href="<?= get_site_url(); ?>/gender/homme" class="switch-label switch-label-left" data-value="homme">Homme</a>
      <span class="switch-input"></span>
      <a href="<?= get_site_url(); ?>/gender/femme" class="switch-label switch-label-right" data-value="femme">Femme</a>
      <input value="<?= $gen ?>" type="hidden" class="switch-value"/>
    </div>

    <!-- NAVIGATION -->
    <nav class="header-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

  </header>

  <!-- MAIN -->
  <main class="main">
  <?php endif ?>