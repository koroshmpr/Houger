<section class="container py-5 text-center">
    <div class="text-center pb-4">
        <h4 class="fs-5 fw-bold text-dark">مشتریان آژانس بی‌تی‌ال هوگر</h4>
        <p class="small">برندهایی که با آنها افتخار همکاری داشته‌ایم</p>
    </div>
    <div class="row row-cols-3 row-cols-lg-5 justify-content-center align-items-center overflow-scroll px-lg-5">
        <?php
        $args = array(
            'post_type' => 'clients',
            'post_status' => 'publish',
            'order' => 'ASC',
            'posts_per_page' => 5,
            'ignore_sticky_posts' => true
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
            $i = 1;
            while ($loop->have_posts()) :
                $loop->the_post(); // Use the_post() to set up post data
                $i++; ?>
                <a class="" href="<?php the_permalink(); ?>">
                    <img class="object-fit ratio-1x1 img-fluid grayscale-hover" height="200"
                         src="<?php echo the_post_thumbnail_url(); ?>"
                         alt="<?php echo get_the_title(); ?>">
                </a>

            <?php endwhile;
            wp_reset_postdata(); // Reset post data
        endif;
        ?>
    </div>
    <a href="<?= get_post_type_archive_link('clients'); ?>" class="grayscale-hover px-3 py-1 rounded-pill text-center shadow-none">نمایش همه مشتریان
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-play-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
    </a>
</section>