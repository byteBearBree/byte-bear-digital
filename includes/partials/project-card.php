<?php
/**
 * Project Card
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

$args = array(
  'post_type'   => 'project',
  'post_status' => 'publish',
  'posts_per_page' => 2,
 );
 
$projects = new WP_Query( $args );
if( $projects->have_posts() ) :
?>
  <?php
      while( $projects->have_posts() ) :
        $projects->the_post();
        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $project_title = get_the_title();
        
        $project_link = get_permalink();
        $post_categories = get_the_category($projects->ID);
        
        // var_dump($post_categories[0] -> cat_name) ?>
      <div class="col-md-6 mb-5 col-sm-12 project-card" id="project-card">
        <div class="card card-cover h-100 overflow-hidden rounded-5 shadow-lg"
          style="background-image: url('<?php echo $backgroundImg[0]; ?>');" >
          <div class="project-content-wrapper d-flex flex-column h-100">
            <a href="<?php echo $project_link; ?>" class="project-content pb-3 p-5 h-100">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                <?php echo $project_title; ?>
              </h2>
            <div class="project-meta ">
            <ul class="list-unstyled  d-flex mt-auto">
             <li class="me-auto">
                  <img src="wp-content/themes/byte-bear-digital/assets/images/logo-trans.png" alt="Bootstrap" width="32"
                    height="32" class="mini-logo">
                </li>
                <?php foreach($post_categories as $post_category) : ?>
                  <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#geo-fill" /></svg>
                      <small><?php echo $post_category->cat_name ?></small>
                  </li>
                <?php endforeach;?>   
              </ul>
            </div>
            </a>
          </div>
        </div>
      </div>
  <?php
      endwhile;
      wp_reset_postdata();
    ?>
<?php
else :
  esc_html_e( 'No projects available!', 'text-domain' );
endif;
?>