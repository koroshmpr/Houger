<?php
/** Template Name: services archive */

get_header(); ?>

    <div class="container py-5 min-vh-50">

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

        /* Start the Loop */
        ?>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-2">
            <?php while ($loop->have_posts()) :
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
                <div class="px-1">
                    <div class="bg-primary service-home p-3">
                        <?php
                        $args = array(
                            'category' => $category_text
                        );
                        get_template_part('template-parts/services/services-card', null, $args); ?>
                    </div>
                </div>
                <?php
                $i++;
            endwhile;
            wp_reset_postdata();
            endif;?>
        </div>
    </div>
<?php get_footer(); ?>