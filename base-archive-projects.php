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

      $archive = get_pages(array(
          'meta_key' => '_wp_page_template',
          'meta_value' => 'archive-projects.php'
      ));

      $query = new WP_Query( array(
        'post_type' => 'projects',//it is a Page right?
        'post_status' => 'publish',
        'posts_per_page'=> -1,
      ));
    ?>

    <?php foreach($archive as $key => $page) : if($key == 0) { ?>
      <div class="wrap container mb-5" role="document">
        <div class="content row">
          <main class="main">
            <?php echo apply_filters( 'the_content', $page->post_content );  ?>
          </main>
        </div>
      </div>
    <?php } endforeach; ?>

    <section id="project" class="section-index">
      <div class="container">
          <div class="row">
              <?php while ($query->have_posts()) : $query->the_post();   ?>
                <div class="col-lg-4">
                  <div class="item">
                    <?php
                    if(has_post_thumbnail()) {  
                      echo '<a href="'.get_the_permalink().'">'.wp_get_attachment_image( get_post_thumbnail_id(), 'thumb-images', false, array('class' => 'img-fluid') ).'</a>';
                    } 
                    ?>
                    <h5><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_the_permalink(); ?>" class="btn btn-tertiary"><?php echo __('View Project', 'sage'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata();  ?>  
          </div>
      </div>
    </section>   


    <?php 
      do_action('get_footer');
      get_template_part('templates/parts/footer-form');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
