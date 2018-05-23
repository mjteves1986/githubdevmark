<?php 
if( get_option('page_on_front') == 0 ) { $front_page_ID = ''; } else { $front_page_ID = get_option( 'page_on_front'); }
$recent_title = __('Some of our recent projects', 'sage');
$recent_desc  = __('From small lot homes to multi dwelling investments, we can do it all', 'sage');
if( class_exists('acf') ) {
  if(!empty(get_field('recent_project_title', $front_page_ID))) {   
    $recent_title = get_field('recent_project_title', $front_page_ID);  
  }
  if(!empty(get_field('recent_project_description', $front_page_ID))) {   
    $recent_desc = get_field('recent_project_description', $front_page_ID);  
  }
}
$args = array( 
    'post_type' => 'projects', 
    'post_status' => array('publish'), 
    'order' => 'DESC', 
    'posts_per_page'=> -1 
  );
  $query = new WP_Query( $args );  
         
if ( $query->have_posts() ) : ?>

  <section id="project" class="section-index">
    <div class="container">
        <div class="text-center">
          <h2><?php echo $recent_title; ?></h2>
          <h4><?php echo $recent_desc; ?></h4>
        </div>
        <div class="row mt-5">
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
        <div class="text-center mt-5">
          <a class="btn btn-default" href="<?php echo esc_url(home_url('/')).'projects'; ?>"><?php echo __('See all projects', 'sage');?></a>
        </div>
    </div>
  </section><?php 

endif; ?>
