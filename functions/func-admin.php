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

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'byte_bear_digital' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'byte_bear_digital' ),
		'menu_name'             => __( 'Projects', 'byte_bear_digital' ),
		'name_admin_bar'        => __( 'Projects', 'byte_bear_digital' ),
		'archives'              => __( 'Item Archives', 'byte_bear_digital' ),
		'attributes'            => __( 'Item Attributes', 'byte_bear_digital' ),
		'parent_item_colon'     => __( 'Parent Item:', 'byte_bear_digital' ),
		'all_items'             => __( 'All Items', 'byte_bear_digital' ),
		'add_new_item'          => __( 'Add New Item', 'byte_bear_digital' ),
		'add_new'               => __( 'Add New', 'byte_bear_digital' ),
		'new_item'              => __( 'New Item', 'byte_bear_digital' ),
		'edit_item'             => __( 'Edit Item', 'byte_bear_digital' ),
		'update_item'           => __( 'Update Item', 'byte_bear_digital' ),
		'view_item'             => __( 'View Item', 'byte_bear_digital' ),
		'view_items'            => __( 'View Items', 'byte_bear_digital' ),
		'search_items'          => __( 'Search Item', 'byte_bear_digital' ),
		'not_found'             => __( 'Not found', 'byte_bear_digital' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'byte_bear_digital' ),
		'featured_image'        => __( 'Featured Image', 'byte_bear_digital' ),
		'set_featured_image'    => __( 'Set featured image', 'byte_bear_digital' ),
		'remove_featured_image' => __( 'Remove featured image', 'byte_bear_digital' ),
		'use_featured_image'    => __( 'Use as featured image', 'byte_bear_digital' ),
		'insert_into_item'      => __( 'Insert into item', 'byte_bear_digital' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'byte_bear_digital' ),
		'items_list'            => __( 'Items list', 'byte_bear_digital' ),
		'items_list_navigation' => __( 'Items list navigation', 'byte_bear_digital' ),
		'filter_items_list'     => __( 'Filter items list', 'byte_bear_digital' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'byte_bear_digital' ),
		'description'           => __( 'Post Type Description', 'byte_bear_digital' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag', 'project_type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'custom_post_type', 0 );



//**Custom Project* */
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query -> set( 'post_type', array( 'post', 'project' ) );
    return $query;
}


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

