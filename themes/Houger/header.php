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
    <?php
    $scripts = get_field('header_script' , 'option');
    if ($scripts) {
        echo $scripts;
    }
    ?>
</head>

<body <?php body_class(); ?> >

<header id="mainHeader" class="position-fixed z-10 w-100 bg-white shadow-sm overflow-hidden">
    <?php get_template_part('template-parts/Layout/header'); ?>
</header>
<main>




