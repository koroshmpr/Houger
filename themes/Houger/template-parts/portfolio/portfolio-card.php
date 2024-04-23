<div class="px-0 position-relative overflow-hidden post-card border border-4 border-white" <?= $args['modal'] ?? ''; ?>  style="height: 400px;">
    <img class="object-fit img-fluid ratio-1x1 h-100 w-100" height="400" src="<?php echo the_post_thumbnail_url(); ?>"
         alt="<?php echo get_the_title(); ?>">
    <div class="position-absolute top-0 w-100 h-100 bg-primary bg-opacity-50 card_detail d-flex flex-column justify-content-between text-white">
        <div class="portfilio_detail">
            <?php $client = get_field('client');
            if ($client) {
                $client_id = $client->ID;
                $client_en = get_field('name_en', $client_id);
                $client_name = $client->post_name;
                $client_thumb = get_the_post_thumbnail_url($client_id, 'thumbnail'); ?>
                <img class="object-fit ms-n2" width="150" height="150"
                     src="<?= $client_thumb; ?>" alt="image of the <?= $client_name; ?> portfolio">
                <p class="fs-5 mt-n4 ps-4"><?= get_the_title(); ?></p>
            <?php }
            if (!$client) { ?>
                <p class="fs-5 pt-4 ps-3"><?= get_the_title(); ?></p>
            <?php } ?>
        </div>
        <p class="text-end slogan pe-3"><?= get_field('slogan'); ?></p>
    </div>
</div>