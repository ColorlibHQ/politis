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

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'politis_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'politis' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(
    /**
     * General Section
     */
    array(
        'id'   => 'politis_general_options_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'politis' ),
            'panel'    => 'politis_options_panel',
            'priority' => 1,
        ),
    ),
    /**
     * Header Section
     */
    array(
        'id'   => 'politis_headertop_options_section',
        'args' => array(
            'title'    => esc_html__( 'Header Top', 'politis' ),
            'panel'    => 'politis_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Blog Section
     */
    array(
        'id'   => 'politis_blog_options_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'politis' ),
            'panel'    => 'politis_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * 404 Page Section
     */
    array(
        'id'   => 'politis_fof_options_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'politis' ),
            'panel'    => 'politis_options_panel',
            'priority' => 6,
        ),
    ),
    /**
     * Footer Section
     */
    array(
        'id'   => 'politis_footer_options_section',
        'args' => array(
            'title'    => esc_html__( 'Footer', 'politis' ),
            'panel'    => 'politis_options_panel',
            'priority' => 7,
        ),
    ),

);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );
