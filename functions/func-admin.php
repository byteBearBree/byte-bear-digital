<?php
/**
 * Admin functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

add_theme_support( 'post-thumbnails' );

// Register ACF Options
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

//CUSTOM ACF
$site_logo = get_field('site_logo', 'options');
/**
 * Credit in admin footer
 */
function gulp_wp_admin_footer() {
	echo 'Developed by <a href="http://author.com" target="_blank" rel="noreferrer noopener">Author Name</a>';
}
add_filter( 'admin_footer_text', 'gulp_wp_admin_footer' );

/**
 * Change default greeting
 */
function gulp_wp_greeting( $wp_admin_bar ) {
	$user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$profile_url = get_edit_profile_url( $user_id );

	if ( 0 !== $user_id ) {
		$avatar = get_avatar( $user_id, 28 );
		$howdy = sprintf( __( 'Hi, %1$s' ), $current_user->display_name );
		$class = empty( $avatar ) ? '' : 'with-avatar';

		$wp_admin_bar->add_menu(array(
			'id' => 'my-account',
			'parent' => 'top-secondary',
			'title' => $howdy . $avatar,
			'href' => $profile_url,
			'meta' => array(
				'class' => $class,
			),
		));
	}
}
add_action( 'admin_bar_menu', 'gulp_wp_greeting', 11 );