<?php
/** Template Name: services archive */

get_header(); ?>
<!--title-->
    <section class="container py-3">
        <?php
        $title = 'OUR SERVICES';
        $args = array(
            'title' => $title
        );
        get_template_part('template-parts/title', null, $args);
        ?>
    </section>
<!--services-->
    <section class="container pt-3 pb-5 min-vh-50">

        <?php
        $service = array(
            'post_type' => 'services',
            'post_status' => 'publish',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'ignore_sticky_posts' => true
        );
        $services = new WP_Query($service);
        if ($services->have_posts()) :
        $i = 0;

        /* Start the Loop */
        ?>
        <div class="row row-cols-lg-2 row-cols-1 gy-3">
            <?php while ($services->have_posts()) :
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
                <div class="px-3">
                    <div class="bg-primary service-home p-3">
                        <?php
                        $modalDetail = 'data-bs-toggle="modal" data-bs-target="#modal-' .  get_the_ID() . '"';
                        $args = array(
                            'category' => $category_text,
                            'modal' => $modalDetail
                        );
                        get_template_part('template-parts/services/archive-card', null, $args); ?>
                    </div>
                </div>
                <?php
                $i++;
            endwhile;
            wp_reset_postdata();
            endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
<?php
$args_modal = array(
    'post_data' => get_post(),
    'services' => $services,
);
get_template_part('template-parts/services/services-modal', null, $args_modal);
?>
