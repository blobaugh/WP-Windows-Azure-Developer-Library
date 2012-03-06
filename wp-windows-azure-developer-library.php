<?php
/*
 Plugin Name: Windows Azure Developer Library
 Plugin URI: https://github.com/blobaugh/WP-Windows-Azure-Developer-Library
 Description: Adds the Windows Azure SDK for PHP to a WordPress installation to make the libraries available to plugin developers
 Version: 0.1
 Author: Ben Lobaugh
 Author URI: http://ben.lobaugh.net
 */

// Add hooks to load the Windows Azure SDK for PHP
add_action( 'init', 'waz_client_includes', 1 );

// Load up the library
function waz_client_includes() {
    require_once 'PHPAzure-4.1.0/library/Microsoft/AutoLoader.php';
   //require_once dirname(__FILE__) . '/paz/INSTALL.txt';
}
