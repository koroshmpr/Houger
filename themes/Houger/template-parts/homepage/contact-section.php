<section class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-lg-evenly justify-content-center">
            <div class="col-lg-4 d-flex flex-column justify-content-between px-4 px-lg-2">
                <div class="d-flex align-items-center gap-3">
                    <p>اگه به مشاوره نیاز دارید ما با شما تماس میگیریم</p>
                    <svg class="rotate col-4" xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" width="150" height="150" viewBox="0 0 100.35 71.35">
                        <defs>
                            <style>
                                .arrow-1 {
                                    fill: none;
                                    stroke: #000;
                                    stroke-miterlimit: 10;
                                    stroke-width: .5px;
                                }
                            </style>
                        </defs>
                        <g id="Layer_1-2" data-name="Layer 1">
                            <g>
                                <line class="arrow-1" x1="100.35" y1="35.18" x2=".35" y2="35.18"/>
                                <polyline class="arrow-1" points="35.35 .18 .35 35.18 36.35 71.18"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="text-end">
                    <p class="small">برای اطلاعات بیشتر با شماره زیر تماس بگیرید</p>
                    <a class="fw-bold text-dark fs-2" href="tel:<?= get_field('phone', 'option'); ?>">
                        021-<?= get_field('phone_show', 'option'); ?>
                    </a>
                </div>

            </div>
            <div class="col-lg-4 bg-white p-4 p-lg-5 shadow-sm">
                <?php  echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>
        </div>
    </div>

</section>