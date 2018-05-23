<?php
/**
 * Template Name: About us Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
