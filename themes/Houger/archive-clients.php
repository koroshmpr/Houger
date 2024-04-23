<?php
/** Template Name: clients archive */

get_header(); ?>
    <section class="container pt-3">
        <?php
        $title = 'مشتریان';
        $args = array(
            'title' => $title
        );
        get_template_part('template-parts/title', null, $args);
        ?>
    </section>
    <section class="bg-primary pt-5">
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
            /* Start the Loop */
            ?>
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 gy-4">
                <?php while ($loop->have_posts()) :
                    $loop->the_post(); ?>
                    <div class="text-center" data-aos="zoom-in"
                         data-aos-anchor-placement="top">
                        <img class="object-fit ratio-1x1 img-fluid clients-img" height="150" width="150"
                             src="<?php echo the_post_thumbnail_url(); ?>"
                             alt="<?php echo get_the_title(); ?>"
                             title="<?php echo get_the_title(); ?>">
                    </div>
                    <?php
                endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>