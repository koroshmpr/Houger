<?php
/** Template Name: portfolio archive */

get_header(); ?>

    <div class="container py-5 min-vh-50">

        <?php
        $args = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'order' => 'DESC',
            'posts_per_page' => '-1',
            'ignore_sticky_posts' => true
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
        $i = 0;
        /* Start the Loop */
        ?>
        <div class="row row-cols-md-3 row-cols-2">
            <?php while ($loop->have_posts()) :
                $loop->the_post();
            get_template_part('template-parts/portfolio/portfolio-card');
            endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer(); ?>