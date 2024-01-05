<?php get_header(); ?>

<div class="project-header">
    <a href="http://footballfoundation.africa" target="_blank">
        <div><?php the_post_thumbnail(); ?></div>
        <h3> Visit Website <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg"
                class="arrow-link"></h3>
    </a>
</div>

<?php 
        $client = CFS()->get('client');
        $studio_partner = CFS()->get('studio_partner');
        $roles = CFS()->get('roles');
        $desktop_images = CFS()->get('desktop_images');
        $mobile_images = CFS()->get('mobile_images');
    ?>

<div class="project-leads">
    <div>
        <p>Client</p>
        <p> <?php the_title(); ?> </p>
    </div>
    <div>
        <p>Studio Partner </p>
        <p> <?php if ($studio_partner) {
                echo esc_html($studio_partner);
            }?> </p>
    </div>
    <div>
        <p>Role </p>
        <p> <?php if ($roles) {
                $roles_with_line_breaks = str_replace('<br>', "\n", $roles);
                $clean_roles = wp_strip_all_tags($roles_with_line_breaks);
                echo nl2br(esc_html($clean_roles));
            }?>
        </p>
    </div>
</div>

<div class="project-brief">
    <h3> Brief </h3>
    <?php the_content(); ?>
</div>

<div class="site-screenshots">
    <?php
        if (!empty($desktop_images)) {
                echo '<img src="' . esc_url($desktop_images) . '" alt="Desktop Site Layouts">';
            }
    ?>
</div>

<div class="mobile-mockups">
    <?php
    if (!empty($mobile_images)) {
        echo '<img src="' . esc_url($mobile_images) . '" alt="Mobile Site Layouts">';
    }
    ?>
</div>

<div class="graphic-services">
    <h3>Graphic Services </h3>
    <p>The website was not enough. Mr Brian still had more projects in store and we were tasked with
        creating a consistent visual identity for all FFA ventures from partnership announcements, FFA project
        announcements to most notably, The Africa Football Business Show- an online web series that engages football
        stakeholders in matters grassroots and international football </p>
</div>

<div class="ffa-graphics">
    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.jpg" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.jpg" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-2.jpg" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-2.jpg" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-3.jpg" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-3.jpg" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-4.jpg" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-4.jpg" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-5.jpg" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-5.jpg" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-6.png" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-6.png" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-7.png" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-7.png" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-8.jpg" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-8.jpg" alt=""></a></div>
        <div class="grid-item"><a class="my-link" data-gall="myGallery"
                href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-9.png" alt=""><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-9.png" alt=""></a></div>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        var $grid = $(".grid").imagesLoaded(function () {
            $grid.masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer',
                gutter: 10
            });
        });
    });

    new VenoBox({
        selector: ".my-link",
        navigation: true,
        navKeyboard: true,
        navTouch: true,
    });
</script>

<?php get_footer(); ?>