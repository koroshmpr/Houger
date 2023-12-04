<section class="position-relative">
    <?php
    $video = get_field('hero_video');
    if ($video) : ?>
        <video class="img-fluid h-100 w-100" autoplay muted loop>
            <source src="<?= $video['url']; ?>" src="<?= $video['url']; ?>">
        </video>
        <div class="position-absolute top-50 start-75 col-10 col-lg-4 translate-middle-x text-end text-white start-lg-50">
            <p class="mb-1" data-aos="fade-right" data-aos-delay="200"><?= get_field('slogan_description'); ?></p>
            <h1 class="mb-0" data-aos="fade-right" data-aos-delay="300"><?= get_field('slogan'); ?></h1>
            <div class="mt-lg-3" data-aos="fade-right" data-aos-delay="400">
                <a href="tel:<?= get_field('phone', 'option'); ?>"
                   class="btn btn-white fs-6 fw-bold"> مشاوره
                    <span class="px-1"><?= get_field('phone_show', 'option'); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="20" height="20" viewBox="0 0 32 32"
                         preserveAspectRatio="xMidYMid meet" style="filter: drop-shadow(0 0 0 black);">
                        <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)" fill="#ebb446"
                           stroke="none">
                            <path d="M22 300 c-28 -27 -28 -55 3 -116 44 -88 162 -184 227 -184 27 0 68 33 68 56 0 6 -18 24 -41 38 -38 26 -42 26 -59 11 -25 -23 -51 -13 -94 35 -40 45 -43 56 -20 81 14 16 13 21 -12 58 -30 46 -41 49 -72 21z m70 -38 c16 -26 16 -31 3 -42 -25 -21 -17 -44 32 -93 50 -50 67 -56 93 -32 14 13 20 12 54 -11 35 -24 36 -27 23 -47 -8 -12 -22 -24 -32 -25 -78 -16 -254 153 -255 245 0 26 38 57 54 43 6 -4 19 -22 28 -38z"/>
                            <path d="M184 273 c2 -3 19 -12 38 -21 22 -11 37 -29 45 -52 9 -25 12 -29 12 -13 1 29 -43 79 -74 85 -14 3 -24 3 -21 1z"/>
                            <path d="M200 227 c13 -7 30 -24 37 -37 7 -14 13 -19 13 -10 0 26 -30 60 -53 60 -21 0 -21 -1 3 -13z"/>
                            <path d="M197 190 c9 -11 19 -17 21 -15 6 6 -18 35 -29 35 -5 0 -1 -9 8 -20z"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    <?php endif; ?>
</section>