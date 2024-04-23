<section class="container py-lg-5 py-3">
    <div class="row justify-content-lg-between justify-content-center align-items-center">
        <div class="col-lg-7 text-center text-lg-start">
            <h3 class="fw-bolder text-dark pb-3">درباره هوگر</h3>
            <p class="mb-0"><?= get_field('about-description' , 2); ?></p>
        </div>
        <div class="col-3 text-center text-lg-end">
            <a class="btn btn-primary" href="<?= get_field('aboutus_link' , 2)['url'] ?? ''; ?>">بیشتر بدانید</a>
        </div>
    </div>
</section>