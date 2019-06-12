<?php

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'POLITIS_COMPANION_VERSION' ) ) {
    define( 'POLITIS_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'POLITIS_COMPANION_DIR_PATH' ) ) {
    define( 'POLITIS_COMPANION_DIR_PATH', POLITIS_DIR_PATH_INC . 'politis-companion/' );
}

// Define inc dir path constant
if( ! defined( 'POLITIS_COMPANION_INC_DIR_PATH' ) ) {
    define( 'POLITIS_COMPANION_INC_DIR_PATH', POLITIS_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'POLITIS_COMPANION_SW_DIR_PATH' ) ) {
    define( 'POLITIS_COMPANION_SW_DIR_PATH', POLITIS_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'POLITIS_COMPANION_EW_DIR_PATH' ) ) {
    define( 'POLITIS_COMPANION_EW_DIR_PATH', POLITIS_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'POLITIS_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'POLITIS_COMPANION_DEMO_DIR_PATH', POLITIS_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define plugin dir url constant
if( ! defined( 'POLITIS_COMPANION_DIR_URL' ) ) {
    define( 'POLITIS_COMPANION_DIR_URL', POLITIS_DIR_URI . 'inc/politis-companion/' );
}

// Define Meta Constant
if( ! defined( 'POLITIS_COMPANION_DIR_META_URL' ) ) {
    define( 'POLITIS_COMPANION_DIR_META_URL', POLITIS_COMPANION_DIR_URL . 'inc/politis-meta/' );
}

require_once POLITIS_COMPANION_DIR_PATH . 'politis-init.php';
