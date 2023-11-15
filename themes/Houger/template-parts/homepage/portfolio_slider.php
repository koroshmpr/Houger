<section class="container py-5">
    <h2 class="py-lg-5"><a class="text-dark text-opacity-50 fs-5" href="<?= get_post_type_archive_link('portfolio'); ?>">آخرین پروژههای هوگر</a></h2>
    <div class="row row-cols-lg-3 row-cols-md-2">
        <?php
        $args = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'order' => 'ASC',
            'posts_per_page' => 6,
            'ignore_sticky_posts' => true
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
            $i = 1;
            while ($loop->have_posts()) :
                $loop->the_post(); // Use the_post() to set up post data
                $post_url = get_permalink();
                $i++;
                get_template_part('template-parts/portfolio/portfolio-card');
                endwhile;
            wp_reset_postdata(); // Reset post data
        endif;
        ?>
    </div>
</section>
