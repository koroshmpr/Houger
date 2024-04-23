<section class="container position-relative py-5">
    <div class="d-flex justify-content-between align-items-center py-lg-5 pb-3 fs-5">
        <h2 class="text-dark">خدمات آژانس تبلیغات بی تی ال هوگر</h2>
        <a class="btn btn-primary"
           href="<?= get_post_type_archive_link('services'); ?>">بیشتر</a>
    </div>
    <div class="swiper service_slider">
        <div class="swiper-wrapper">
            <?php
            $service = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'order' => 'ASC',
                'orderby' => 'rand',
                'posts_per_page' => 5,
                'ignore_sticky_posts' => true
            );
            $services = new WP_Query($service);
            if ($services->have_posts()) :
                $i = 0;
                while ($services->have_posts()) :
                    $services->the_post();

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
                    <div class="swiper-slide p-3">
                        <?php
                        $modalDetail = 'data-bs-toggle="modal" data-bs-target="#modal-' .  get_the_ID() . '"';
                        $args = array(
                            'category' => $category_text,
                            'modal' => $modalDetail
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
    <div class="services-button-next position-absolute top-50 end-0 z-top d-inline me-n5 mt-5">
        <i class="bi bi-chevron-left fs-2 text-dark"></i>
    </div>
    <div class="services-button-prev position-absolute top-50 z-top d-inline ms-n5 mt-5">
        <i class="bi bi-chevron-right fs-2 text-dark"></i>
    </div>
</section>
<?php $args_modal = array(
    'services' => $services,
    'category' => $category_text,
);
get_template_part('template-parts/services/services-modal', null, $args_modal);
?>
