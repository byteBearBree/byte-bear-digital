<?php
/**
 * Index template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();

?>

<?php get_template_part( 'includes/partials/hero' );?>
<?php get_template_part( 'includes/partials/service-row' );?>
<div class="project-section container py-5">
<h2 class="section-title border-bottom pb-2 text-end">
        Past Projects
</h2>
    <div class="row align-items-stretch project-row py-5">
        <?php get_template_part( 'includes/partials/project-card');?>
    </div>
</div>
<?php get_template_part( 'includes/partials/posts-row' );?>
<?php 
get_footer();
?>