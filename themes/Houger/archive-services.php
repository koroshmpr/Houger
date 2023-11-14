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
    <section class="container py-3 min-vh-50">

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
        <div class="row row-cols-lg-2 row-cols-1 gy-3">
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
                <div class="px-3">
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
            endif; ?>
        </div>
    </section>
<!--contact form-->
<?php get_template_part('template-parts/homepage/contact-section'); ?>
<?php get_footer(); ?>