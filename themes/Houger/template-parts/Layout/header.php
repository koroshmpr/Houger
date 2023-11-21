<nav class="navbar py-3">
    <div class="container">
        <div class="w-100 d-flex align-items-center justify-content-between">
            <div class="d-lg-flex align-content-center gap-3 d-none">
                <?php get_template_part('template-parts/search-form'); ?>
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['headerMenuLocation']);
                if ($menu) :
                    wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation',
                        'menu_class' => 'list-unstyled gap-3 mb-0 align-items-center flex-wrap d-flex',
                        'container' => false,
                        'menu_id' => 'navbarTogglerMenu',
                        'item_class' => 'nav-item ', // Add 'dropdown' class to top-level menu items
                        'link_class' => 'nav-link text-dark', // Add 'nav-link' and 'dropdown-toggle' classes to menu item links
                        'depth' => 1,
                    ));
                endif;
                ?>
            </div>
            <button class="btn p-0 border-0 navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="bg-primary menu-bar1"></div>
                    <div class="bg-primary menu-bar2"></div>
                    <div class="bg-primary menu-bar3"></div>
                </div>
            </button>
            <div class="offcanvas offcanvas-bottom bg-white bg-opacity-75" tabindex="-1" id="offcanvasRight"
                 aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-between align-items-center">
                    <?php
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations['headerMenuLocation']);
                    if ($menu) :
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation',
                            'menu_class' => 'navbar-nav gap-2 align-items-center flex-wrap',
                            'container' => false,
                            'menu_id' => 'navbarTogglerMenu',
                            'item_class' => 'nav-item ', // Add 'dropdown' class to top-level menu items
                            'link_class' => 'nav-link text-primary fs-3', // Add 'nav-link' and 'dropdown-toggle' classes to menu item links
                            'depth' => 1,
                        ));
                    endif;
                    ?>
                   <div class="w-100 row gy-2">
                       <?php
                       $classFrom = "shadow px-0";
                       $args = array(
                               'formClass' => $classFrom
                       );
                       get_template_part('template-parts/blog/blog-search-form' , null , $args); ?>
                       <?php
                       $padding = "py-3 bg-white";
                       $args = array(
                           'padding' => $padding
                       );
                       get_template_part('template-parts/social-media', null , $args);?>
                   </div>
                </div>
            </div>
            <a class="navbar-brand m-0" href="/">
                <?php
                $logoType = get_field('logo_type', 'option');
                $logoSvg = get_field('site_logo_svg', 'option');
                $logoImg = get_field('site_logo_image', 'option');
                if ($logoType == 'svg'){
                    echo $logoSvg;
                } if ($logoType == 'img'){ ?>
                    <img height="50" src="<?= $logoImg['url']?>" alt="<?= $logoImg['title']?>">
                <?php } ?>
            </a>
        </div>
    </div>
</nav>