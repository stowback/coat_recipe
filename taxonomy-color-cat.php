<?php get_header() ?>

<?php
  $cat = get_the_terms( $post->ID, 'gender-cat' );
  $c = $cat[0]->name;
?>
<!-- start main -->
  <?php require 'partials/filters.php'; ?>
    
    <!-- GRID -->
    <div class="home-grid">  
    <?php

      $cat = get_the_terms( $post->ID, 'color-cat' );
      $c = $cat[0]->name;

      $g = $_COOKIE['gender'];
      if (!$g) {
        $g = "homme";
      }

      $args = array(
        'post_type'   => 'recette',
        'tax_query' => array(
          "relation" => "AND",
          array(
            'taxonomy' => 'color-cat',
            'terms' => $c,
            'field'    => 'slug'
          ),
          array(
            'taxonomy' => 'gender-cat',
            'terms' => $g,
            'field'    => 'slug'
          )
        )
      );
      $posts = new WP_Query( $args );

      if ($posts->have_posts() ) :
        while ($posts->have_posts() ) :  $posts->the_post();
    ?>
      <div class="look-thumb col-md-4">
        <div class="look-thumb-picture">
          <a href="<?= the_permalink() ?>" class="look-thumb-button">Voir</a>
          <img title="image title" alt="thumb image" src="<?= wp_get_attachment_url( get_post_thumbnail_id(), 'post_size' ); ?>">
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