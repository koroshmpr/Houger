<?php
/** Template Name: blog archive */

get_header(); ?>
    <!--title-->
    <section class="container py-3">
        <?php
        $title = 'NEWS';
        $args = array(
            'title' => $title
        );
        get_template_part('template-parts/title', null, $args);
        ?>
    </section>
    <section class="container pt-2 pb-5">
        <div class="row justify-content-center justify-content-lg-between">
            <div class="col-lg-9 row row-cols-1 gap-5 justify-content-center">
                <?php
                $args = array(
                    'post_type' => 'post',
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
                    <?php while ($loop->have_posts()) :
                    $loop->the_post();
                    get_template_part('template-parts/blog/archive-card');
                endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
            <?php get_template_part('template-parts/blog/blog-sidebar'); ?>
        </div>
    </section>
<?php get_footer(); ?>