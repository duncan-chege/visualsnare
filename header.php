<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
                alt="visualsnare logo" class="main-logo"></a>

        <?php
                wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'my-custom-menu',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'menu-links',
                'fallback_cb'       => '',
                ));
            ?>
    </header>