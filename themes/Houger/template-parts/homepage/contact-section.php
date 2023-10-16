<section class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-lg-evenly justify-content-center">
            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <p>اگه به مشاوره نیاز دارید ما با شما تماس میگیریم</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-arrow-left rotate" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </div>
                <div class="text-end">
                    <p class="small">برای اطلاعات بیشتر با شماره زیر تماس بگیرید</p>
                    <a class="fw-bold text-dark fs-2" href="tel:<?= get_field('phone', 'option'); ?>">
                        021-<?= get_field('phone_show', 'option'); ?>
                    </a>
                </div>

            </div>
            <div class="col-lg-4 bg-white p-5 shadow-sm">
                <?php  echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>
        </div>
    </div>

</section>