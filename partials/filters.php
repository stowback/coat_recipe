    <!-- FILTERS -->
    <div class="home-filters col-md-12">
      <div class="dropdown dropdown-colors">
        <span class="dropdown-label">
          <i></i>Couleurs
        </span>
        <ul class="dropdown-items">
        <?php $colors = get_terms(array('color-cat')); ?>
        <?php foreach ($colors as $color): ?>
          <?php $c = hex2rgb(get_field('color', $color)); ?>

          <li><a href="<?= get_search_link($color->slug); ?>"><i style="border-color: <?= the_field('color', $color); ?>; background-color: rgba(<?= $c[0] ?>, <?= $c[1] ?>, <?= $c[2] ?>, 0);"></i><?= $color->name ?></a></li>
        <?php endforeach ?>
        </ul>
      </div>
      <div class="dropdown dropdown-events">
        <span class="dropdown-label">Evènements
        </span>
        <ul class="dropdown-items">
          <?php $themes = get_terms(array('theme-cat')); ?> 
          <?php foreach ($themes as $theme): ?>
            <li><a href="<?= get_search_link($theme->slug); ?>"><?= $theme->name ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>