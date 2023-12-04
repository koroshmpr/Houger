<?php /* Template Name: Work */

/**
 * Work with us page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 **/

get_header(); ?>



    <section class="container">
        <?php
        $title = 'RECRUITMENT';
        $args = array(
            'title' => $title
        );
            get_template_part('template-parts/title', null , $args);
        ?>
        <div class="row mb-5">
            <div class="mt-5"
                 data-aos="fade-up"
                 data-aos-delay="300">
                <?php
                $gravity = get_field('gravity_choices');
                echo do_shortcode('[gravityform id="' . $gravity . '" title="false" description="false" ajax="true"]') ?>
            </div>
        </div>
    </section>
<?php get_footer();