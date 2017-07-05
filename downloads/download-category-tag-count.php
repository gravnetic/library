<?php
/*
 * Plugin Name: Easy Digital Downloads - Taxonomy Count
 * Description: Control the number of products displayed on default download category and download tag pages.
 * Author: EDD Team
 * Version: 1.0
 */

// adjust downloads taxonomy loop
function custom_download_tag_count( $query ) {
	if ( ( $query->is_tax( 'download_category' ) || $query->is_tax( 'download_tag' ) ) && ! is_admin() && $query->is_main_query() ) {

		// replace 15 with desired amount
		$query->set( 'posts_per_page', 15 );
	}
}
add_action( 'pre_get_posts', 'custom_download_tag_count' );