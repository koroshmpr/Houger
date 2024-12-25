<?php
/** Template Name: portfolio archive */
$pageId = 125;
//$pageId = 169;
get_header(); ?>
    <!--title-->
    <section class="container py-3">
        <?php
        $title = 'نمونه کارها';
        $args = array(
            'title' => $title
        );
        get_template_part('template-parts/title', null, $args);
        ?>
    </section>
    <!--projects-->
<div class="container position-relative">
    <div class="portCat-button-next position-absolute top-0 end-0 z-top d-inline me-n5 mt-2">
        <i class="bi bi-chevron-left fs-2 text-dark text-opacity-50"></i>
    </div>
    <div class="portCat-button-prev position-absolute top-0 z-top d-inline ms-n5 mt-2">
        <i class="bi bi-chevron-right fs-2 text-dark text-opacity-50"></i>
    </div>
    <section class="pb-5 container min-vh-100 overflow-hidden">
        <?php
        $portfolio = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'ignore_sticky_posts' => true
        );
        $loop_portfolio = new WP_Query($portfolio);
        ?>
        <div class="swiper portfolio_cat overflow-visible">
            <ul class="swiper-wrapper nav nav-tabs border-bottom-0 mb-4 portfolio-nav-item flex-nowrap" id="myTab" role="tablist">
                <?php
                $args_cat = array(
                    'taxonomy' => 'portfolio_categories',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'parent' => 0, // Fetch only main categories
                );
                $cats = get_terms($args_cat);
                $active_tab = get_field('active', $pageId, 'portfolio_categories');

                foreach ($cats as $key => $cat) {
                    // Check if the category has subcategories
                    $subcategories = get_terms(array(
                        'taxonomy' => 'portfolio_categories',
                        'parent' => $cat->term_id,
                        'orderby' => 'name',
                        'order' => 'ASC',
                    ));
                    $has_subcategories = !empty($subcategories);

                    ?>
                    <li class="nav-item swiper-slide" role="presentation">
                        <button
                                class="px-lg-4 z-top h-100 py-lg-3 position-relative Portfolio-tab fs-6 rounded-0 lazy text-center border-0 d-inline-block w-100 nav-link<?php echo $has_subcategories ? ' has-subcategories' : ''; // Add a class if it has subcategories ?> <?php echo ($cat->term_id === $active_tab->term_id) ? 'active' : ''; ?>"
                                id="cat-<?php echo $cat->term_id ?>-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#cat-<?php echo $cat->term_id ?>"
                                type="button" role="tab"
                                aria-controls="cat-<?php echo $cat->term_id ?>"
                                aria-selected="true">
                            <?php echo $cat->name; ?>
                            <?php
                            $i = 5;
                            if ($has_subcategories) : ?>
                                <ul class="portfolio-sub position-absolute top-100 overflow-hidden list-unstyled w-100 mx-auto row gap-2 start-0 bg-primary text-white border-top border-2 border-white">
                                    <?php foreach ($subcategories as $subcategory) : ?>
                                        <li class="border-bottom border-info border-1 py-2" data-aos="fade-down" data-aos-anchor-placement="center-top" data-aos-duration="500" data-aos-delay="<?= $i ?>0">
                                            <?php echo $subcategory->name; ?>
                                        </li>
                                    <?php
                                    $i = $i + 5;
                                    endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </button>
                    </li>
                <?php } ?>
                <li class="nav-item swiper-slide w-25" role="presentation">
                </li>
            </ul>
        </div>
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

                                $client = get_field('client', get_the_ID());
                                if ($client) {
                                    $client_id = $client->ID;
                                    $client_en = get_field('name_en', $client_id);
                                }
                                if (!$client) {
                                    $client_en = ' ';
                                }
                                if ($i == 1) {
                                    $col_class = 'col-12';
                                } else {
                                    $col_class = 'col-md-6';
                                }
                                $current_post = get_post();
                                ?>
                                <div class="<?php echo $col_class; ?> row align-items-center" data-aos="zoom-in"
                                     data-aos-delay="<?= $i; ?>00">
                                    <div class="ratio <?= $i == 1 ? 'ratio-21x9' : 'ratio-4x3'; ?> px-0 px-lg-2 order-2 order-lg-1 portfolio-card overflow-hidden <?php echo $i > 1 ? 'shadow-sm' : ''; ?> position-relative">
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
                                    <div class="mt-4 col d-flex flex-column align-items-start gap-3 order-3 order-lg-2">
                                        <div class="d-inline-flex gap-2 align-items-center lh-sm w-100 pb-2">
                                            <div class="text-primary fs-5 fw-medium d-flex align-items-center gap-2">
                                                <span class="bg-secondary bg-opacity-75 px-2 pt-2 rounded-2 shadow-sm"><?= $client_en; ?></span>
                                                <span><?= get_the_title(); ?></span>
                                                /
                                            </div>
                                            <h3 class="mb-0 text-primary fs-5 product-placeholder"><?php echo esc_html(get_field('subject')); ?></h3>
                                            <a class="btn btn-primary p-0 border-0 rounded-circle" href="<?php the_permalink(); ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" width="25" height="25" viewBox="0 0 25.39 25.45">
                                                    <defs>
                                                        <style>
                                                            .chervon-1 {
                                                                fill-rule: evenodd;
                                                            }

                                                            .chervon-1, .chervon-2 {
                                                                fill: none;
                                                                stroke: #0071bc;
                                                                stroke-miterlimit: 10;
                                                                stroke-width: 1.5px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="Layer_1-2" data-name="Layer 1">
                                                        <g>
                                                            <polyline class="chervon-1" points="17.67 19.49 5.98 12.72 17.67 5.96"/>
                                                            <ellipse class="chervon-2" cx="12.7" cy="12.72" rx="11.95" ry="11.97"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                let portfolioTabs = document.querySelectorAll('.Portfolio-tab');
                function addAosAnimate(tab) {
                    let listItems = tab.querySelectorAll('li');
                    listItems.forEach(function (item) {
                        item.classList.add('aos-animate');
                    });
                }
                function removeAosAnimate(tab) {
                    let listItems = tab.querySelectorAll('li');
                    listItems.forEach(function (item) {
                        item.classList.remove('aos-animate');
                    });
                }
                portfolioTabs.forEach(function (tab) {
                    removeAosAnimate(tab);
                    tab.addEventListener('mouseenter', function () {
                        addAosAnimate(tab);
                    });
                    tab.addEventListener('mouseleave', function () {
                        removeAosAnimate(tab);
                    });
                });
            });
        </script>
    </section>
</div>
<?php get_footer();

$args_portfolio_modal = array(
    'portfolio' => $loop_portfolio,
);
get_template_part('template-parts/portfolio/portfolio-modal', null, $args_portfolio_modal);
?>