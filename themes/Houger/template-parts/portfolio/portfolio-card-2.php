<div class="px-0 position-relative overflow-hidden post-card border border-1 border-white" <?= $args['modal'] ?? ''; ?>>
    <img class="card-img object-fit img-fluid ratio-1x1 h-100" height="250" src="<?php echo the_post_thumbnail_url(); ?>"
         alt="<?php echo get_the_title(); ?>">
    <div class="position-absolute top-0 bg-primary bg-opacity-75 rounded-start rounded-top rounded-3 border-5 border border-white border-top-0 border-start-0 card_detail d-flex flex-column justify-content-between text-white">
        <div class="d-flex flex-column justify-content-center pb-2 px-2 align-items-center">
            <?php $client = get_field('client');
            if ($client) {
                $client_id = $client->ID;
                $client_en = get_field('name_en', $client_id);
                $client_name = $client->post_name;
                $client_thumb = get_the_post_thumbnail_url($client_id, 'thumbnail');?>
                <img class="mt-n3" width="100" height="100" src="<?= $client_thumb; ?>" alt="<?= $client_name; ?>">
            <h6 class="fs-6 text-white text-opacity-75 mt-n3 text-center"><?= get_the_title(); ?></h6>
            <?php }
            if (!$client) {?>
                <h6 class="fs-6 text-white text-opacity-75 text-center pt-3 px-3"><?= get_the_title(); ?></h6>
            <?php }?>
        </div>
    </div>
    <?php $slogan = get_field('slogan');
    if($slogan) {
    ?>
        <p class="slogan text-end position-absolute end-0 bottom-0 rounded-end rounded-bottom rounded-3 bg-primary bg-opacity-75 border-5 py-3 px-4 border border-white text-white border-end-0 border-bottom-0 mb-0"><?= get_field('slogan'); ?></p>
    <?php } ?>
</div>