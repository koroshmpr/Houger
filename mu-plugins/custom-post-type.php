<?php
function portfolio_post_types()
{
    // portfolio post-type
    register_post_type('portfolio', array(
        'supports' => array('title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'portfolio'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'نمونه کار',
            'add_new' => 'افزودن نمونه کار',
            'add_new_item' => 'افزودن نمونه کار',
            'edit_item' => 'ویرایش نمونه کار',
            'all_items' => 'همه ی نمونه کار ها',
            'singular_name' => 'نمونه کار ها'
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
    register_taxonomy(
        'portfolio_categories',
        'portfolio',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی نمونه کار', // display name
            'query_var' => true,
        )
    );

}

add_action('init', 'portfolio_post_types');
// services
function services_post_types(){
    register_post_type('services',
        array(
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
            'rewrite' => array('slug' => 'services'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'خدمات ما',
                'singular_name' => 'خدمت',
                'add_new' => 'افزودن خدمت جدید',
                'add_new_item' => 'افزودن خدمت جدید',
                'edit_item' => 'ویرایش خدمت',
                'all_items' => 'همه‌ی خدمات',
                'menu_name' => 'خدمات ما',
            ),
            'menu_icon' => 'dashicons-admin-generic',
        )
    );
    register_taxonomy(
        'services_categories',
        'services',
        array(
            'hierarchical' => true,
            'label' => 'دسته بندی خدمات',
            'query_var' => true,
        )
    );
    $labels = array(
        'name' => _x( 'برچسب‌ها', 'taxonomy general name' ),
        'singular_name' => _x( 'برچسب', 'taxonomy singular name' ),
        'search_items' =>  __( 'جستجوی برچسب‌ها' ),
        'popular_items' => __( 'برچسب‌های محبوب' ),
        'all_items' => __( 'همه‌ی برچسب‌ها' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'ویرایش برچسب' ),
        'update_item' => __( 'به‌روزرسانی برچسب' ),
        'add_new_item' => __( 'افزودن برچسب جدید' ),
        'new_item_name' => __( 'نام برچسب جدید' ),
        'separate_items_with_commas' => __( 'جدا کردن برچسب‌ها با کاما' ),
        'add_or_remove_items' => __( 'افزودن یا حذف برچسب‌ها' ),
        'choose_from_most_used' => __( 'انتخاب از بیشترین استفاده شدها' ),
        'menu_name' => __( 'برچسب خدمات' ),
    );
    register_taxonomy(
        'services_tag',
        'services',
        array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'tag-services' ),
        )
    );
}
add_action('init', 'services_post_types');

// clients post-type
function clients_post_types()
{
    register_post_type('clients', array('supports' => array('title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'clients'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'مشتریان',
            'add_new' => 'افزودن مشتری',
            'add_new_item' => 'افزودن مشتری جدید',
            'edit_item' => 'ویرایش مشتری',
            'all_items' => 'همه ی مشتریان',
            'singular_name' => 'مشتری'
        ),
        'menu_icon' => 'dashicons-admin-users'
    ));
}
add_action('init', 'clients_post_types');