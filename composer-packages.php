<?php
/**
 * Plugin Name: Composer Packages
 * Plugin URI: https://maheshwaghmare.com/
 * Description: Useful composer package.
 * Version: 0.0.1
 * Author: Mahesh M. Waghmare
 * Author URI: https://maheshwaghmare.com/
 * Text Domain: composer-packages
 *
 * @package Composer Packages
 */

// Set constants.
define( 'CP_VER', '0.0.1' );
define( 'CP_FILE', __FILE__ );
define( 'CP_BASE', plugin_basename( CP_FILE ) );
define( 'CP_DIR', plugin_dir_path( CP_FILE ) );
define( 'CP_URI', plugins_url( '/', CP_FILE ) );

require_once CP_DIR . 'packages/wp-admin-notices/vendor/autoload.php';
// require_once CP_DIR . 'packages/wp-admin-notices/php/index.php';

// use WP_Admin_Notices;

// add_action( 'admin_head', function() {
//     vl( WP_Admin_Notices\info() );
//     wp_die();
// });

