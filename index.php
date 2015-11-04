<?php get_header() ?>

<!-- LOGO -->
<a href="#" class="intro-logo">
  <img src="<?= get_template_directory_uri() ?>/assets/medias/images/logo.png" alt="">
</a>


<!-- GENDER -->
<a href="<?= site_url() ?>/gender/homme" class="intro-gender intro-gender-man">
  <span class="intro-gender-button">Recettes homme</span>
</a>
<a href="<?= site_url() ?>/gender/femme" class="intro-gender intro-gender-woman">
  <span class="intro-gender-button">Recettes femme</span>
</a>

<?php get_footer() ?>