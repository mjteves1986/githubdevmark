<?php 
$args = array( 
    'post_type' => 'testimonials', 
    'post_status' => array('publish'), 
    'order' => 'DESC', 
    'posts_per_page'=> -1 
  );
  $query = new WP_Query( $args );  

if ( $query->have_posts() ) : ?>
	<section id="testimonials" class="section-index py-0 three-column extra-width">
		<div class="container px-0"> 
			<div class="carousel-wrapper"> 
				<h2 class="mb-4 text-center">Our partnerships are who we are</h2>
				<h5 class="mb-5 text-center font-weight-normal">We prefer to let the success of our clients speak for themselves</h5>

				<div class="owl-carousel owl-column"> <?php $location = ''; // default 

					while ($query->have_posts()) : $query->the_post();  
						if( class_exists('acf') ) {
							if(!empty(get_field('testimonials_location', get_the_ID()))) {   
					        	$location = get_field('testimonials_location', get_the_ID());  
					        }
					    } 
						?>
						<div class="item">
			                <div class="white-box">
			                    <?php the_content(); ?>
			                    <h5 class="name"><?php echo get_the_title(); ?></h5>
			                    <h6><?php echo $location; ?></h6>
		                  	</div>
						</div><?php 
					endwhile; wp_reset_postdata();  ?> 

				</div>
			</div>
		</div>
	</section>  <?php 
endif; ?>