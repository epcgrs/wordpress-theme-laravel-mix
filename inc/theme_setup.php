<?php

/**
 * Theme general setup
 */
function theme_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_filter( 'use_default_gallery_style', '__return_false' );
    add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Register Navigation Menus
 */
function custom_navigation_menus() {
    register_nav_menus( array(
        'main_menu' => __( 'Main menu', 'wordpress-starter-template' ),
    ) );
}
add_action( 'init', 'custom_navigation_menus' );

/**
 * Remove file accents on upload
 */
if ( is_admin() ) {
    function wp_rauf_check_filetype_and_ext($wp_filetype, $file, $filename, $mimes) {
        if ( !$wp_filetype['proper_filename'] ) {
            $wp_filetype['proper_filename'] = remove_accents(str_replace('.'.$wp_filetype['ext'], '', $filename)).'.'.$wp_filetype['ext'];
        }
        return $wp_filetype;
    }
    add_filter( 'wp_check_filetype_and_ext', 'wp_rauf_check_filetype_and_ext', 10, 4 );
}

/**
 * Enable SVG Uploads
 * @link https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/
 */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Disable Contact Form 7 from automatically adding paragraphs to form
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );