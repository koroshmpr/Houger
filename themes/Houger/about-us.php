<?php /* Template Name: about us */
get_header(); ?>
<section class=" py-5 shadow-sm"
         style='
         background: url("http://localhost:10064/wp-content/uploads/2023/10/website-image-1-ai-27.jpg");
          background-size: cover ;
          background-position: center;
          height: 60vh ;
          margin-top: 60px;'>
    <div class="container h-100  d-flex flex-column justify-content-center align-items-center gap-5">
        <h1 class="text-center display-2 text-white fw-bolder" data-aos="fade-up"
            data-aos-duration="600"><?= get_the_title(); ?></h1>
        <p class="col-lg-7 text-white text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            خونه جایی‌ که اون رو بدیهی می‌دونیم اما دقیقا همین خونه است که بر حال و رفتار و نحوه‌ی «بودن» ما اثر
            می‌گذاره. آثار حضور ما در خونه می‌مونه و به خونه معنا می‌بخشه. خونه مأمن ست، خانواده ست، وطن ست، میراث و
            تبار و انواع و اقسام فداکاری‌هاست. ما در پنتاهوم خونه‌تون رو همون‌طوری که می‌خواین می‌سازیم. پنتاهوم، یک
            استودیو طراحی و ساخت مبلمانه. مــا سفارش شما رو از اولین قدم تا آخرین قدم متناسب با خونه شما، سلیقه و
            نیازتون شخصی‌سازی می‌کنیم و با همراهی طراحان داخلی کاربلد، استادکاران ماهر و استفاده از متریال باکیفیت
            خونه‌تون رو همون‌طوری که می‌خواین می‌سازیم.</p>
    </div>
</section>
<section class="py-5 overflow-hidden bg-primary bg-opacity-50">
    <div class="py-4 d-flex flex-column align-items-center text-center">
<!--        --><?php
//        if (have_rows('products_list')):
//    // Loop through rows.
//    while (have_rows('products_list')) : the_row(); ?>
        <div class="rounded-circle shadow-sm feature" data-aos-duration="500" data-aos="fade-up"><i
                    class="bi bi-star-fill text-white"></i>
            <div class="position-absolute end-100 top-50 border p-2 translate-middle-y me-5 shadow-sm bg-white"
                 style="width: 500px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus culpa cum, doloribus error id itaque
                maxime neque nostrum quam suscipit. Architecto at consequuntur, expedita molestias nesciunt nulla
                pariatur quo voluptatem?
            </div>
        </div>
        <div class="overflow-hidden d-flex">
            <div class="vr mx-auto py-5 bg-primary bg-opacity-50" data-aos="fade-down" data-aos-delay="50"></div>
        </div>

<!--     --><?php //endforeach; endif; ?><!--?>-->
        <div class="rounded-circle shadow-sm feature" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
            <i class="bi bi-star-fill text-white"></i>
            <div class="position-absolute start-100 top-50 border p-2 translate-middle-y ms-5 shadow-sm bg-white"
                 style="width: 500px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, adipisci aliquid asperiores cum cupiditate
                ea nesciunt nostrum nulla, quod recusandae sit, soluta velit voluptas. A aspernatur aut commodi facilis
                voluptate?
            </div>
        </div>
        <div class="overflow-hidden d-flex">
            <div class="vr mx-auto py-5 bg-primary bg-opacity-50" data-aos="fade-down" data-aos-delay="150"></div>
        </div>


        <div class="rounded-circle shadow-sm feature" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
            <i class="bi bi-star-fill text-white"></i>
            <div class="position-absolute end-100 top-50 border p-2 translate-middle-y me-5 shadow-sm bg-white"
                 style="width: 500px;">
                lorem ipsum dolor
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
