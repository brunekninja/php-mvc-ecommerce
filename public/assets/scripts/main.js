/**
 * Include 3rd party libraries
 */


window.$ = require('jquery');
window.jQuery = $;

require('bootstrap');
require('jquery.easing');


import {common} from './common';
import {cart} from './cart';


/**
 * Document ready
 */
(function($) {
  "use strict"; // Start of use strict

  $( document ).ready(function() {

    common();

    cart();

  });

})(jQuery); // End of use strict
