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
      get_template_part('templates/parts/banner'); 
    ?>

    <section class="section-index pb-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1">
            <h2 class="font-weight-normal">We empower our clients to make the most of their investment build - enabling them to make confident build decision during the project and in the future.</h2>
            <div class="name-position my-4">
              <h5>Team Member</h5>
              <h6>Director</h6>
            </div>
            <p>Devmark Projects’ business model is to work closely with developers as a trusted project partner, where your success is our principal objective. We are focused on and committed to adding value to your project.</p>
          </div>
          <div class="col-lg-4">
            <img class="img-fluid" src="<?php echo get_template_directory_uri().'/dist/images/Image-of-Quoter.png'; ?>" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="section-index decorative-bg1">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h2 class="with-border text-center">Our Philosophy</h2>
            <h5 class="text-center font-weight-normal">Devmark Projects’ business model is to work closely with developers as a trusted project partner, where your success is our principal objective. We are focused on & committed to adding value to your development project.</h5>
            <div class="row pt-5 my-5">
              <div class="col-lg-6  d-flex align-items-start flex-column">
                <div class="mb-5">
                  <h5>We want you to maximise your investment</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                </div>
                <div class="mt-auto">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri().'/dist/images/our-philosophy-image-02.jpg'; ?>" alt=""> 
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-end flex-column">
                <div class="mb-5">
                  <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri().'/dist/images/our-philosophy-image-01.png'; ?>" alt="">
                </div>
                <div class="mt-auto">
                  <h5>Sustainability is part of our process</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                </div>
              </div>
            </div>
            <div class="row pt-5">
              <div class="col-lg-6">
                <h5>Systems for Success</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
              </div>
              <div class="col-lg-6">
                <img class="img-fluid" src="<?php echo get_template_directory_uri().'/dist/images/our-philosophy-image-03.png'; ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-index">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h2 class="with-border">We do things differently at Devmark</h2>
            <h5 class="font-weight-normal">Aliquam at porttitor sem.  Aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</h5>

            <div class="row mt-5">
              <div class="col-lg-4">
                <div class="mb-2">
                  <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri().'/dist/images/partner.png'; ?>" alt="">
                </div>
                <h3 class="mb-3">We're building partners</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
              <div class="col-lg-4">
                <div class="mb-2">
                  <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri().'/dist/images/quality.png'; ?>" alt="">
                </div>
                <h3 class="mb-3">Best value, best quality</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
              <div class="col-lg-4">
                <div class="mb-2">
                  <img class="img-fluid mb-4" src="<?php echo get_stylesheet_directory_uri().'/dist/images/invest.png'; ?>" alt="">
                </div>
                <h3 class="mb-3">Investment is our speciality</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php  get_template_part('templates/parts/testimonials2'); ?>

    <section id="team" class="section-index">
      <div class="container">
          <h2 class="text-center">The team behind your success</h2>
          <h5 class="text-center font-weight-normal">When you partner with us, we're with you every step of the way</h5>
          <div class="row mt-5">
            <div class="col-lg-7">
              <div class="row"> 
                <div class="col-lg-3">
                  <div class="avatar"><img class="img-fluid" src="<?php echo get_template_directory_uri().'/dist/images/Team-01.jpg'; ?>" alt="">
                </div>
                </div>
                <div class="col-lg-9">
                  <div class="name-position mb-3">
                    <h5 class="pl-0">Team Member Name</h5>
                    <h6 class="pl-0">Position</h6>
                  </div>
                  <p>Lorem ipsum dolor sit amet , consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed. Lorem ipsum dolor sit   amet , consectetur adipiscing elit . Aliquam at porttitor sem.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h6>Accreditations</h6>
              <ul class="list-unstyled bullet-blue">
                <li>XX years industry experience</li>
                <li>Consectetur adipiscing elit</li>
                <li>XX years industry experience</li>
                <li>Consectetur adipiscing elit</li>
              </ul>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-7">
              <div class="row"> 
                <div class="col-lg-3">
                  <div class="avatar"><img class="img-fluid" src="<?php echo get_template_directory_uri().'/dist/images/Team-02.jpg'; ?>" alt="">
                </div>
                </div>
                <div class="col-lg-9">
                  <div class="name-position mb-3">
                    <h5 class="pl-0">Team Member Name</h5>
                    <h6 class="pl-0">Position</h6>
                  </div>
                  <p>Lorem ipsum dolor sit amet , consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed. Lorem ipsum dolor sit   amet , consectetur adipiscing elit . Aliquam at porttitor sem.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h6>Accreditations</h6>
              <ul class="list-unstyled bullet-blue">
                <li>XX years industry experience</li>
                <li>Consectetur adipiscing elit</li>
                <li>XX years industry experience</li>
                <li>Consectetur adipiscing elit</li>
              </ul>
            </div>
          </div>
      </div>
    </section>
    

    
    <?php
      get_template_part('templates/parts/faq');
      
      do_action('get_footer');
      get_template_part('templates/parts/footer-form');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
