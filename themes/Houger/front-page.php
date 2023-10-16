<?php /* Template Name: Home */
get_header(); ?>

<?php if (have_posts()) {
    the_post(); ?>

    <?php
    get_template_part('template-parts/homepage/hero_slider');
    get_template_part('template-parts/homepage/video_section');
    get_template_part('template-parts/homepage/portfolio_slider');
    get_template_part('template-parts/homepage/about-section');
    get_template_part('template-parts/homepage/services-section');
    get_template_part('template-parts/homepage/clients-section');
    get_template_part('template-parts/homepage/post-grid');
    get_template_part('template-parts/homepage/contact-section');?>
<?php }
get_footer();
