<?php
if ($args['services']->have_posts()) {
    $i = 0;
    while ($args['services']->have_posts()) : $args['services']->the_post();
        $i++; ?>
        <!-- Modal -->
        <div class="modal blur service-modal fade" id="modal-<?= get_the_ID(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="pointer-events: auto!important;">
                <div class="card w-100 h-100 border-0 bg-primary text-white p-4 p-xxl-5 rounded-0 d-flex justify-content-between flex-column gap-3 align-items-center glass-card">
                    <div class="d-flex w-100 align-items-center gap-3 justify-content-between mb-5">
                        <?php if (get_field('logo_type') == 'svg') { ?>
                            <span class="col-4"><?= get_field('svg'); ?></span>
                        <?php } elseif (get_field('logo_type') == 'img') { ?>
                            <img class="w-auto" height="100"
                                 src="<?= get_field('img') ? get_field('img')['url'] : ''; ?>"
                                 alt="<?= get_the_title(); ?>">
                        <?php } ?>
                        <h5 class="card-title fs-4 fw-semibold">
                            <?php the_title(); ?>
                        </h5>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 pb-2 services-card">
                        <?php $content = get_the_content();

                        $lines = explode("\n", $content);
                        $dividedLines = ceil(count($lines) / 2);

                        if (count($lines) > 8) { // Display in two columns if more than 7 lines
                            ?>
                            <div class="row align-items-center w-100 flex-row-reverse">
                                <ul class="col-md-6 lh-lg">
                                    <?php echo wpautop(implode("\n", array_slice($lines, $dividedLines))); ?>
                                </ul>
                                <div class="col-md-6 lh-lg">
                                    <?php echo wpautop(implode("\n", array_slice($lines, 0, $dividedLines))); ?>
                                </div>
                            </div>
                            <?php echo "</div>";
                        } else { ?>
                            <div class="lh-lg">
                                <?php echo wpautop($content); ?>
                            </div>
                        <?php } ?>
                        <button class="btn bg-white bg-opacity-10 text-white w-auto z-top fs-5" data-bs-dismiss="modal">
                            بستن
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
}
wp_reset_postdata() ?>