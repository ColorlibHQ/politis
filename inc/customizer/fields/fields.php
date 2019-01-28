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
 * General Section Fields
 ***********************************/


// Theme Main Color Picker
Epsilon_Customizer::add_field(
    'politis_themecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_general_options_section',
        'default'     => '#3898f8',
    )
);
// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Epsilon_Customizer::add_field(
    'politis_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'politis' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'politis' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'politis_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);

// Instagram api key field
$url = 'https://www.instagram.com/developer/authentication/';

Epsilon_Customizer::add_field(
    'politis_igaccess_token',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Instagram Access Token', 'politis' ),
        'description'       => sprintf( __( 'Set instagram access token. To get access token %s click here %s.', 'politis' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'politis_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);

/***********************************
 * Header Section Fields
 ***********************************/
// Header top email text
Epsilon_Customizer::add_field(
    'politis_header_email',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Left Text', 'politis' ),
        'section'     => 'politis_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'info@example.com', 'politis' ),
    )
);
// Header top phone text
Epsilon_Customizer::add_field(
    'politis_header_phone',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Phone Number', 'politis' ),
        'section'     => 'politis_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '+880 123 12 658 439', 'politis' ),
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'politis_header_navbar_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Background Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'politis_header_navbarsticky_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header Nav Bar Menu Color Picker
Epsilon_Customizer::add_field(
    'politis_header_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_headertop_options_section',
        'default'     => '#222',
    )
);
// Header Nav Bar Menu Hover Color Picker
Epsilon_Customizer::add_field(
    'politis_header_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_headertop_options_section',
        'default'     => '#222',
    )
);
// Header sticky nav bar menu color picker
Epsilon_Customizer::add_field(
    'politis_header_sticky_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_headertop_options_section',
        'default'     => '#222',
    )
);
// Header sticky nav bar menu hover color picker
Epsilon_Customizer::add_field(
    'politis_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_headertop_options_section',
        'default'     => '#222',
    )
);
// Page Header Background Color Picker
Epsilon_Customizer::add_field(
    'politis_headerbgcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#3898f8',
    )
);
// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'politis_headertextcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fff',
    )
);
// Header overlay switch field
Epsilon_Customizer::add_field(
    'politis-headeroverlay-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'politis' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Epsilon_Customizer::add_field(
    'politis_headeroverlaycolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(0, 0, 0, 0.7)',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/


// Post excerpt length field
Epsilon_Customizer::add_field(
    'politis_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'politis' ),
        'description' => esc_html__( 'Set post excerpt length.', 'politis' ),
        'section'     => 'politis_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'politis-blog-sidebar-settings',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'politis' ),
        'section'  => 'politis_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'politis' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
            '2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
            '3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
        ),
        'default'  => array(
            'columnsCount' => 1,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'POLITIS_COMPANION_VERSION' ) ) {
// Header social switch field
Epsilon_Customizer::add_field(
    'politis-blog-social-share-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'politis' ),
        'section'     => 'politis_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Epsilon_Customizer::add_field(
    'politis-blog-like-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'politis' ),
        'section'     => 'politis_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'politis_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'politis' ),
        'section'           => 'politis_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'politis_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'politis' ),
        'section'           => 'politis_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'politis_fof_textonecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'politis_fof_texttwocolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'politis_fof_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'politis-widget-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'politis' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'politis' ),
        'section'     => 'politis_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s. Copyright &copy; %s  |  All rights reserved', 'politis' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Epsilon_Customizer::add_field(
    'politis-copyright-text-settings',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'politis' ),
        'section'     => 'politis_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'politis_footer_bgimg_settings',
    array(
        'type'        => 'epsilon-image',
        'label'       => esc_html__( 'Footer Widget Background Image', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'politis_footer_widget_bgColor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Background Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#04091e',
    )
);
// Footer widget text color field
Epsilon_Customizer::add_field(
    'politis_footer_widget_color_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Text Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget title color field
Epsilon_Customizer::add_field(
    'politis_footer_widgettitlecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'politis_footer_widget_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget anchor hover Color
Epsilon_Customizer::add_field(
    'politis_footer_widget_anchorhovcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Hover Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#04091e',
    )
);

// Footer bottom bg Color
Epsilon_Customizer::add_field(
    'politis_footer_bottom_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Background Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#23202e',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'politis_footer_bottom_textcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Text Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'politis_footer_bottom_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#777777',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'politis_footer_bottom_anchorhovercolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Hover Color', 'politis' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'politis_footer_options_section',
        'default'     => '#3898f8',
    )
);
