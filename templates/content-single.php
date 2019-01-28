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

<!-- Post Item Start -->
<div id="<?php the_ID(); ?>" <?php post_class( esc_attr( 'single-blog-post row content--area' ) ); ?>>
		<div class="col-lg-3  col-md-3 meta-details">
		<?php
		/**
		 * Blog Post Meta
		 * @Hook  politis_blog_posts_meta
		 *
		 * @Hooked politis_blog_posts_meta_cb
		 * 
		 *
		 */
		do_action( 'politis_blog_posts_meta' );
		?>

		<div class="user-details row">
			<?php
			/**
			 * Blog single post meta category, tag, next - previous link, comments form
			 * and biography
			 * @Hook  politis_blog_single_meta
			 * 
			 * @Hooked politis_blog_single_meta_cb
			 * 
			 *
			 */
			do_action( 'politis_blog_single_meta' );
			?>
		</div>

	</div>
	<div class="col-lg-9">
		<div class="feature-img">
			<?php 
			/**
			 * Blog Post thumbnail
			 * @Hook  politis_blog_posts_thumb
			 *
			 * @Hooked politis_blog_posts_thumb_cb
			 * 
			 *
			 */
			do_action( 'politis_blog_posts_thumb' );
			?>
		</div>									
	</div>
	<?php	
		
	echo '<div class="col-lg-12 col-md-12"><div class="blog-detail-txt">';
	/**
	 * Blog single page content 
	 * Post social share
	 * @Hook  politis_blog_posts_content
	 *
	 * @Hooked politis_blog_posts_content_cb
	 * 
	 *
	 */
	do_action( 'politis_blog_posts_content' );


	echo '</div></div>';


	?>
</div>
<?php

/**
 * Blog single page content 
 * @Hook  politis_blog_single_footer_nav
 *
 * @Hooked politis_blog_single_footer_nav_cb
 * 
 *
 */
do_action( 'politis_blog_single_footer_nav' );

// comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}
	
?>           