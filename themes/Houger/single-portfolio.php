<?php get_header(); ?>

<?php $gallery = get_field('gallery'); ?>
    <section class="container-fluid" style="margin-top: 70px;">
        <div class="row">
            <div class="col-lg-4 d-flex flex-column justify-content-between align-content-center px-0 overflow-hidden shadow-sm">
                <h1 class="py-4 text-center bg-primary text-primary shadow-sm bg-opacity-25" data-aos="fade-down"
                    data-aos-duration="500">
                    <?php while( have_rows('svg_label') ): the_row();
                        echo get_sub_field('svg_fill');?>
                    <?php endwhile; ?>
                    <?= get_the_title(); ?>
                </h1>
                <p class="px-lg-5 p-4 py-lg-0 text-center text-lg-start" data-aos="fade-left" data-aos-delay="150"
                   data-aos-duration="500"><?= get_the_content(); ?></p>
                <div class="text-center">
                    <div class="call-button_container mb-4 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="700">
                        <a class="call-button bg-primary text-white rounded-circle d-flex justify-content-center align-content-center"
                           href="tel:<?= get_field('phone', 'option'); ?>">
                            <i class="bi bi-telephone"></i>
                        </a>
                    </div>
                    <?php get_template_part('template-parts/share-button'); ?>
                </div>
            </div>
            <div class="col-lg-8 order-first order-lg-last px-0 swiper swiper2">
                <div class="swiper-wrapper">
                    <?php
                    if ($gallery): ?>
                        <?php foreach ($gallery as $image): ?>
                            <div class="swiper-slide">
                                <img class="object-fit img-fluid"
                                     src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <!-- If we need pagination -->
                <div class="bg-white bg-opacity-25 swiper-pagination w-100 bottom-0 start-0 d-flex justify-content-center p-2"></div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>