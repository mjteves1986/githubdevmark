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
    ?>

    <section id="banner" class="home-banner" role="banner" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/dist/images/Homepage-header-image.jpg'; ?>); ">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1">
            <h1>We don't build your <span>dream</span> home. We work together to create <span>opportunities</span> for your future.</h1>
            <p>Devmark is the leading investment property solution from  the Sunshine to the Gold Coast. Learn about <span>Our Process</span>  or view our recent <span>Projects</span>.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-index">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h2 class="with-border">Built for your future</h2>
          </div>
          <div class="col-md-5 offset-md-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. </p>
          </div>
          <div class="col-md-5">
            <p>Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
          </div>
        </div>
        <div class="column-number mt-5">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="row">
                  <div class="col">
                      <div class="num">19</div>
                      <p>Properties completed</p>
                    </div>
                    <div class="col mt-5">
                      <div class="num">15<span>%</span></div>
                      <p>average return on investment</p>
                    </div>
                    <div class="col">
                      <div class="num">3</div>
                      <p>Awards for building in QLD</p>
                    </div> 
                    <div class="col mt-5">
                      <div class="num">23</div>
                      <p>Queensland locations</p>
                    </div>
                    <div class="col">
                      <div class="num">20</div>
                      <p>Years expereince</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </section>

    <section id="design-review" class="section-index pb-0">
      <div class="inner">
        <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="dark-grey-box">
                  <h2 class="title">Devmark Rapid Design Review</h2>
                  <p>At Devmark, we aim to empower novice property investors with knowledge to get the most out of their plans. Before you submit your building plans away for approval, send them to Devmark for a complimentary Rapid Design Review.</p>
                  <ul class="list-unstyled mb-5">
                    <li>We'll get back to you in 24 hours</li>
                    <li>We'll give you a clear idea of your budget expectations and your plans</li>
                    <li>We'll give you actionable advice on your design to prevent over capitalising </li>
                    <li>There's no obligation to build with us</li>
                  </ul>
                  <a class="btn btn-default mt-3" href="#">Organise Rapid Design Review</a>
                </div>
              </div>
            </div>
        </div>
        <div class="design-review-img">
          <div class="holder">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().'/dist/images/homepage-Rivew-2colimage.jpg'; ?>" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="section-index">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h2 class="with-border">We're invested in your success</h2>
            <p>Aliquam at porttitor sem.  Aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>

            <div class="row mt-5">
              <div class="col-lg-4">
                <div class="mb-2">
                  <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri().'/dist/images/icon-tools.png'; ?>" alt="">
                </div>
                <h3 class="mb-3">We'll work with you no matter the stage of your project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
              <div class="col-lg-4">
                <div class="mb-2">
                  <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri().'/dist/images/explain.png'; ?>" alt="">
                </div>
                <h3 class="mb-3">We don't tell, we explain</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
              <div class="col-lg-4">
                <div class="mb-2">
                  <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri().'/dist/images/space.png'; ?>" alt="">
                </div>
                <h3 class="mb-3">We're masters of maximising space</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php 
      get_template_part('templates/parts/testimonials');    
      get_template_part('templates/parts/recent-project'); 

      do_action('get_footer');
      get_template_part('templates/parts/footer-form');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
