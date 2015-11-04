<?php get_header(); ?>

<?php require('partials/breadcrumb.php') ?>

    
    <!-- INFOS -->
    <div class="product-infos col-md-12">
      <div class="product-infos-photos">
<!--         <div class="photos-thumbs">
          <img src="../storage/photo_product_1.jpg" alt="">
          <img src="../storage/photo_product_1.jpg" alt="">
          <img src="../storage/photo_product_1.jpg" alt="">
        </div> -->
        <img class="photos-main" title="image title" alt="thumb image"
        <?php
          $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'look_size' );
        ?>
             src="<?= $img[0] ?>">

      </div>
      <div class="product-infos-content">
        <h1 class="content-title"><?= the_title() ?></h1>
        <a href="<?= get_field('url_du_magasin_en_ligne');?>">Voir sur <?= get_field('nom_du_magasin_en_ligne') ?></a>
      </div>
    </div>


    <!-- LOOKS -->
    <div class="product-looks col-md-12">
      <span class="product-looks-title">Apparait dans : </span>
      <div class="row">
      <?php
      $recipes = get_posts(array(
              'post_type' => 'recette',
              'meta_query' => array(
                array(
                  'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                  'compare' => 'LIKE'
                )
              )
            ));

            ?>
            <?php if( $recipes ): ?>
              <?php foreach( $recipes as $recipe ): ?>
                    <div class="look-thumb col-md-4">
                      <div class="look-thumb-picture">
                        <a href="<?= get_permalink($recipe) ?>" class="look-thumb-button">Voir</a>
                        <?= get_the_post_thumbnail($recipe->ID, 'coat_recipe'); ?>
                      </div>
                      <div class="look-thumb-infos">
                        <a href="<?= get_permalink($recipe) ?>" class="look-thumb-subtitle">Recette #<?= $recipe->ID; ?></a>
                        <a href="<?= get_permalink($recipe) ?>" target="_blank" class="look-thumb-title"><?= get_the_title( $recipe->ID ); ?></a>
                      </div>
                    </div>
              <?php endforeach; ?>
            <?php endif; ?>
      </div>
    </div>

<?php get_footer(); ?>