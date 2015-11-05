<?php get_header(); ?>

  <?php require('partials/breadcrumb.php') ?>


    <!-- PHOTO -->
    <?php the_post_thumbnail( 'front_image', array('class'=>'look-photo col-md-5') ); ?>


    <!-- CONTENT -->
    <div class="look-content col-md-6 col-md-offset-1">
      <h1 class="look-content-title"><?= the_title();?></h1>
      <h2 class="look-content-subtitle">Recette #<?= the_id(); ?></h2>
      <div class="look-content-actions">
        <a onclick="twitterShare()" class="color-twitter"><i class="fa fa-twitter"></i><span>-</span></a>
        <!-- <a href="#" class="color-like"><i class="fa fa-heart"></i><span>-</span></a> -->
        <a href="javascript:fbShare('<?= $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>', '<?= the_title() ?>', 'Trouver vos ensembles', 'http://goo.gl/dS52U', 520, 350)" class="color-facebook"><i class="fa fa-facebook"></i><span>-</span></a>
      </div>
      <div class="look-content-text"><?= $post->post_content; ?></div>
      <div class="look-content-tags">
        <span class="tags-title">Tags :</span>
        <?php the_taxonomies(array(
            'before' => '<span>',
            //this is the default
            'sep' => ' ',
            'after' => '</span>',
            //this is the default
            'template' => '<a href="%s">#%l</a>'
        )) ?>
       
      </div>
    </div>

    <!-- SIMILARS -->
    <div class="look-similars col-md-12">
      <div class="row">
      <?php 
        $posts = get_field('premier');
        if( $posts ): 
        foreach( $posts as $post):
        ?>
          <?php setup_postdata($post); ?>
          <div class="product-thumb col-md-3">
            <?php the_post_thumbnail( 'coat_size', array('class'=>'product-thumb-photo') ); ?>
            <a href="<?= the_permalink() ?>" class="product-thumb-title"><?php the_title(); ?></a>
            <a href="<?= the_permalink() ?>" >Fiche article</a>
            <a href="<?= get_field('url_du_magasin_en_ligne') ?>" target="_blank">Voir sur <?= get_field('nom_du_magasin_en_ligne') ?></a>
          </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      </div>
    </div>

<?php get_footer(); ?>