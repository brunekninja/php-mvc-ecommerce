/**
 * Include 3rd party libraries
 */

window.$ = require('jquery');
window.jQuery = $;

require('bootstrap');
require('jquery.easing');

/**
 * Document ready
 */
(function($) {
  "use strict"; // Start of use strict

  $( document ).ready(function() {
    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top - 50)
      }, 1250, 'easeInOutExpo');
      event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
      target: '.navbar-fixed-top',
      offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){
      $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
      offset: {
        top: 100
      }
    });


    // add product to cart from main landing page
    $('.portfolio-link').on('click', function (e) {
      e.preventDefault();

      var _this = $(this),
          prodID = _this.data('product-id');

      cart_ajax_action('add', prodID);

    });

    function cart_ajax_action(action, prodID) {
      var query = '';

      $.ajax({
        url: url + '/ajaxController/addToCart',
        type: 'post',
        data: query,
        dataType: 'json',
        success: function (data, status, xhr) {
          console.log(data);
        },
        error: function (xhr, status, error) {
          console.log(error);
        }
      });

      // $.ajax(url + "/ajaxController/addToCart")
      //   .done(function(result) {
      //     console.log(prodID);
      //     console.log(result);
      //   })
      //   .fail(function() {
      //   })
      //   .always(function() {
      //   });

    }

  });

})(jQuery); // End of use strict
