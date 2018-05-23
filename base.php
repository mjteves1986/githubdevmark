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

      if( is_page() ) : get_template_part('templates/parts/banner');  endif;

      if ( !is_page_template('template-contact.php') ) :
    ?>

    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php endif;  

      get_template_part('templates/parts/footer-form');
      if ( is_page_template('template-contact.php') ) : 
        get_template_part('templates/parts/google-maps'); 
      endif;


      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
  <?php if ( is_page_template('template-contact.php') ) : ?>
    <script type="text/javascript" defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC59KGdy45eWBWxvS52amfuj6osIsdcs0w"></script>
  <?php endif; ?>
</html>
