<?php
/** Template Name: about us */

get_header(); ?>
<!--   title     -->
<section class="container">
    <?php
    $title = 'ABOUT US';
    $args = array(
        'title' => $title
    );
    get_template_part('template-parts/title', null, $args);
    ?>
</section>
<!--  description  -->
<section class="container">
    <article class="row justify-content-lg-between justify-content-center py-5">
        <div class="col-lg-5">
            <article class="text-justify">
                <?= get_field('description'); ?>
            </article>
        </div>
        <?php $desImage = get_field('des_image');
        if($desImage) {?>
        <div class="col-lg-5 p-lg-5">
            <img src="<?= $desImage['url']; ?>" alt="<?= $desImage['title']; ?>">
        </div>
        <?php }?>
    </article>
</section>
<!--  structure   -->
<section class="container">
    <article class="py-5">
        <h2 class="display-3 py-4 text-end text-primary">Structure</h2>
        <div class="row row-cols-lg-3">
            <?php
            if (have_rows('structure_list')):
                while (have_rows('structure_list')) : the_row(); ?>
                    <div class="p-2">
                        <div class="bg-warning p-5 h-100">
                            <h5 class="text-primary fw-bold mb-3"><?= get_sub_field('title'); ?></h5>
                            <?php
                            if (have_rows('items')):
                                // Loop through rows.
                                while (have_rows('items')) : the_row(); ?>
                                    <p class="mb-"><?= get_sub_field('item'); ?></p>
                                <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </article>
</section>
<!--  profile    -->
<section class="container">
    <article class="py-5 d-flex justify-content-center align-items-center">
        <a class="col-lg-3 row gap-3 justify-content-center overflow-hidden" href="<?= get_field('portfolio_file')['url']; ?>" download>
            <div class="text-center" data-aos="fade-down">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" width="60" height="60"
                     viewBox="0 0 86.92 86.63">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #004899;
                            }
                        </style>
                    </defs>
                    <g id="Layer_1-2" data-name="Layer 1">
                        <g>
                            <path class="cls-1"
                                  d="M85.04,86.63H2.02c-1.01,0-1.88-.87-1.88-1.88V16.32c0-1.01,.87-1.88,1.88-1.88s1.88,.87,1.88,1.88V83.02H83.31V18.05H16.46c-1.01,0-1.88-.87-1.88-1.88s.87-1.88,1.88-1.88H85.04c1.01,0,1.88,.87,1.88,1.88V84.76c-.14,1.01-1.01,1.88-1.88,1.88Z"/>
                            <path class="cls-1"
                                  d="M30.9,18.05c-.72,0-1.44-.43-1.73-1.15L24.11,3.61H3.75v12.71c0,1.01-.87,1.88-1.88,1.88s-1.88-.87-1.88-1.88V1.88C0,.87,.87,0,1.88,0H25.41c.72,0,1.44,.43,1.73,1.15l5.49,14.44c.29,.87-.14,2.02-1.01,2.31-.43,.14-.58,.14-.72,.14Z"/>
                            <path class="cls-1"
                                  d="M85.04,30.76H2.02c-1.01,0-1.88-.87-1.88-1.88s.87-1.88,1.88-1.88H85.04c1.01,0,1.88,.87,1.88,1.88-.14,1.01-1.01,1.88-1.88,1.88Z"/>
                            <path class="cls-1"
                                  d="M43.46,74.07c-1.01,0-1.88-.87-1.88-1.88v-28.88c0-1.01,.87-1.88,1.88-1.88s1.88,.87,1.88,1.88v28.88c0,1.01-.87,1.88-1.88,1.88Z"/>
                            <path class="cls-1"
                                  d="M43.46,74.07c-.58,0-1.15-.29-1.44-.72l-9.1-12.71c-.58-.87-.43-1.88,.43-2.45,.87-.58,1.88-.43,2.45,.43l7.51,10.54,7.51-10.54c.58-.87,1.73-1.01,2.45-.43,.87,.58,1.01,1.73,.43,2.45l-9.1,12.71c0,.43-.58,.72-1.16,.72Z"/>
                        </g>
                    </g>
                </svg>
            </div>
            <p data-aos="fade-in" data-aos-delay="200" class="text-center fw-bold">Download our Portfolio</p>
        </a>
    </article>
</section>
<!--  awards    -->
<section class="container awards">
    <article class="py-5">
<!--        big title-->
        <h4 class="py-5 text-center text-warning fw-bold user-select-none awards-title" data-aos="fade-in" data-aos-duration="700">HOUGER AWARDS</h4>
        <div class="row row-cols-lg-2 py-5">
            <?php
            if (have_rows('awards')):
                while (have_rows('awards')) : the_row(); ?>
                    <div class="border-bottom border-warning d-flex gap-2 gap-lg-4 align-items-center py-3 py-lg-4 justify-content-center">
                        <div class="col-4 col-lg-4 text-end">
                            <p class="text-primary fw-bold mb-3 fs-4"><?= get_sub_field('name'); ?></p>
                            <p class="mb-0"><?= get_sub_field('place'); ?></p>
                            <p><?= get_sub_field('donator'); ?></p>
                        </div>
                        <div class="col-7 col-lg-6 text-center">
                            <img class="awards-image" src="<?= get_sub_field('image')['url']; ?>"
                                 alt="<?= get_sub_field('image')['title']; ?>">
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </article>
</section>
<!--  certificates   -->
<section class="py-4 bg-primary position-relative">
    <article class="container swiper service_slider overflow-visible">
        <h6 class="text-white fs-5 py-2">
            نظر مشتریان ما در مورد خدمات هوگر
        </h6>
        <div class="swiper-wrapper overflow-hidden">
            <?php
            $certificates = get_field('certificates');
            if ($certificates):
                foreach ($certificates as $certificate): ?>
                    <div class="swiper-slide bg-primary p-3 text-center">
                        <img class="p-1 border border-info rounded" src="<?php echo esc_url($certificate['url']); ?>"
                             alt="<?php echo esc_url($certificate['title']); ?>">
                    </div>
                <?php
                endforeach;
            endif;
            ?>
        </div>
        <div class="services-button-next position-absolute top-50 end-0 z-top d-inline me-n5 mt-3 fs-2">
<!--            <i class="bi bi-chevron-left"></i>-->
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left text-info" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
        </div>
        <div class="services-button-prev position-absolute top-50 z-top d-inline ms-n5 mt-3 fs-2">
<!--            <i class="bi bi-chevron-right "></i>-->
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right text-info" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
            </svg>
        </div>
    </article>

</section>
<?php get_footer(); ?>
