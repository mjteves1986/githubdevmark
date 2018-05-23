<?php 
$banner_img = '';
$title = get_the_title();
if( class_exists('acf') ) :
	if( !empty( get_field( 'banner_title', get_the_ID() ) ) ) {
		$title = get_field( 'banner_title', get_the_ID() );
	}
	if( !empty( get_field( 'banner_image', get_the_ID() ) ) ) {
		$image = get_field('banner_image', get_the_ID());
		$image_array = wp_get_attachment_image_src( $image, 'banner', false );
		$banner_img = $image_array[0];

	}
endif;


//if( !empty( get_field( 'banner_enable', get_the_ID() ) ) ) : ?>
<section id="banner"<?php echo (!empty($banner_img) ? 'style="background-image: url('.$banner_img.');"' : '');?>>
	<div class="container">
		<div class="page-title"><h1><?php echo $title; ?></h1></div>
	</div>
</section> 
<?php //endif; ?>