<?php
/**
 * Default post template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
?>
	<article class="container">
		<header>
			<?php get_template_part( 'includes/partials/hero' );?>

		</header>
		<?php the_content(); ?>
	</article>
<?php
get_footer();
