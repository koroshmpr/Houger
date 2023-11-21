<?php
if ($args['portfolio']->have_posts()) {
    while ($args['portfolio']->have_posts()) : $args['portfolio']->the_post();
        ?>
        <!-- Modal -->
        <div class="modal blur portfolio-modal fade" id="modal-<?= get_the_ID(); ?>" tabindex="-1"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog portfolio-dialog modal-xl glass-card"
                 style="pointer-events: auto!important;">
                <div class="modal-content bg-transparent border-3 rounded-0 border-white border">
                    <div class="modal-body p-lg-3 p-1">
                        <div class="swiper portfolio-swiper rounded-2">
                            <div class="swiper-wrapper">
                                <?php
                                if (have_rows('gallery_slider')):
                                    while (have_rows('gallery_slider')) : the_row(); ?>
                                        <div class="swiper-slide">
                                            <?php if (get_sub_field('file_type') == 'image') { ?>
                                                <img class="w-100"
                                                     src="<?php echo get_sub_field('item_image')['url']; ?>"
                                                     alt="<?php echo get_sub_field('item_image')['title']; ?>">
                                            <?php } ?>
                                            <?php if (get_sub_field('file_type') == 'video') { ?>
                                                <video class="w-100" controls
                                                       src="<?php echo get_sub_field('item_video')['url']; ?>">
                                                </video>
                                            <?php } ?>
                                        </div>
                                    <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <?php $row_count = count(get_field('gallery_slider'));
                            if ($row_count > 1) { ?>
                                <div class="row px-3 justify-content-between align-items-center bg-white">
                                    <div class="col-6 d-flex justify-content-start gap-3 text-primary fs-4">
                                        <div class="swiper-next" data-aos="fade-left" data-aos-delay="300"
                                             data-aos-offset="0">
                                            <?php get_template_part('template-parts/svg/right-arrow'); ?>
                                        </div>
                                        <div class="swiper-prev" data-aos="fade-right" data-aos-delay="300"
                                             data-aos-offset="0">
                                            <?php get_template_part('template-parts/svg/left-arrow'); ?>
                                        </div>
                                    </div>
                                    <div class="col-6" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
                                        <div class="swiper-paginate-portfolio text-primary d-flex justify-content-end sofia gap-1 align-items-center fw-light"></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
}