<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset=""<?php bloginfo('charset'); ?>>
        <meta name="vierwport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <div class="container">

    <header class='site-header'>
        <h1><?php bloginfo('name'); ?></h1>
        <h5><?php bloginfo('contents'); ?></h5>

        <nav class="site-nav">

            <?php
            $args = array(
                'theme_location' => 'primary'
            );

            wp_nav_menu($args);

            ?>

        </nav>

    </header>