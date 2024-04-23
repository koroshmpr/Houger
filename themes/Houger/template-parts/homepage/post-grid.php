<section class="container py-lg-5 py-4">
    <div class="d-flex justify-content-between align-items-center py-lg-5 pb-3 fs-5">
        <h2 class="text-dark">اخبار و اطلاع رسانی</h2>
        <a class="btn btn-primary"
           href="<?= get_post_type_archive_link('post'); ?>">بیشتر</a>
    </div>
    <div class="row row-cols-lg-3 row-cols-md-2 px-lg-2">
        <?php
        $args = array(
            'post_type' => 'post',
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
                <a class="p-1 position-relative overflow-hidden post-card border border-1 border-white" href="<?php the_permalink(); ?>">
                    <img class="object-fit img-fluid hover-border ratio-1x1" height="250" src="<?php echo the_post_thumbnail_url(); ?>" alt="image of the <?php echo get_the_title(); ?> post">
                    <div class="position-absolute top-0 w-100 h-100 bg-primary bg-opacity-50 card_detail d-flex flex-column justify-content-between text-white">
                        <div class="portfilio_detail">
                                <p class="fs-5 mt-5 ps-4"><?= get_the_title(); ?></p>
                        </div>
                        <p class="text-start slogan px-3"><?= wp_trim_words(get_the_content(), 25 ); ?></p>
                    </div>
                </a>

            <?php endwhile;
            wp_reset_postdata(); // Reset post data
        endif;
        ?>
    </div>
</section>
