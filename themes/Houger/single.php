<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package baloochy
 */
get_header()
?>
<?php
while (have_posts()) :
    the_post();
    ?>
    <div class="container pt-3 pt-lg-0" id="blog">
        <section class="row flex-column-reverse flex-lg-row py-0 py-lg-5 gap-lg-0 gap-5">
            <div class="col-lg-6 col-12">
                <h1 class="fs-3 fw-bold text-dark">
                    <?php the_title(); ?>
                </h1>
                <div class="d-inline-flex w-100 justify-content-between justify-content-lg-start">
                    <span class="text-semi-light small fw-lighter">
<!--                        زمان خواندن: --><?php //= reading_time(); ?><!-- دقیقه-->
                    </span>
                    <span class="text-semi-light ms-5 small fw-lighter">
                        تاریخ انتشار:
                     <?php echo get_the_date('d  F , Y'); ?>
                    </span>
                </div>
                <div class="list-unstyled mt-4">
<!--                    --><?php //echo do_shortcode('[TOC]') ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <?php if (get_the_post_thumbnail_url()) { ?>
                    <img src="<?php echo get_the_post_thumbnail_url() ?>"
                         class="img-fluid"
                         alt="<?php the_title(); ?>">
                <?php } ?>
            </div>
        </section>
        <section class="row py-5 blog-sticky">
                <article class="text-justify border-bottom border-opacity-50 border-dark pb-3 text-link">
                    <?php the_content(); ?>
                </article>
                <div class="col-12 py-lg-5 py-2">
                    <h6 class="pb-3 text-start text-lg-center fs-3 fw-bold">جدیدترین اخبار</h6>
                    <div class="row row-cols-lg-3 row-cols-1 gap-5 gap-lg-0">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => '3',
                            'ignore_sticky_posts' => true
                        );
                        $loop = new WP_Query($args);
                        if ($loop->have_posts()) : $i = 0;
                            /* Start the Loop */
                            while ($loop->have_posts()) :
                                $loop->the_post(); ?>
                                    <?php get_template_part('template-parts/portfolio/portfolio-card'); ?>
                                <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
        </section>
    </div>
<?php
endwhile;
get_footer() ?>