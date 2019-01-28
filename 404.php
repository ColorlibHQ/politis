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

//  Call Header
get_header();

/**
 * 404 page
 * @Hook politis_fof
 * @Hooked politis_fof_cb
 *
 */

do_action( 'politis_fof' );

// Call Footer
get_footer();
