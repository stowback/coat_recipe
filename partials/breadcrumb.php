<!-- BREADCRUMB -->
    <ul class="breadcrumb col-md-12">
      <li><a href="<?= site_url(); ?>">Accueil</a></li>
      <li><a href="<?= site_url() ?>/gender/<?= $_COOKIE['gender']; ?>">Les recettes</a></li>
      <?php 
        $cat = wp_get_post_terms($post->ID, 'gender-cat');

        if ($cat) :
      ?>
      <li><a href="<?= site_url(); ?>/gender/<?= $cat[0]->name ?>"><?= $cat[0]->name; ?></a></li>
    <?php endif; ?>
      <li><a href="<?= the_permalink(); ?>"><?= the_title();?></a></li>
    </ul>