<?php
/** Template Name: portfolio archive */
$pageId = 125;
get_header(); ?>
    <!--title-->
    <section class="container py-3">
        <?php
        $title = 'PROJECTS';
        $args = array(
            'title' => $title
        );
        get_template_part('template-parts/title', null, $args);
        ?>
    </section>
    <!--projects-->
    <section class="pb-5 container min-vh-100">
        <?php
        $portfolio = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'ignore_sticky_posts' => true
        );
        $loop_portfolio = new WP_Query($portfolio);
        ?>
        <ul class="nav nav-tabs border-bottom-0 justify-content-lg-between justify-content-start gap-2 flex-nowrap overflow-tab overflow-x-scroll mb-4 portfolio-nav-item"
            id="myTab"
            role="tablist">
            <?php
            $args_cat = array(
                'taxonomy' => 'portfolio_categories',
                'orderby' => 'name',
                'order' => 'ASC'
            );
            $cats = get_terms($args_cat);
            $active_tab = get_field('active', $pageId, 'portfolio_categories');
            foreach ($cats as $key => $cat) {
                ?>
                <li class="nav-item" role="presentation">
                    <button
                            class="px-lg-4 h-100 py-lg-3 Portfolio-tab fs-6 rounded-0 lazy text-center border-0 d-inline-block w-100 nav-link
                        <?php if ($cat->term_id === $active_tab->term_id) {
                                echo 'active';
                            }; ?>"
                            id="cat-<?php echo $cat->term_id ?>-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#cat-<?php echo $cat->term_id ?>"
                            type="button" role="tab"
                            aria-controls="cat-<?php echo $cat->term_id ?>"
                            aria-selected="true">
                        <?php echo $cat->name; ?>
                    </button>
                </li>
                <?php
            }
            wp_reset_postdata() ?>
        </ul>
        <div class="tab-content" id="myTabContent" role="tablist">
            <?php foreach ($cats as $key => $cat) { ?>
                <div class="tab-pane fade <?php if ($cat->term_id == $active_tab->term_id) {
                    echo 'show active';
                } ?>" id="cat-<?php echo $cat->term_id; ?>" role="tabpanel"
                     aria-labelledby="cat-<?php echo $cat->term_id; ?>-tab">
                    <div class="row gap-4 justify-content-center"
                         id="my-custom-post-type-container">
                        <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'post_status' => 'publish',
                            'ignore_sticky_posts' => 1,
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'portfolio_categories',
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'field' => 'term_id',
                                    'terms' => $cat->term_taxonomy_id,
                                    'operator' => 'IN'
                                )
                            )
                        );
                        $loop = new WP_Query($args);
                        if ($loop->have_posts()) {
                            $i = 0;
                            while ($loop->have_posts()) : $loop->the_post();
                                $i++;
                                // determine which class to use based on post index
                                if ($i == 1) {
                                    $col_class = 'col-12';
                                } else {
                                    $col_class = 'col-md-6';
                                }
                                $current_post = get_post();
                                ?>
                                <div class="<?php echo $col_class; ?> row align-items-center aos " data-aos="zoom-in"
                                     data-aos-delay="<?= $i; ?>00">
                                    <div class="ratio ratio-21x9 px-0 px-lg-2 order-2 order-lg-1 portfolio-card overflow-hidden <?php echo $i > 1 ? 'shadow-sm' : ''; ?> position-relative">
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>"
                                             class="object-fit"
                                            <?php if (!has_term('video', 'portfolio_categories', $current_post)) { ?>
                                                data-bs-toggle="modal" data-bs-target="#modal-<?= get_the_ID(); ?>";
                                            <?php } ?>
                                            <?php if (has_term('video', 'portfolio_categories', $current_post)) { ?>
                                                style="cursor:default";
                                            <?php } ?>
                                             title="<?php the_title(); ?>"
                                             alt="<?php the_title(); ?>">
                                        <?php
                                        // Assuming $current_post is the current post object in the loop
                                        if (has_term('video', 'portfolio_categories', $current_post)) {
                                            ?>
                                            <span data-bs-toggle="modal" data-bs-target="#modal-<?= get_the_ID(); ?>"
                                                  class="play_button position-absolute start-50 translate-middle rounded-circle d-flex justify-content-center align-items-center">
                                                <i class="bi bi-play-circle shadow-sm bg-primary bg-opacity-75 rounded-circle p-2 text-white"></i>
                                        </span>
                                        <?php } ?>
                                    </div>
                                    <!--  showing year / brand name and client   -->
                                    <div class="mt-4 col-lg-6 d-flex flex-column align-items-start gap-3 order-3 order-lg-2">
                                        <div class="d-inline-flex gap-2 align-items-center w-100 pb-2">
                                            <div class="text-primary fs-5 fw-medium d-flex gap-2">
                                                <span><?php the_field('brand_in_english'); ?></span>
                                                <span><?= get_the_title(); ?></span>
                                                /
                                            </div>
                                            <h3 class="mb-0 product-placeholder"><?php echo esc_html(get_field('subject')); ?></h3>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile;

                        }

                        wp_reset_postdata() ?>

                    </div>

                </div>

            <?php } ?>


        </div>

    </section>
    <!--contact form-->
<?php get_template_part('template-parts/homepage/contact-section'); ?>
<?php get_footer();

$args_portfolio_modal = array(
    'portfolio' => $loop_portfolio,
);
get_template_part('template-parts/portfolio/portfolio-modal', null, $args_portfolio_modal);
?>