<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
      get_template_part('templates/parts/banner');

      get_template_part('templates/parts/footer-form');
      get_template_part('templates/parts/google-maps');

      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
  <script type="text/javascript" defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC59KGdy45eWBWxvS52amfuj6osIsdcs0w"></script>
</html>
