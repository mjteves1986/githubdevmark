<?php 
$args = array( 
    'post_type' => 'testimonials', 
    'post_status' => array('publish'), 
    'order' => 'DESC', 
    'posts_per_page'=> -1 
  );
  $query = new WP_Query( $args );  

if ( $query->have_posts() ) : ?>
	<section id="testimonials" class="section-index extra-width">
		<div class="container px-0"> 
			<div class="owl-carousel owl-main"><?php  $testimonial_img = ''; $location = ''; // default 

				while ($query->have_posts()) : $query->the_post();  
					if( class_exists('acf') ) {
						if(!empty(get_field('testimonials_location', get_the_ID()))) {   
				        	$location = get_field('testimonials_location', get_the_ID());  
				        }
				        if(!empty(get_field('testimonials_background', get_the_ID()))) {   
				        	$background_id = get_field('testimonials_background', get_the_ID());  
				        }
				        $testimonial_images_array = wp_get_attachment_image_src( $background_id, 'testimonials-img', false );
						$testimonial_img = $testimonial_images_array[0];
				    } 
					?>
					<div class="item"<?php echo (!empty($testimonial_img) ? 'style="background-image: url('.$testimonial_img.');"' : '');?>>
						<div class="row">
			              <div class="col-lg-6 offset-lg-3">
			                  <div class="white-box">
			                    <?php the_content(); ?>
			                    <h5 class="name"><?php echo get_the_title(); ?></h5>
			                    <h6><?php echo $location; ?></h6>
			                  </div>
			              </div>
			            </div>
					</div><?php 
				endwhile; wp_reset_postdata();  ?> 

			</div>
		</div>
	</section>  <?php 
endif; ?>