<?php /* Template Name: Contact Form */ ?>

<?php get_header(); ?>

<h2 class="add-front-recipe"><?= the_title();?></h2>

<?= do_shortcode('[contact-form-7 id="121" title="Contact"]'); ?>

<?php get_footer(); ?>