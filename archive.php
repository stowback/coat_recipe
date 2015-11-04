<?php get_header() ?>

<!-- start main -->
    <!-- WEEK LOOK -->
    <a href="#" class="home-main-look col-md-12">
      <div class="look-infos">
        <span class="look-infos-subtitle">Recette-style de la semaine #44</span>
        <span class="look-infos-title">Urbaine & Stylée</span>
      </div>
      <img class="look-background" src="../storage/banner_look_1.jpg">
    </a>


    <?php require 'partials/filters.php'; ?>
    
    <!-- GRID -->
    <div class="home-grid">  
    <?php

      if (have_posts() ) :
        while (have_posts() ) :  the_post();
    ?>
      <div class="look-thumb col-md-4">
        <div class="look-thumb-picture">
          <a href="<?= the_permalink() ?>" class="look-thumb-button">Voir</a>
          <img title="image title" alt="thumb image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
        </div>
        <div class="look-thumb-infos">
          <a href="<?= the_permalink() ?>" class="look-thumb-subtitle">Recette #<?= the_id() ?></a>
          <a href="<?= the_permalink() ?>" class="look-thumb-title"><?= the_title() ?></a>
        </div>
      </div>
      <?php
        endwhile;
        wp_reset_postdata();
        endif;
      ?>
    </div>

    <?php 
      get_footer() 
    ?>
