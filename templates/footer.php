<?php
    $footer_text = __( '&copy; ', 'sage').''.get_the_date('Y ').''.get_bloginfo('name');
    $footer_logo = get_template_directory_uri().'/dist/images/footer-logo.png';
    $other_logos = get_template_directory_uri().'/dist/images/HIA-logo.png';


    if( class_exists('acf') ) {
        if( get_field('footer_text', 'option')) {   
        	$footer_text = get_field('footer_text', 'option');  
        }

        if(!empty(get_field('footer_logo', 'option'))) {   
        	$footer_logo = get_field('footer_logo', 'option');  
        }

        if(!empty(get_field('other_logos', 'option'))) {   
        	$other_logos2 = get_field('other_logos', 'option');  
        }
    } 
?>

<footer id="footer">
	<div class="widgets">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<img class="img-fluid" width="161" src="<?php echo $footer_logo; ?>" alt="">
				</div>
				<div class="col-lg-8">
					<nav class="nav-footer text-center">
				      <?php
				      if (has_nav_menu('footer_navigation')) :
				        wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav d-inline-flex']);
				      endif;
				      ?>
				    </nav>
				</div>
				<div class="col-lg-2">
					<div class="align-items-center text-center">
						<?php 
						if ( !empty( $other_logos2 ) ) :
							foreach ( $other_logos2 as $logo ) : ?>
								<div class="d-inline-block">
									<img class="img-fluid" src="<?php echo $logo['other_logo']; ?>" alt="">
								</div>
							<?php endforeach; ?>
						<?php else: ?>
							<div class="d-inline-block">
								<img class="img-fluid" src="<?php echo $other_logos; ?>" alt="">
							</div>
							<div class="d-inline-block">
								<img class="img-fluid" width="96" height="40" src="<?php echo get_template_directory_uri().'/dist/images/Master-Builder.png'?>" alt="">
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
  	<div class="credits text-center">
    	<div class="container"><p><?php echo $footer_text;?></p></div>
  	</div>
</footer>
