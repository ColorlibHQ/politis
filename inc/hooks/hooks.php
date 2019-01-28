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
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'politis_preloader', 'politis_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'politis_header', 'politis_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'politis_footer', 'politis_footer_area', 10 );
add_action( 'politis_footer', 'politis_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'politis_wrp_start', 'politis_wrp_start_cb', 10 );
add_action( 'politis_wrp_end', 'politis_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'politis_blog_col_start', 'politis_blog_col_start_cb', 10 );
add_action( 'politis_blog_col_end', 'politis_blog_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'politis_blog_posts_thumb', 'politis_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'politis_blog_posts_title', 'politis_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'politis_blog_posts_meta', 'politis_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'politis_blog_posts_bottom_meta', 'politis_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'politis_blog_posts_excerpt', 'politis_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'politis_blog_posts_content', 'politis_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'politis_blog_sidebar', 'politis_blog_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'politis_blog_posts_share', 'politis_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'politis_blog_single_meta', 'politis_blog_single_meta_cb', 10 );

/**
 * Hook for blog single footer nav next - previous link and comments form.
 */
add_action( 'politis_blog_single_footer_nav', 'politis_blog_single_footer_nav_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'politis_page_content', 'politis_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'politis_fof', 'politis_fof_cb', 10 );
