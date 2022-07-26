<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Interior Designs
 */

if ( ! function_exists( 'interior_designs_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function interior_designs_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'interior_designs_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids      = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    =>  1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery&hellip
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment&hellip
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function interior_designs_categorized_blog() {
	if ( false === ( $interior_designs_all_the_cool_cats = get_transient( 'interior_designs_all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$interior_designs_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$interior_designs_all_the_cool_cats = count( $interior_designs_all_the_cool_cats );

		set_transient( 'interior_designs_all_the_cool_cats', $interior_designs_all_the_cool_cats );
	}

	if ( '1' != $interior_designs_all_the_cool_cats ) {
		// This blog has more than 1 category so interior_designs_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so interior_designs_categorized_blog should return false
		return false;
	}
}

if ( ! function_exists( 'interior_designs_the_custom_logo' ) ) :
	function interior_designs_the_custom_logo() {
		the_custom_logo();
	}
endif;

/**
 * Flush out the transients used in interior_designs_categorized_blog
 */
function interior_designs_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'interior_designs_all_the_cool_cats' );
}
add_action( 'edit_category', 'interior_designs_category_transient_flusher' );
add_action( 'save_post',     'interior_designs_category_transient_flusher' );