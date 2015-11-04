<?php get_header() ?>

<!-- start main -->


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
          <img title="image title" alt="thumb image" src="<?= wp_get_attachment_url( get_post_thumbnail_id(), 'post_size' ); ?>">
        </div>
        <div class="look-thumb-infos">
          <a href="<?= the_permalink() ?>" class="look-thumb-subtitle">Recette #<?= the_id(); ?></a>
          <a href="<?= the_permalink() ?>" class="look-thumb-title"><?= the_title() ?></a>
        </div>
      </div>
      <?php
        endwhile;
        wp_reset_postdata();
        else:
        ?>

      <h2>Pas de recette.</h2>

      <?php
        endif;
      ?>
    </div>

    <?php 
      get_footer() 
    ?>