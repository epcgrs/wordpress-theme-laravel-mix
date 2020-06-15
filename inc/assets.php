<?php

/**
 * Styles and scripts loading
 */
function load_assets() {
    // Styles
    wp_enqueue_style( 'main', manifest('app.css', 'assets/css'), array(), null );

    wp_enqueue_script( 'html5shiv', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', array(), null, false );
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9');

    // jQuery
    wp_enqueue_script( 'jquery' );

    // JavaScript
    wp_enqueue_script( 'polyfill', 'https://cdn.polyfill.io/v2/polyfill.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', manifest('app.js', 'assets/js'), array('jquery', 'wp-util'), null, true );

    wp_localize_script( 'main', 'themeData', array(
        'restURL' => rest_url(THEME_REST_NAMESPACE)
    ) );
}
add_action( 'wp_enqueue_scripts', 'load_assets', 1 );
