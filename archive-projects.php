<?php

/**
 * Template Name: Archive Projects
 * Template Post Type: projects
 * 
 **/

$archive = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'archive-projects.php'
));

$query = new WP_Query( array(
	'post_type' => 'projects',//it is a Page right?
	'post_status' => 'publish',
	'posts_per_page'=> -1,
	'order' => 'ASC',
	'orderby' => 'name',
	'meta_query' => array(
	    array(
	        'key' => '_wp_page_template',
	        'value' => 'template-categories.php', // template name as stored in the dB
	    )
	)
));

foreach($archive as $key => $page) :
	if($key == 0) {

		if( has_post_thumbnail($page->ID) ) : 
			echo wp_get_attachment_image( get_post_thumbnail_id($page->ID), 'page-featured', false, array('class' => 'img-fluid') );
		endif;
		?>

		<div class="entry_content">
			<?php echo apply_filters( 'the_content', $page->post_content );  ?>
		</div>

		<div class="entry_content three list_post">
			<h3><?php echo __('Find more in', 'sage').' '.$page->post_title; ?></h3>
			<div id="archive">
				<div class="category_post">
					<div class="row">
						<?php while( $query->have_posts() ): $query->the_post();  ?> 
							<div class="col-md-4 col-sm-6">
								<div class="img">
									<a href="<?php echo get_the_permalink(); ?>">
										<?php 
					                      	if( has_post_thumbnail() ) { 
					                        	echo wp_get_attachment_image( get_post_thumbnail_id(get_the_ID()), 'blog-img', false, array('class' => 'img-fluid'));
						                    } else {
						                        echo '<img class="img-fluid" src="'.get_template_directory_uri().'/dist/images/blog-img1.jpg">';
						                    } 
					                    ?>
									</a>
								</div>
								<div class="item">
									<a href="<?php echo get_the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
									<p><?php echo get_the_excerpt(); ?></p>
									<div class="moreinfo">
										<div class="row"><div class="col-6"></div>
											<div class="col-6">
												<a class="btn btn-default" href="<?php echo get_the_permalink(); ?>"><?php echo __('Read more', 'sage');?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata();  ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
endforeach;
?>

