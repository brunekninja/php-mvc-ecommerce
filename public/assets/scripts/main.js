/**
 * Include 3rd party libraries
 */


window.$ = require('jquery');
window.jQuery = $;

require('bootstrap');
require('jquery.easing');


import {common} from './common';
import {add_to_cart} from './add-to-cart';


/**
 * Document ready
 */
(function($) {
  "use strict"; // Start of use strict

  $( document ).ready(function() {

    common();

    add_to_cart();

  });

})(jQuery); // End of use strict
