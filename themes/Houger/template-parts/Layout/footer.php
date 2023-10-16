<div class="container">
    <div class="row justify-content-start align-items-start py-4 gap-4 gap-lg-0">
        <div class="col-lg-2 text-center">
            <a aria-label="logo-footer" href="/">
                <?= get_field('footer_logo', 'option'); ?>
            </a>
        </div>
        <div class="col-lg-6">
            <?php
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations['footerLocationOne']);
            if ($menu) :
                wp_nav_menu(array(
                    'theme_location' => 'footerLocationOne',
                    'menu_class' => 'list-unstyled d-flex gap-1 flex-lg-column justify-content-center justify-content-start align-items-start flex-wrap mt-lg-3',
                    'container' => false,
                    'menu_id' => 'navbarTogglerMenu',
                    'item_class' => 'nav-item ', // Add 'dropdown' class to top-level menu items
                    'link_class' => 'nav-link text-primary', // Add 'nav-link' and 'dropdown-toggle' classes to menu item links
                    'depth' => 1,
                ));
            endif;
            ?>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column justify-content-start align-items-lg-start align-content-center gap-4 gap-lg-5">
                <address class="text-primary text-center text-lg-start text-opacity-75 fs-5">
                    <?= get_field('address', 'option'); ?>
                </address>
                <div class="w-100 d-flex align-items-center justify-content-around">
                    <a class="fs-5" href="mailto:<?= get_field('email', 'option'); ?>">
                        <?= get_field('email', 'option'); ?>
                    </a>
                    <a class="fw-bold fs-3" href="tel:<?= get_field('phone', 'option'); ?>">
                        021-<?= get_field('phone_show', 'option'); ?>
                    </a>
                </div>
                <div class="w-100 d-flex align-items-center justify-content-center gap-4 pb-5 pb-lg-0">
                    <?php
                    if (have_rows('social', 'option')):
                        // Loop through rows.
                        while (have_rows('social', 'option')) : the_row(); ?>
                            <a class="text-primary" aria-label="<?= get_sub_field('name', 'option'); ?>"
                               href="<?= get_sub_field('link', 'option')['url']; ?>">
                                <?= get_sub_field('icon', 'option'); ?>
                            </a>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>