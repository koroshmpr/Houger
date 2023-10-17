<a class="bg-primary service-home" href="<?php the_permalink(); ?>">
    <div class="w-100 d-flex pb-5">
        <?php if (get_field('logo_type') == 'svg') { ?>
            <span class="col-4"><?= get_field('svg'); ?></span>
        <?php } elseif (get_field('logo_type') == 'img') { ?>
            <img class="w-auto" height="100"
                 src="<?= get_field('img') ? get_field('img')['url'] : ''; ?>"
                 alt="<?= get_the_title(); ?>">
        <?php } ?>
    </div>
    <div class="d-flex flex-column justify-content-end text-white text-end">
        <p><?= get_the_title(); ?></p>
        <p"><?= $args['category'] ? $args['category'] : ''; ?></p>

    </div>
</a>