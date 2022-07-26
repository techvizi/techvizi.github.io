<?php
/**
 * @package Interior Designs
 * @subpackage interior-designs
 * @since interior-designs 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses interior_designs_header_style()
*/

function interior_designs_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'interior_designs_custom_header_args', array(

		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 1280,
		'height'             => 130,
		'flex-height'        => true,
	    'flex-width'         => true,
		'wp-head-callback'   => 'interior_designs_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'interior_designs_custom_header_setup' );

if ( ! function_exists( 'interior_designs_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see interior_designs_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'interior_designs_header_style' );
function interior_designs_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$interior_designs_custom_css = "
        .full-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center bottom;
			background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'interior-designs-basic-style', $interior_designs_custom_css );
	endif;
}
endif; // interior_designs_header_style