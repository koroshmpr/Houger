<?php get_header(); ?>

    <section class="container py-3 min-vh-100">
        <div class="w-100 py-3">
            <form class="search-form d-flex gap-1 align-items-center" method="get"
                  action="<?php echo esc_url(home_url('/')); ?>">
                <div class="input-group">
                    <input id="search-form" type="search" name="s"
                           class="form-control text-primary bg-white bg-opacity-10 py-3"
                           placeholder="جستجو..." value="<?= the_search_query(); ?>" aria-label="Search">
                    <button type="submit" class="btn bg-primary text-white d-flex align-items-center rounded-end px-5"
                            aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="d-grid column-gap-3 d-lg-flex align-items-center">
            نتیجه جستجو برای :
            <h1 class="fw-bold ms-3 mt-3 mt-lg-0"> <?= the_search_query(); ?> </h1>
        </div>
        <h2 class="mt-lg-5 my-3 pb-3 text-center text-lg-start border-bottom border-2 border-primary border-opacity-50">
            <?php
            // Get the selected post type from the URL query parameters
            $post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : '';
            // Check if a post type filter is applied
            if (!empty($post_type)) {
                $post_type_info = get_post_type_object($post_type);
                $post_type_label = $post_type_info->labels->name;
                echo ' جستحو در ' . $post_type_label;
            } else {
                echo ' نتایج جستجو کلی';
            }
            ?> </h2>
        <?php
        // Create a new WP_Query for the current post type (if filter is applied)
        $args = array(
            'post_type' => $post_type ? $post_type : array('post', 'portfolio', 'services'),
            's' => get_search_query(),
        );
        $post_type_query = new WP_Query($args);
        if ($post_type_query->have_posts()) {
            echo '<div class="row m-0 row-cols-lg-3 justify-content-lg-start justify-content-center row-cols-1 gy-2">';

            while ($post_type_query->have_posts()) {
                $post_type_query->the_post();
                $current_post_type = get_post_type();
                if ($current_post_type == 'services') { ?>
                    <div class="px-1">
                        <div class="bg-primary service-home p-3">
                            <?php get_template_part('template-parts/services/services-card'); ?>
                        </div>
                    </div>
                <?php } elseif ($current_post_type == 'post') {
                    get_template_part('template-parts/portfolio/portfolio-card');
                } elseif ($current_post_type == 'portfolio') {
                    get_template_part('template-parts/portfolio/portfolio-card');
                }
            }
            echo '</div>';
        } else {
            echo '<p class="fs-2">موردی یافت نشد !</p>';
        }
        wp_reset_postdata(); // Reset the post data
        ?>
        <!--        <div class="pagination d-flex py-2 justify-content-center gap-3 align-items-center">-->
        <!--            --><?php
        //            global $wp_query;
        //            $big = 999999999; // need an unlikely integer
        //            echo paginate_links(array(
        //                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        //                'format' => '?paged=%#%',
        //                'current' => max(1, get_query_var('paged')),
        //                'total' => $wp_query->max_num_pages,
        //                'prev_text' => __('&laquo; Previous'),
        //                'next_text' => __('Next &raquo;'),
        //            ));
        //            ?>
        <!--        </div>-->

    </section>
<?php get_footer(); ?>