<?php

/**
 * Theme path
 */
define( 'THEME_PATH', get_template_directory_uri() );

/**
 * CSS Path
 */
define( 'CSS_PATH', THEME_PATH . '/assets/css/' );

/**
 * JavaScript path
 */
define( 'JS_PATH', THEME_PATH . '/assets/js/' );

/**
 * Images path
 */
define( 'IMAGES_PATH', THEME_PATH . '/assets/img/' );

/**
 * Base site URL
 */
define( 'BASE_URL', esc_url( home_url( '/' ) ) );

/**
 * REST API Namespace
 */
define( 'THEME_REST_NAMESPACE', 'wst/v1' );
