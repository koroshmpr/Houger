<section class="container position-relative py-5">
    <h2 class="py-3"><a class="text-dark fs-5" href="<?= get_post_type_archive_link('services'); ?>">خدمات آژانس تبلیغات
            بی تی ال هوگر</a></h2>
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
                    <div class="swiper-slide bg-primary service-home p-3">
                        <?php
                        $args = array(
                            'category' => $category_text
                        );
                        get_template_part('template-parts/services/services-card' , null , $args); ?>
                    </div>
                <?php
                    $i++;
                endwhile;
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
