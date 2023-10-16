<section class="container position-relative py-5">
    <h2 class="py-3"><a class="text-dark fs-5" href="<?= get_post_type_archive_link('services'); ?>">خدمات آژانس تبلیغات بی تی ال هوگر</a></h2>
    <div class="swiper service_slider">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'order' => 'ASC',
                'posts_per_page' => -1,
                'ignore_sticky_posts' => true
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                $i = 0;
                while ($loop->have_posts()) :
                    $loop->the_post();
                    $i++;

                    // Retrieve the hierarchical categories
                    $category_detail = get_the_terms(get_the_ID(), 'services_categories');
                    $category_text = '';

                    if (is_array($category_detail) && count($category_detail) > 0) {
                        $category_count = count($category_detail);
                        $j = 0;

                        foreach ($category_detail as $category) {
                            $category_text .= $category->name;
                            if (++$j !== $category_count) {
                                $category_text .= ' - ';
                            }
                        }
                    }
                    ?>
                    <a class="swiper-slide service-home bg-primary p-3" href="<?php the_permalink(); ?>">
                        <div class="w-100 d-flex pb-5">
                            <?php if (get_field('logo_type') == 'svg') { ?>
                                <span class="col-4"><?= get_field('svg'); ?></span>
                            <?php } elseif (get_field('logo_type') == 'img') { ?>
                                <img class="w-auto" height="100" src="<?= get_field('img') ? get_field('img')['url'] : ''; ?>"
                                     alt="<?= get_the_title(); ?>">
                            <?php } ?>
                        </div>
                        <div class="d-flex flex-column justify-content-end text-white text-end">
                            <p><?= get_the_title(); ?></p>
                            <p"><?= $category_text ? $category_text : ''; ?></p>

                        </div>
                    </a>
                <?php endwhile;
                wp_reset_postdata(); // Reset post data
            endif;
            ?>
        </div>
    </div>
    <div class="services-button-next position-absolute top-50 end-0 z-top d-inline me-n5 mt-3">
        <i class="bi bi-chevron-left fs-2 text-dark"></i>
    </div>
    <div class="services-button-prev position-absolute top-50 z-top d-inline ms-n5 mt-3">
        <i class="bi bi-chevron-right fs-2 text-dark"></i>
    </div>
</section>
