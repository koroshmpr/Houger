<section class="container py-lg-5 py-3">
    <div class="d-flex justify-content-between align-items-center py-lg-5 pb-3 fs-5">
        <h2 class="text-dark">آخرین پروژههای هوگر</h2>
        <a class="btn btn-primary"
           href="<?= get_post_type_archive_link('portfolio'); ?>">بیشتر</a>
    </div>

    <div class="row row-cols-lg-3 row-cols-md-2 gy-3 gy-lg-0 px-lg-2">
        <?php
        $portfolio = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'order' => 'DESC',
            'posts_per_page' => 9,
            'ignore_sticky_posts' => true
        );
        $loop_portfolio = new WP_Query($portfolio);
        if ($loop_portfolio->have_posts()) :
            $i = 1;
            while ($loop_portfolio->have_posts()) :
                $loop_portfolio->the_post(); // Use the_post() to set up post data
                $post_url = get_permalink();
                $i++;
                $modalDetail = 'data-bs-toggle="modal" data-bs-target="#modal-' .  get_the_ID() . '"';
                $args = array(
                    'modal' => $modalDetail
                );
                get_template_part('template-parts/portfolio/portfolio-card' , null , $args);
            endwhile;
            wp_reset_postdata(); // Reset post data
        endif;
        ?>
    </div>
</section>
<?php
$args_portfolio_modal = array(
    'portfolio' => $loop_portfolio,
);
get_template_part('template-parts/portfolio/portfolio-modal', null, $args_portfolio_modal);
?>
