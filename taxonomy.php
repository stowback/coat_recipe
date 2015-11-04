<?php get_header() ?>

<?php
  $cat = get_the_terms( $post->ID, 'gender-cat' );
  $c = $cat[0]->name;
?>
<!-- start main -->
    <!-- WEEK LOOK -->
    <?php
      $args = array(
        'numberposts' => -1,
        'post_type'   => 'recette',
        'tax_query' => array(
          array(
            'taxonomy' => 'gender-cat',
            'terms' => $c,
            'field'    => 'slug',
            'compare' => '='
          )
        ),
        'meta_query'  => array(
          'relation'    => 'AND',
          array(
            'key'   => 'article_de_la_semaine',
            'value'   => true,
            'compare' => '='
          )
        )
      );
      $q = new WP_Query( $args );
    ?>
    <?php if( $q->have_posts() ): ?>

    <?php while ( $q->have_posts() ) : $q->the_post(); ?>
      <a href="<?= the_permalink(); ?>" class="home-main-look col-md-12">
      <div class="look-infos">
        <span class="look-infos-subtitle">Recette-style de la semaine #<?= the_id() ?></span>
        <span class="look-infos-title"><?= the_title() ?></span>
      </div>
      <?php 
        $img = get_field('image_de_la_semaine');
        $size = 'week_size';
        $thumb = $img['sizes'][ $size ];
        $width = $img['sizes'][ $size . '-width' ];
        $height = $img['sizes'][ $size . '-height' ];
      ?>
      <img class="look-background" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
    </a>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php require 'partials/filters.php'; ?>
    
    <!-- GRID -->
    <div class="home-grid">  
    <?php
      $cat = get_the_terms( $post->ID, 'gender-cat' );
      $c = $cat[0]->name;
      $args = array(
        'post_type'   => 'recette',
        'tax_query' => array(
          array(
            'taxonomy' => 'gender-cat',
            'terms' => $c,
            'field'    => 'slug',
            'compare' => '='
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