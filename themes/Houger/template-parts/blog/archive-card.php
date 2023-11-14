<article class="border border-info border-opacity-50 row px-0 justify-content-between align-items-stretch">
    <div class="col-lg-4 position-relative px-0">
        <img class="object-fit img-fluid ratio-1x1" height="250" src="<?php echo the_post_thumbnail_url(); ?>"
              alt="<?php echo get_the_title(); ?>">
        <div class="text-primary fw-bold fs-4 position-absolute bottom-0 start-0 end-0 pb-3 text-center">
            <?= get_the_title(); ?>
        </div>
    </div>
    <div class="col-lg-8 d-flex flex-column justify-content-between p-4">
        <div class="text-justify">
            <?= wp_trim_words(get_the_content(), 25); ?>
        </div>
        <div class="d-flex justify-content-between pt-3 pt-lg-0">
            <span>
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" width="30" height="30" viewBox="0 0 31.71 24.17">
                  <defs>
                    <style>
                      .calendar-1 {
                          fill: #0071bc;
                      }
                    </style>
                  </defs>
                  <g id="Layer_1-2" data-name="Layer 1">
                    <g>
                      <path class="calendar-1" d="M27.95,24.17H.99c-.55,0-.99-.44-.99-.99V2.71c0-.55,.44-.99,.99-.99h1.9c.14,0,.26,.12,.26,.26v1.31c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V1.98c0-.14,.12-.26,.26-.26h3.86c.14,0,.26,.12,.26,.26v1.31c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V1.98c0-.14,.12-.26,.26-.26h3.86c.14,0,.26,.12,.26,.26v1.31c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V1.98c0-.14,.12-.26,.26-.26h3.85c.14,0,.26,.12,.26,.26v1.31c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V1.98c0-.14,.12-.26,.26-.26h3.85c.14,0,.26,.12,.26,.26v1.31c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V1.98c0-.14,.12-.26,.26-.26h1.9c.55,0,.99,.44,.99,.99V20.29c0,.14-.12,.26-.26,.26h-3.24v3.37c0,.14-.12,.26-.26,.26ZM.99,2.24c-.26,0-.47,.21-.47,.47V23.18c0,.26,.21,.47,.47,.47H27.69v-3.37c0-.14,.12-.26,.26-.26h3.24V2.71c0-.26-.21-.47-.47-.47h-1.64v1.05c0,.37-.3,.67-.67,.67h-1.28c-.37,0-.67-.3-.67-.67v-1.05h-3.33v1.05c0,.37-.3,.67-.67,.67h-1.28c-.37,0-.67-.3-.67-.67v-1.05h-3.33v1.05c0,.37-.3,.67-.67,.67h-1.28c-.37,0-.67-.3-.67-.67v-1.05h-3.33v1.05c0,.37-.3,.67-.67,.67h-1.28c-.37,0-.67-.3-.67-.67v-1.05h-3.33v1.05c0,.37-.3,.67-.67,.67h-1.28c-.37,0-.67-.3-.67-.67v-1.05H.99Z"/>
                      <path class="calendar-1" d="M31.45,6.99H.26c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26H31.45c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M4.59,3.96h-1.28c-.37,0-.67-.3-.67-.67V.67c0-.37,.3-.67,.67-.67h1.28c.37,0,.67,.3,.67,.67V3.29c0,.37-.3,.67-.67,.67ZM3.31,.52c-.08,0-.15,.07-.15,.15V3.29c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V.67c0-.08-.07-.15-.15-.15h-1.28Z"/>
                      <path class="calendar-1" d="M10.54,3.96h-1.28c-.37,0-.67-.3-.67-.67V.67c0-.37,.3-.67,.67-.67h1.28c.37,0,.67,.3,.67,.67V3.29c0,.37-.3,.67-.67,.67Zm-1.28-3.44c-.08,0-.15,.07-.15,.15V3.29c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V.67c0-.08-.07-.15-.15-.15h-1.28Z"/>
                      <path class="calendar-1" d="M16.5,3.96h-1.28c-.37,0-.67-.3-.67-.67V.67c0-.37,.3-.67,.67-.67h1.28c.37,0,.67,.3,.67,.67V3.29c0,.37-.3,.67-.67,.67Zm-1.28-3.44c-.08,0-.15,.07-.15,.15V3.29c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V.67c0-.08-.07-.15-.15-.15h-1.28Z"/>
                      <path class="calendar-1" d="M22.45,3.96h-1.28c-.37,0-.67-.3-.67-.67V.67c0-.37,.3-.67,.67-.67h1.28c.37,0,.67,.3,.67,.67V3.29c0,.37-.3,.67-.67,.67Zm-1.28-3.44c-.08,0-.15,.07-.15,.15V3.29c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V.67c0-.08-.07-.15-.15-.15h-1.28Z"/>
                      <path class="calendar-1" d="M28.41,3.96h-1.28c-.37,0-.67-.3-.67-.67V.67c0-.37,.3-.67,.67-.67h1.28c.37,0,.67,.3,.67,.67V3.29c0,.37-.3,.67-.67,.67Zm-1.28-3.44c-.08,0-.15,.07-.15,.15V3.29c0,.08,.07,.15,.15,.15h1.28c.08,0,.15-.07,.15-.15V.67c0-.08-.07-.15-.15-.15h-1.28Z"/>
                      <path class="calendar-1" d="M28.02,24.1c-.07,0-.13-.02-.18-.07-.1-.1-.11-.27,0-.37l3.43-3.56c.1-.1,.26-.11,.37,0,.1,.1,.11,.27,0,.37l-3.43,3.56c-.05,.05-.12,.08-.19,.08Z"/>
                      <path class="calendar-1" d="M8.64,11.75H3.15c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M18.6,11.75h-5.48c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M28.56,11.75h-5.48c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M8.64,15.59H3.15c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M18.6,15.59h-5.48c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M28.56,15.59h-5.48c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M8.64,19.42H3.15c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M18.6,19.42h-5.48c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                      <path class="calendar-1" d="M28.56,19.42h-5.48c-.14,0-.26-.12-.26-.26s.12-.26,.26-.26h5.48c.14,0,.26,.12,.26,.26s-.12,.26-.26,.26Z"/>
                    </g>
                  </g>
                </svg>
                <?php echo get_the_date('d  F , Y'); ?>
            </span>
            <div>
                <a href="<?php the_permalink(); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" width="30" height="30" viewBox="0 0 25.39 25.45">
                        <defs>
                            <style>
                                .chervon-1 {
                                    fill-rule: evenodd;
                                }

                                .chervon-1, .chervon-2 {
                                    fill: none;
                                    stroke: #0071bc;
                                    stroke-miterlimit: 10;
                                    stroke-width: 1.5px;
                                }
                            </style>
                        </defs>
                        <g id="Layer_1-2" data-name="Layer 1">
                            <g>
                                <polyline class="chervon-1" points="17.67 19.49 5.98 12.72 17.67 5.96"/>
                                <ellipse class="chervon-2" cx="12.7" cy="12.72" rx="11.95" ry="11.97"/>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</article>