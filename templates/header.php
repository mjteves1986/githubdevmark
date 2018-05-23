<?php
$site_logo = '<img src="'.get_template_directory_uri().'/dist/images/logo.png" alt="">';
if( class_exists('acf') ) : 
  $acf_logo = get_field('site_logo', 'option'); 
  if(!empty($acf_logo)) : 
    $site_logo = wp_get_attachment_image( $acf_logo, 'logo-image-size', false, array('class' => 'img-fluid') ); 
  endif;
endif;

?>
<header class="header">
  <!-- Site Overlay -->
  <div class="site-overlay"></div>
  <!-- Pushy Menu -->
  <div class="pushy pushy-right">
      <div class="pushy-content">
        <a href="#menu" id="toggle" class="navbar-toggle menu-btn collapsed d-lg-none on"><span></span></a><br>
          <?php
        if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation']);
        endif;
        ?> 
      </div>
  </div>
  <div class="desktop-menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-8 col-10 text-left">
          <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo $site_logo; ?></a>
          </div>
        </div>
        <div class="col-lg-9 col-md-4 col-2 align-self-center">
          <a href="#menu" id="toggle" class="navbar-toggle menu-btn collapsed d-lg-none"><span></span></a>
          <nav class="navbar-expand-md d-lg-block d-none">
          <div class="collapse navbar-collapse" id="MainMenu">
            <?php
              if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'ml-auto','menu_class' => 'navbar-nav']);
              endif;
              ?>
          </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

