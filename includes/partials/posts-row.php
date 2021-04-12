<?php 

/**
 * Posts Template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */



query_posts( array(
    'posts_per_page' => 3,
)); ?>

<div class="blog-section container">
    <h2 class="section-title border-bottom pb-2">
        Journal
</h2>
    <div class="row py-5">
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article class="col-md-4 mb-4 single-post">
                    <div class="post-header">
                        <h2 class="post-title">
                            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                    <?php the_excerpt(); ?>
                </article>
                <?php
            }
        };?>
    </div>
</div>