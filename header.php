<?php
/**
 * Header template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

 $site_logo = get_field('site_logo', 'options');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '&ndash;', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="container">
	<div class="header d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 botrder-bottom">
		<a href="#" class="d-flex align-items-center col-md-3 mb-1 mb-md-0 text-decoration-none"><img width="50" src="<?php echo $site_logo; ?>" /></a>
		
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container'       => '',
						'menu_class'      => 'nav col-12 col-md-auto mb-0 justify-content-center mb-md-0',
						'container_class' => 'main-menu-container',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
					);
		?>
		<div class="col-md-3 text-end">
		<i class="fab fa-instagram"></i>
		<i class="fal fa-gamepad-alt"></i>
		</div>
	</div>
</header>
<main class="main container">
