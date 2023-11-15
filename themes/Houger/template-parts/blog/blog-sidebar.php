<div class="col-lg-3 ps-lg-3 pe-lg-0 pt-4 pt-lg-0">
    <!--    search form-->
    <form class="search-form d-flex gap-1 align-items-center" method="get"
          action="<?php echo esc_url(home_url('/')); ?>">
        <div class="input-group position-relative">
            <input id="search-form" type="search" name="s"
                   class="form-control text-primary bg-white bg-opacity-10 ps-5 py-3"
                   placeholder="جستجو..." aria-label="Search">
            <button type="submit"
                    class="position-absolute start-0 top-50 translate-middle-y ps-3 btn text-info d-flex align-items-center z-top"
                    aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
    </form>
    <!--    archive posts by date-->
    <div class="py-4">
        <h4 class="py-3 text-primary">آرشیو</h4>
        <?php
        global $post;

        $posts = get_posts(array(
            'post_type' => 'post',
            'nopaging' => true,
            'orderby' => 'date',
            'order' => 'DESC',
        ));

        $_year_mon = '';   // previous year-month value
        $_has_grp = false; // TRUE if a group was opened
        echo '<div class="year row">';
        foreach ($posts as $post) {
            setup_postdata($post);

            $time = strtotime($post->post_date);
            $showDate = get_the_date('F , Y');
            $year = date('Y', $time);
            $mon = date('F', $time);
            $year_mon = "$year-$mon";
            // Open a new group.
            if ($year_mon !== $_year_mon) {
                // Close previous group, if any.
                $_has_grp = true;
                echo '<a class="text-dark text-opacity-75 border-bottom border-info py-2" href="' . get_month_link($year, date('m', $time)) . '">';
                echo "$showDate";
                echo '</a>';
            }
            $_year_mon = $year_mon;
        }

        // Close the last group, if any.
        if ($_has_grp) {
            echo '</div>';
        }
        wp_reset_postdata();
        ?>
    </div>
    <!--    most visited post -->
    <div class="row gap-2 mt-3 justify-content-center">
        <h4 class="fw-bold">اخبار</h4>
        <div class="row justify-content-center gap-3">
            <?php
            $args2 = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'order' => 'DESC',
                'posts_per_page' => '2',
                'ignore_sticky_posts' => true
            );
            $loop2 = new WP_Query($args2);
            if ($loop2->have_posts()) :
                $i = 0;
                /* Start the Loop */
                ?>
                <?php while ($loop2->have_posts()) :
                $loop2->the_post(); ?>
                <article
                        class="border border-info border-opacity-50 row px-0 justify-content-between align-items-stretch">
                    <div class="col-3 position-relative px-0">
                        <img class="object-fit img-fluid ratio-1x1" height="250"
                             src="<?php echo the_post_thumbnail_url(); ?>"
                             alt="<?php echo get_the_title(); ?>">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center p-3">
                        <div class="d-flex justify-content-between pt-3 pt-lg-0">
                            <div class="text-primary fw-bold fs-6 text-center">
                                <?= get_the_title(); ?>
                            </div>
                            <div>
                                <a class="btn btn-primary p-0 border-0 rounded-circle" href="<?php the_permalink(); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" width="30"
                                         height="30" viewBox="0 0 25.39 25.45">
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
            <?php
            endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <!--    social media-->
    <div>
        <h6 class="py-4">
            ما را در شبکه های اجتماعی دنبال کنید
        </h6>
        <div class="w-100 d-flex align-items-center justify-content-center gap-3 pb-5 pb-lg-0">
            <?php
            if (have_rows('social', 'option')):
                // Loop through rows.
                while (have_rows('social', 'option')) : the_row(); ?>
                    <a class="text-info" aria-label="<?= get_sub_field('name', 'option'); ?>"
                       href="<?= get_sub_field('link', 'option')['url']; ?>">
                        <?= get_sub_field('icon', 'option'); ?>
                    </a>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>
