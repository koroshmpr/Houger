<a class="px-0 position-relative overflow-hidden post-card" href="<?= get_the_permalink();?>">
    <img class="object-fit img-fluid ratio-1x1" height="250" src="<?php echo the_post_thumbnail_url(); ?>"
         alt="image of the <?php echo get_the_title(); ?> post">
    <div class="position-absolute top-0 w-100 h-100 bg-primary bg-opacity-50 card_detail d-flex flex-column justify-content-between text-white p-4">
        <p class="fs-5 mb-0"><?= get_the_title(); ?></p>
        <p class="text-justify"><?= wp_trim_words(get_the_content(), 25); ?></p>
    </div>
</a>