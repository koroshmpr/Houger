<section class="container py-lg-5 py-3 text-center">
    <div class="text-center pb-4">
        <h3 class="fs-5 fw-bold text-dark">مشتریان آژانس بی‌تی‌ال هوگر</h3>
        <p class="small">برندهایی که با آنها افتخار همکاری داشته‌ایم</p>
    </div>
    <div class="row row-cols-2 row-cols-lg-5 justify-content-center align-items-center overflow-scroll p-lg-5">
        <?php
        $cliendType = get_field('clients_type');
        if ($cliendType == 'fromList') {
            $selected_clients = get_field('clients'); // Make sure 'clients' is the correct field name

            if ($selected_clients) {
                foreach ($selected_clients as $client) {
                    $client_id = $client->ID;
                    $client_thumb = get_the_post_thumbnail_url($client_id, 'thumbnail');
                    $client_name = get_the_title($client_id);
                    ?>
                    <img class="object-fit ratio-1x1 img-fluid grayscale-img-hover" height="200"
                         src="<?php echo $client_thumb; ?>"
                         alt="<?php echo $client_name; ?>">
                    <?php
                }
            }
        }
        if ($cliendType == 'costumList') {
            $CustomClients = get_field('clients_costume'); // Make sure 'clients_costume' is the correct field name

            if ($CustomClients) {
                foreach ($CustomClients as $client) {
                    // Check if the current item is an image
                    if ($client['mime_type'] && strpos($client['mime_type'], 'image') !== false) {
                        ?>
                        <img class="object-fit ratio-1x1 img-fluid grayscale-hover" height="200"
                             src="<?php echo esc_url($client['url']); ?>"
                             alt="<?php echo esc_attr($client['title']); ?>">
                        <?php
                    }
                }
            }
        }

        ?>

    </div>
    <a href="<?= get_post_type_archive_link('clients'); ?>"
       class="grayscale-hover px-3 py-1 rounded-pill text-center shadow-none">نمایش همه مشتریان
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-play-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
    </a>
</section>