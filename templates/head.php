<?php
$site_favicon = get_template_directory_uri().'/dist/images/favicon.png';
if( class_exists('acf') ) : 
	if( get_field('site_favicon', 'option')) {  $site_favicon = get_field('site_favicon', 'option'); } 
endif; 
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="<?php echo $site_favicon; ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo $site_favicon; ?>" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $site_favicon; ?>" />
  <meta name="msapplication-TileImage" content="<?php echo $site_favicon; ?>" />
  <?php wp_head(); ?>
  <link rel='stylesheet' id='custom/css'  href='<?php echo get_template_directory_uri(); ?>/custom.css' type='text/css' media='all' />
  <?php
  	if( class_exists('acf') ) {
		$internal_css = get_field('internal_css', 'option'); 
		if(!empty($internal_css)) : 
			echo '<style type="text/css">'.$internal_css.'</style>';
		endif; 
	}
  ?>
</head>
