<?php
// Function guards should use if/endif

if ( ! function_exists( 'ns_styles' ) ) :
/**
 * Comments should be just above the function.
 *
 * The function isn't indented.
 */
function core2_styles() {
  wp_enqueue_style( 'ns-style', get_stylesheet_uri() );
}
endif;
add_action( 'wp_enqueue_scripts', 'ns_styles' ); // Outside of the guard