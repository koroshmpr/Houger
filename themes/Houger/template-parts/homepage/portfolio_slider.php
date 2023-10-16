<section class="container py-5">
    <h2 class="py-5"><a class="text-dark text-opacity-50 fs-5" href="<?= get_post_type_archive_link('portfolio'); ?>">آخرین پروژههای هوگر</a></h2>
    <div class="row row-cols-lg-3">
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
                $i++; ?>
            <a class="px-0" href="<?php the_permalink(); ?>">
                <img class="object-fit img-fluid ratio-1x1 hover-border" height="250" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
            </a>

            <?php endwhile;
            wp_reset_postdata(); // Reset post data
        endif;
        ?>
    </div>
</section>
