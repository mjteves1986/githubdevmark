/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        var map = null;
        $(document).ready(function(){
          $('#googleMap').each(function(){
            map = new_map( $(this) );
          });
        });

        // JavaScript to be fired on all pages 
        $('#menu-toggle').click(function () {
            $(this).toggleClass('open');
        });

        var nScrollStart = 0;
        $(document).scroll(function() {
          nScrollStart = $(this).scrollTop();
          if (nScrollStart >= 1) {
            $("#header").addClass("fixed");
            $(".desktop-menu").addClass("fixed");
          } else {
            $("#header").removeClass("fixed");
            $(".desktop-menu").removeClass("fixed");
          }
        });

        $('a[href*=#]:not([href=#])').click(function() {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
          if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
          }
        });

        //Start the EqualHeight Function 
        function updateViewportDimensions() {
            var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
            return { width:x,height:y };
        }
        // setting the viewport width
        var viewport = updateViewportDimensions();

        var waitForFinalEvent = (function () {
            var timers = {};
            return function (callback, ms, uniqueId) {
                if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
                if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
                timers[uniqueId] = setTimeout(callback, ms);
            };
        })();
        
        // how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
        var timeToWaitForLast = 100;
        
        /*
         * Set the same height for elements
        */
        $.fn.equalHeights = function(per_row) {
            var currentTallest  = 0,
                $this           = $(this);

            function mapCallback(item) {
                currentTallest  = 0;
                $(this).css({'min-height': '1px'});
                if ($(this).outerHeight() > currentTallest) {
                    currentTallest = $(this).outerHeight();
                } 
                return {
                    currentTallest : item[0],
                };
            } 

            if (per_row) {
                for (var i=0; i<$this.length; i=i+per_row) {
                    currentTallest  = 0;
                    $this.slice(i, i+per_row).each(mapCallback);
                    $this.slice(i, i+per_row).css({'min-height': currentTallest});
                }
            } else {
                $this.each(function(){
                    $(this).css({'min-height': '1px'});
                    if ($(this).outerHeight() > currentTallest) {
                        currentTallest = $(this).outerHeight();
                    }
                });
            
                $this.css({'min-height': currentTallest});
            }
            return this;
        };

        /*
         * Put all your regular jQuery in here.
        */
        $(document).ready(function($) {
           // Make elements the same min-height
           $('#project .item h5').equalHeights();
        }); /* end of as page load scripts */
        
        $(window).load(function() {
            // Make elements the same min-height 
            $('#project .item h5').equalHeights();
        });
        
        // Fire needed update on window resize
        $(window).resize(function () {
            waitForFinalEvent( function() {
                $('#project .item h5').equalHeights();
            }, timeToWaitForLast, "homepage_update_fn");
        });

        var owlTestimonial = $(".owl-main");
        owlTestimonial.owlCarousel({
            autoplay: 3000,
            items: 1, // THIS IS IMPORTANT 
            slideSpeed: 300,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            touchDrag: false,
            mouseDrag: false,
            autoplayHoverPause: true, // Stops autoplay
            nav: true,
            loop: true,
            singleItem: true,
            margin: 30
        }); 

        var owlTestimonialColumn = $(".owl-column");
        owlTestimonialColumn.owlCarousel({
            autoplay: 3000,
            items: 1, // THIS IS IMPORTANT 
            slideSpeed: 300,
            touchDrag: false,
            mouseDrag: false,
            autoplayHoverPause: true, // Stops autoplay
            nav: false,
            loop: true,
            singleItem: true,
            margin: 30,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        }); 


      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
        
      }
    },
    // Contact page, note the change from contact-us to contact.
    'contact': {
        init: function() {
            // JavaScript to be fired on the about us page
            /*
            *  add_marker
            *
            *  This function will add a marker to the selected Google Map
            *
            *  @type    function
            *  @date    8/11/2013
            *  @since   4.3.0
            *
            *  @param   $marker (jQuery element)
            *  @param   map (Google Map object)
            *  @return  n/a
            */
            function add_marker( $marker, map ) {
                // var
                var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
                // create marker
                var marker = new google.maps.Marker({
                    position    : latlng,
                    map         : map
                });
                // add to array
                map.markers.push( marker );
                // if marker contains HTML, add it to an infoWindow
                if( $marker.html() ) {
                    // create info window
                    var infowindow = new google.maps.InfoWindow({
                        content     : $marker.html()
                    });
                    // show info window when marker is clicked
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open( map, marker );
                    });
                }

            }

            /*
            *  center_map
            *
            *  This function will center the map, showing all markers attached to this map
            *
            *  @type    function
            *  @date    8/11/2013
            *  @since   4.3.0
            *
            *  @param   map (Google Map object)
            *  @return  n/a
            */

            function center_map( map ) {
                // vars
                var bounds = new google.maps.LatLngBounds();
                // loop through all markers and create bounds
                $.each( map.markers, function( i, marker ){
                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
                    bounds.extend( latlng );
                });

                // only 1 marker?
                if( map.markers.length === 1 ) {
                    // set center of map
                    map.setCenter( bounds.getCenter() );
                    map.setZoom( 10 );
                } else {
                    // fit to bounds
                    map.fitBounds( bounds );
                }
            }

            /*
            *  new_map
            *
            *  This function will render a Google Map onto the selected jQuery element
            *
            *  @type    function
            *  @date    8/11/2013
            *  @since   4.3.0
            *
            *  @param   $el (jQuery element)
            *  @return  n/a
            */
            function new_map( $el ) {   
                // var
                var $markers = $el.find('.marker'); 
                // vars
                var args = {
                    zoom        : 10,
                    center      : new google.maps.LatLng(0, 0),
                    mapTypeId   : google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    //styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#000000"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-12},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":-93},{"lightness":-12},{"visibility":"simplified"}]}]
                };  
                // create map                 
                var map = new google.maps.Map( $el[0], args);   
                // add a markers reference
                map.markers = [];   
                // add markers
                $markers.each(function(){       
                    add_marker( $(this), map );     
                }); 
                // center map
                center_map( map );
                // return
                return map;
                
            }

            /*
            *  This function will render each map when the document is ready (page has loaded)
            *  @type    function
            *  @date    8/11/2013
            *  @since   5.0.0
            *
            *  @param   n/a
            *  @return  n/a
            */
            // global var
            var map = null;
            $('.acf-map').each(function(){
                // create map
                map = new_map( $(this) );
            }); 

            // popup is shown and map is not visible
            google.maps.event.trigger(map, 'resize');
        }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
