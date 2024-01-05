<?php

/* Template Name: About Page */ 

?>

<?php get_header(); ?>

<div class="about-section">
    <h3 class="our-belief">
        As Visualsnare, we want your business to grow in a vastly competitive environment and we believe creativity
        is the solution
    </h3>

    <div class="about-desc-1">
        <div>
            <p>For your business to have longevity, you need to have a strong digital presence. That’s where we come
                in. </p>
            <p>Your digital footprint can be in various forms, either through an app, social media or a website. We
                help you discover which works well for your business at the stage its in and design/develop material
                crucial for it’s success.</p>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration-1.png" alt="" class="">
        </div>
    </div>

    <div class="about-desc-2">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration-2.png" alt="" class="">
        </div>
        <div>
            <p>We put our clients’ needs first and that’s why good communication is our key value. Every client has
                different needs and we seek to understand them first before embarking on any project.</p>
            <p>It’s cliche to say ‘teamwork makes the dream work’ but we believe in this. Our internal cohesion
                translates to spectacular final products. Trust us as we trust you.</p>
        </div>
    </div>

    <div class="services">
        <h4> We specialize in: </h4>
        <div>
            <div class="icons">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-dev.svg" alt="">
                <p> Web Design <br> Web Development </p>
            </div>
            <div class="icons">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graphic-design.svg" alt="">
                <p> Graphic Design </p>
            </div>
            <div class="icons">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail-icon.svg" alt="">
                <p> Email Marketing </p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>