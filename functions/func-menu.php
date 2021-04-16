<?php
/**
 * Menu functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Register nav menus
 */
function gulp_wp_register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary' ),
			'service' => __( 'Service'),
			'footer' => __( 'Footer'),
		)
	);
}
add_action( 'init', 'gulp_wp_register_menus' );

function get_social_link_svg( $uri, $size = 24 ) {
	return Byte_Bear_Digital_SVG_Icons::get_social_link_svg( $uri, $size );
}
add_action( 'init', 'get_social_link_svg');
