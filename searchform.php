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
?>
<div class="search-widget">
    <form class="search-form" action="<?php echo esc_url( site_url( '/' ) ); ?>">
        <input placeholder="<?php esc_html_e( 'Search Posts', 'politis' ); ?>" name="s" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php esc_html_e( 'Search Posts', 'politis' ); ?>'" >
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>