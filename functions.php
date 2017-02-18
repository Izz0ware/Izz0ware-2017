<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Require plugins
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/tgm/class-tgm-plugin-activation.php' );
add_action( 'tgmpa_register', 'izz0ware_2017_tgm_register_required_plugins' );

function izz0ware_2017_tgm_register_required_plugins() {
    $plugins = array(

        // Add Contact form 7 plugin.
        array(
            'name'             => 'Izz0ware Advanced 2017',
            'slug'             => 'izz0-adv-2017',
            'required'         => true,
        ),

    );
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'izz0-adv-2017-install-plugins', // Menu slug.
        'parent_slug'  => 'plugins.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
function chld_thm_cfg_parent_css() {
    wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    wp_enqueue_script( 'izz0ware_2017', trailingslashit( get_stylesheet_directory_uri() ) . 'script.js', array( ) );
}
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

require trailingslashit( get_stylesheet_directory() ) . 'inc/template-tags.php';