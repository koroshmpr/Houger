<?php
/**
 * The template for displaying all single portfolios
 * @package kmpr
 */
get_header()
?>
<?php
while (have_posts()) :
    the_post();
    ?>
    <div class="container-fluid" id="blog">
        <section
                class="row flex-column-reverse flex-lg-row justify-content-lg-between justify-content-center">
            <div class="col-lg-3 col-12 row align-content-center gy-2">
                <div class="mt-lg-0 mt-4 col d-flex flex-column justify-content-evenly gap-3 h-100">
                    <div data-aos="fade-up" class="row gap-2 my-lg-auto align-items-center ps-3 w-100 pb-2">
                        <div class="text-primary fs-5 fw-medium row gap-2">
                            <?php
                            $client = get_field('client', get_the_ID());
                            if ($client) {
                                $client_id = $client->ID;
                                $client_en = get_field('name_en', $client_id); ?>
                                <span class="fs-6 text-opacity-75"><?= $client_en; ?></span>
                            <?php }
                            ?>
                            <h1><?= get_the_title(); ?></h1>
                        </div>
                        <h3 class="mb-0 product-placeholder"><?php echo esc_html(get_field('subject')); ?></h3>
                        <p class="pe-3"><?= get_field('slogan'); ?></p>
                    </div>
                    <?php
                    $portfolio_category = get_the_terms($post->ID, 'portfolio_categories');
//                    var_dump($portfolio_category);
//                    $current_post_id = get_the_ID();
//                    $current_category_id = $portfolio_category[0]->term_id;

                    $next_post = get_next_post($portfolio_category, '', 'portfolio_categories');
                    $prev_post = get_previous_post($portfolio_category, '', 'portfolio_categories');

                    // Get the category permalink
                    $category_permalink = get_post_type_archive_link('portfolio');
                    ?>
                    <div class="d-grid d-lg-flex py-lg-3 flex-row-lg-reverse justify-content-lg-between col-12 position-relative h-auto gap-5">
                        <?php if ($next_post) { ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" data-aos="fade-right"
                               class="page-title col-lg-5 fs-5 float-end fw-bold next-post-link text-primary d-flex align-items-center justify-content-lg-start justify-content-center gap-2">
                                <i class="bi bi-chevron-right lh-0"></i>
                                <?php echo get_the_title($next_post->ID); ?>

                            </a>
                        <?php } else { ?>
                            <p class="float-end mb-0"></p>
                        <?php } ?>

                        <a href="<?= $category_permalink; ?>" data-aos="fade-in" data-aos-delay="100" data-aos-duration="800"
                           class="cat-link start-50 top-50 py-3 py-lg-0 text-center translate-middle lh-0 position-absolute">
                            <i class="bi bi-grid-3x3-gap page-title fs-3 lh-0"></i>
                        </a>
                        <?php if ($prev_post) { ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" data-aos="fade-left"
                               class="page-title col-lg-5 fs-5 float-start fw-bold prev-post-link text-primary d-flex align-items-center justify-content-lg-end justify-content-center gap-2">
                                <?php echo get_the_title($prev_post->ID); ?>
                                <i class="bi bi-chevron-left lh-0"></i>
                            </a>
                        <?php } else { ?>
                            <p class="float-start mb-0"></p>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12 px-lg-0" data-aos="fade-right">
                <div class="w-100 swiper portfolio-swiper rounded-2">
                    <div class="swiper-wrapper">
                        <?php
                        if (have_rows('gallery_slider')):
                            while (have_rows('gallery_slider')) : the_row(); ?>
                                <div class="swiper-slide my-auto">
                                    <?php if (get_sub_field('file_type') == 'image') { ?>
                                        <img class="w-100 object-fit" style="max-height: 70vh;"
                                             src="<?php echo get_sub_field('item_image')['url']; ?>"
                                             alt="<?php echo get_sub_field('item_image')['title']; ?>">
                                    <?php } ?>
                                    <?php if (get_sub_field('file_type') == 'video') { ?>
                                        <video class="w-100" controls style="max-height: 70vh;
                                               src="<?php echo get_sub_field('item_video')['url']; ?>">
                                        </video>
                                    <?php } ?>
                                </div>
                            <?php endwhile;
                        endif;
                        ?>
                    </div>
                    <?php $row_count = count(get_field('gallery_slider'));
                    if ($row_count > 1) { ?>
                        <div class="row px-3 justify-content-between align-items-center bg-white">
                            <div class="col-6 d-flex justify-content-start gap-3 text-primary fs-4">
                                <div class="swiper-next" data-aos="fade-left" data-aos-delay="300"
                                     data-aos-offset="0">
                                    <?php get_template_part('template-parts/svg/right-arrow'); ?>
                                </div>
                                <div class="swiper-prev" data-aos="fade-right" data-aos-delay="300"
                                     data-aos-offset="0">
                                    <?php get_template_part('template-parts/svg/left-arrow'); ?>
                                </div>
                            </div>
                            <div class="col-6 sofia" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
                                <div class="swiper-paginate-portfolio text-primary d-flex justify-content-end sofia gap-1 align-items-center fw-light"></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
<?php
endwhile;
get_footer() ?>