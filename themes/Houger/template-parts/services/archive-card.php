<div class="service-archive d-flex p-4 justify-content-between" <?= $args['modal'] ?? ''; ?>>
    <div class="d-flex flex-column text-white text-start">
        <p><?= get_the_title(); ?></p>
        <p><?= $args['category'] ??  ''; ?></p>

    </div>
    <div class="">
        <?php if (get_field('logo_type') == 'svg') { ?>
            <span class="col-4"><?= get_field('svg'); ?></span>
        <?php } elseif (get_field('logo_type') == 'img') { ?>
            <img class="w-auto" height="100"
                 src="<?= get_field('img') ? get_field('img')['url'] : ''; ?>"
                 alt="<?= get_the_title(); ?>">
        <?php } ?>
    </div>
</div>