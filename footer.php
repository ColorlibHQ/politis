<?php 
/**
 * @Packge     : Politis
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/**
 * Footer Area
 *
 * @Footer
 * @Back To Top Button
 *
 * @Hook politis_footer
 *
 * @Hooked  politis_footer_area 10
 * @Hooked  politis_back_to_top 20 
 *
 */

do_action( 'politis_footer' );

wp_footer(); 
?>
</body>
</html>