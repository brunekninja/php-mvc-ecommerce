<?php

  require_once '../app/init.php';

  /**
   * Define some constants
   */
  define ( "PROJECT_NAME", "Shopphie" );
  define ( "WORKING_FOLDER", dirname( __FILE__ ) );
  define ( "SITE_URL", "" ); // root url of website, leave empty for relative urls

  if ($_SERVER["SERVER_ADDR"] == '127.0.0.1') {
    define ( "RESOURCES_PATH", SITE_URL . "/tmp" ); // path where resources are located
  } else {
    define ( "RESOURCES_PATH", SITE_URL . "/dist" ); // path where resources are located
  }

  /**
   * Error reporting
   */
  ini_set( 'display_errors', 1 );
  ini_set( 'display_startup_errors', 1 );
  error_reporting( E_ALL );

  /**
   * App
   */
  $app = new App;
