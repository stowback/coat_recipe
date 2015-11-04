<?php /* Template Name: Add Recipe */ ?>

<?php 
  acf_form_head();
  get_header(); 
?>

<h2 class="add-front-recipe"><?= the_title();?></h2>

<?php 
  acf_form(array(
    'post_id'   => 'new_post',
    'post_title'  => true,
    'post_content'  => true,
    'new_post'    => array(
      'post_type'   => 'recette',
      'post_status'   => 'pending'
    ),
    'submit_value'    => 'Create a new article'
)); ?>

<?php get_footer(); ?>