<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="keywords" content="<?= get_bloginfo('name'); ?>">
    <meta name="description" content="<?= get_bloginfo('description'); ?>">
    <meta name="author" content="<?= get_bloginfo('author'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<header class="position-fixed z-10 w-100 bg-white shadow-sm">
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
                    <div class="offcanvas-body">
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
                                'link_class' => 'nav-link text-primary fw-bold fs-3', // Add 'nav-link' and 'dropdown-toggle' classes to menu item links
                                'depth' => 1,
                            ));
                        endif;
                        ?>
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
</header>
<main>




