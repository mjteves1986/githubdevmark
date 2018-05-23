<?php
$args = array( 
    'post_type' => 'faq', 
    'post_status' => array('publish'), 
    'order' => 'DESC', 
    'posts_per_page'=> -1 
  );
  $query = new WP_Query( $args );  
         
if ( $query->have_posts() ) : ?>

<section id="faq" class="section-index">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <h2 class="text-center mb-5">Frequently asked questions</h2>
        <div id="accordion">


          <?php while ($query->have_posts()) : $query->the_post();   ?>
            <div class="card">
              <a class="collapsed card-header" data-toggle="collapse" data-target="#collapse<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php echo get_the_ID(); ?>"><?php echo get_the_title(); ?></a>
              
              <div id="collapse<?php echo get_the_ID(); ?>" class="collapse" aria-labelledby="heading<?php echo get_the_ID(); ?>" data-parent="#accordion">
                <div class="card-body"><?php the_content(); ?></div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata();  ?>  



        </div>
        <div class="text-center mt-5">
          <a class="btn btn-default" href="<?php echo esc_url(home_url('/')).'faq'; ?>"><?php echo __('View all FAQs', 'sage');?></a>
        </div>

      </div>
    </div>
  </div>
</section><?php 

endif; ?>