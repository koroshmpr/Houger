<?php
/** Template Name: clients archive */

get_header(); ?>

    <div class="container py-5 min-vh-50">

        <?php
        $args = array(
            'post_type' => 'clients',
            'post_status' => 'publish',
            'order' => 'DESC',
            'posts_per_page' => '-1',
            'ignore_sticky_posts' => true
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
        $i = 0;
        $j = 0;
        /* Start the Loop */
        ?>
        <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 gy-5">
            <?php while ($loop->have_posts()) :
                $loop->the_post(); ?>
                <div data-aos="zoom-in" data-aos-delay="<?= $j; ?>0"
                     data-aos-anchor-placement="top">
                    <img class="object-fit ratio-1x1 img-fluid grayscale-hover" height="200"
                         src="<?php echo the_post_thumbnail_url(); ?>"
                         alt="<?php echo get_the_title(); ?>">
                </div>
                <?php
                $j+= 20;
            endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer(); ?>