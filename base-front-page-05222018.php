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
                  <svg width="94" height="90" viewBox="0 0 94 90" version="1.1" xmlns="http://www.w3.org/2000/svg"><title>Icon-tools</title><g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Criteria-/-Image-/-100-/-stage" transform="translate(-3 -5)"><g id="Icon-tools"><path id="background" d="M0 0h100v100H0z"/><g id="Page-1" transform="translate(5 7)" stroke="#0096FF" stroke-linejoin="round" stroke-width="3"><path d="M9.783 54.783c0-.53-1.896-.803-3.111-.803A6.671 6.671 0 0 0 0 60.652V11.74c0-3.684 2.986-5.87 6.672-5.87 1.215 0 3.11.576 3.11 1.957v46.957z" id="Stroke-1"/><path d="M80.218 54.783c0-.53 1.895-.803 3.11-.803A6.671 6.671 0 0 1 90 60.652V11.74c0-3.684-2.985-5.87-6.672-5.87-1.215 0-3.11.576-3.11 1.957v46.957z" id="Stroke-3"/><path d="M54.783 13.696H11.739" id="Stroke-5"/><path d="M78.261 13.696h-9.783" id="Stroke-7"/><path d="M90 60.652a7.826 7.826 0 0 1-7.826 7.826H7.826A7.826 7.826 0 0 1 0 60.652" id="Stroke-9"/><path id="Stroke-11" d="M17.609 50.87v1.956h52.826V0h-1.957z"/><path d="M60.652 46.957v5.87" id="Stroke-13"/><path d="M50.87 46.957v5.87" id="Stroke-15"/><path d="M41.087 46.957v5.87" id="Stroke-17"/><path d="M31.305 46.957v5.87" id="Stroke-19"/><path id="Stroke-21" d="M58.696 25.435h1.956v15.652H45V39.13z"/><path id="Stroke-23" d="M76.305 86.087h3.913l7.826-4.882-7.826-4.9h-3.913"/><path id="Stroke-25" d="M78.261 76.304H9.783v9.783H78.26"/><path d="M76.305 86.087v-9.783" id="Stroke-27"/><path d="M9.783 76.304h-5.87c-1.08 0-1.956.877-1.956 1.957v5.87c0 1.08.876 1.956 1.956 1.956h5.87" id="Stroke-29"/></g></g></g></g></svg>
                </div>
                <h3>We'll work with you no matter the stage of  your project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
              <div class="col-lg-4">
                <div class="mb-2">
                  <svg width="94" height="90" viewBox="0 0 94 90" version="1.1" xmlns="http://www.w3.org/2000/svg"><title>Icon-tools</title><g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Criteria-/-Image-/-100-/-stage" transform="translate(-3 -5)"><g id="Icon-tools"><path id="background" d="M0 0h100v100H0z"/><g id="Page-1" transform="translate(5 7)" stroke="#0096FF" stroke-linejoin="round" stroke-width="3"><path d="M9.783 54.783c0-.53-1.896-.803-3.111-.803A6.671 6.671 0 0 0 0 60.652V11.74c0-3.684 2.986-5.87 6.672-5.87 1.215 0 3.11.576 3.11 1.957v46.957z" id="Stroke-1"/><path d="M80.218 54.783c0-.53 1.895-.803 3.11-.803A6.671 6.671 0 0 1 90 60.652V11.74c0-3.684-2.985-5.87-6.672-5.87-1.215 0-3.11.576-3.11 1.957v46.957z" id="Stroke-3"/><path d="M54.783 13.696H11.739" id="Stroke-5"/><path d="M78.261 13.696h-9.783" id="Stroke-7"/><path d="M90 60.652a7.826 7.826 0 0 1-7.826 7.826H7.826A7.826 7.826 0 0 1 0 60.652" id="Stroke-9"/><path id="Stroke-11" d="M17.609 50.87v1.956h52.826V0h-1.957z"/><path d="M60.652 46.957v5.87" id="Stroke-13"/><path d="M50.87 46.957v5.87" id="Stroke-15"/><path d="M41.087 46.957v5.87" id="Stroke-17"/><path d="M31.305 46.957v5.87" id="Stroke-19"/><path id="Stroke-21" d="M58.696 25.435h1.956v15.652H45V39.13z"/><path id="Stroke-23" d="M76.305 86.087h3.913l7.826-4.882-7.826-4.9h-3.913"/><path id="Stroke-25" d="M78.261 76.304H9.783v9.783H78.26"/><path d="M76.305 86.087v-9.783" id="Stroke-27"/><path d="M9.783 76.304h-5.87c-1.08 0-1.956.877-1.956 1.957v5.87c0 1.08.876 1.956 1.956 1.956h5.87" id="Stroke-29"/></g></g></g></g></svg>
                </div>
                <h3>We don't tell, we explain</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.</p>
              </div>
              <div class="col-lg-4">
                <div class="mb-2">
                  <svg width="94" height="90" viewBox="0 0 94 90" version="1.1" xmlns="http://www.w3.org/2000/svg"><title>Icon-tools</title><g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Criteria-/-Image-/-100-/-stage" transform="translate(-3 -5)"><g id="Icon-tools"><path id="background" d="M0 0h100v100H0z"/><g id="Page-1" transform="translate(5 7)" stroke="#0096FF" stroke-linejoin="round" stroke-width="3"><path d="M9.783 54.783c0-.53-1.896-.803-3.111-.803A6.671 6.671 0 0 0 0 60.652V11.74c0-3.684 2.986-5.87 6.672-5.87 1.215 0 3.11.576 3.11 1.957v46.957z" id="Stroke-1"/><path d="M80.218 54.783c0-.53 1.895-.803 3.11-.803A6.671 6.671 0 0 1 90 60.652V11.74c0-3.684-2.985-5.87-6.672-5.87-1.215 0-3.11.576-3.11 1.957v46.957z" id="Stroke-3"/><path d="M54.783 13.696H11.739" id="Stroke-5"/><path d="M78.261 13.696h-9.783" id="Stroke-7"/><path d="M90 60.652a7.826 7.826 0 0 1-7.826 7.826H7.826A7.826 7.826 0 0 1 0 60.652" id="Stroke-9"/><path id="Stroke-11" d="M17.609 50.87v1.956h52.826V0h-1.957z"/><path d="M60.652 46.957v5.87" id="Stroke-13"/><path d="M50.87 46.957v5.87" id="Stroke-15"/><path d="M41.087 46.957v5.87" id="Stroke-17"/><path d="M31.305 46.957v5.87" id="Stroke-19"/><path id="Stroke-21" d="M58.696 25.435h1.956v15.652H45V39.13z"/><path id="Stroke-23" d="M76.305 86.087h3.913l7.826-4.882-7.826-4.9h-3.913"/><path id="Stroke-25" d="M78.261 76.304H9.783v9.783H78.26"/><path d="M76.305 86.087v-9.783" id="Stroke-27"/><path d="M9.783 76.304h-5.87c-1.08 0-1.956.877-1.956 1.957v5.87c0 1.08.876 1.956 1.956 1.956h5.87" id="Stroke-29"/></g></g></g></g></svg>
                </div>
                <h3>We're masters of maximising space</h3>
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
      get_template_part('templates/parts/footer-form');

      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
