<?php /* Template Name: Add coat */ ?>

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
      'post_type'   => 'coat',
      'post_status'   => 'pending'
    ),
    'submit_value'    => 'Create a new coat'
)); ?>

<?php get_footer(); ?>