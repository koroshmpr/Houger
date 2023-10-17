<a class="px-0 position-relative overflow-hidden post-card" href="<?php the_permalink(); ?>">
    <img class="object-fit img-fluid ratio-1x1" height="250" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
    <div class="position-absolute top-0 w-100 h-100 bg-primary bg-opacity-50 card_detail d-flex flex-column justify-content-between text-white p-4">
        <div class="fs-5">
            <?= get_the_title();?>
        </div>
        <div class="text-justify">
            <?= wp_trim_words(get_the_content(), 25);?>
        </div>
    </div>
</a>