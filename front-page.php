<?php  get_header(); ?>

<div class="home-section">
    <div class="brief-info">
        <?php the_content(); ?>

        <div class="project-icon">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-dev-icon.svg" alt="">
                <p> Web Development </p>
                <a href="<?php echo home_url(); ?>/web-dev-projects">View Projects</a>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui-design-icon.svg" alt="">
                <p> UI Design </p>
                <a href="<?php echo home_url(); ?>/ui-design-projects">View Projects</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>