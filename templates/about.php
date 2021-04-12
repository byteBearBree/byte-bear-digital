<?php
/*
 * Template Name: About
 * description: >-
  Page template without sidebar
 */

// Additional code goes here...
get_header();

?>
<?php get_template_part( 'includes/partials/hero' );?>
<div class="container">
    <div class="row">
        <div class=" text-center col-lg-10 about-intro">
        <?php the_content(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 half-content-wrapper">
        <div class="row">
        <?php get_template_part( 'includes/partials/half-content' );?>
        </div>
        </div>
    </div>
</div>
<?php
get_template_part( 'includes/partials/service-row' );

get_footer();
?>