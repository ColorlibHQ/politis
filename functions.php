<?php 
/**
 * @Packge 	   : Politis
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */
 
// Base URI
if( ! defined( 'POLITIS_DIR_URI' ) ) {
	define( 'POLITIS_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'POLITIS_DIR_ASSETS_URI' ) ) {
	define( 'POLITIS_DIR_ASSETS_URI', POLITIS_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'POLITIS_DIR_CSS_URI' ) ) {
	define( 'POLITIS_DIR_CSS_URI', POLITIS_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'POLITIS_DIR_JS_URI' ) ) {
	define( 'POLITIS_DIR_JS_URI', POLITIS_DIR_ASSETS_URI .'js/' );
}

// Base Directory
if( ! defined( 'POLITIS_DIR_PATH' ) ) {
	define( 'POLITIS_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'POLITIS_DIR_PATH_INC' ) ) {
	define( 'POLITIS_DIR_PATH_INC', POLITIS_DIR_PATH.'inc/' );
}

//Politis libraries Folder Directory
if( ! defined( 'POLITIS_DIR_PATH_LIBS' ) ) {
	define( 'POLITIS_DIR_PATH_LIBS', POLITIS_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'POLITIS_DIR_PATH_CLASSES' ) ) {
	define( 'POLITIS_DIR_PATH_CLASSES', POLITIS_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'POLITIS_DIR_PATH_HOOKS' ) ) {
	define( 'POLITIS_DIR_PATH_HOOKS', POLITIS_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'POLITIS_DIR_PATH_WIDGET' ) ) {
	define( 'POLITIS_DIR_PATH_WIDGET', POLITIS_DIR_PATH_INC.'widgets/' );
}




/**
 * Include File
 *
 */

require_once( POLITIS_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( POLITIS_DIR_PATH_INC . 'widgets-reg.php' );
require_once( POLITIS_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( POLITIS_DIR_PATH_INC . 'politis-functions.php' );
require_once( POLITIS_DIR_PATH_INC . 'commoncss.php' );
require_once( POLITIS_DIR_PATH_INC . 'support-functions.php' );
require_once( POLITIS_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( POLITIS_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( POLITIS_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( POLITIS_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( POLITIS_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( POLITIS_DIR_PATH_INC . 'politis-companion/politis-companion.php' );
require_once( POLITIS_DIR_PATH_HOOKS . 'hooks.php' );
require_once( POLITIS_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( POLITIS_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( POLITIS_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );


function politis_admin_script(){
    wp_enqueue_style( 'admin_css', get_template_directory_uri().'/assets/css/politis_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'politis_admin_js', get_template_directory_uri().'/assets/js/politis_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'politis_admin_script' );


/**
 * Instantiate Politis object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new Politis();
