<?php get_header(); ?>

<?php 
    $site_links = CFS()->get('site_links');
    $studio_partner = CFS()->get('studio_partner');
    $roles = CFS()->get('roles');
    $desktop_images = CFS()->get('desktop_images');
    $mobile_images = CFS()->get('mobile_images');
?>

<div class="project-header">
    <?php if ($site_links) { ?>
    <a href="<?php echo esc_html($site_links); ?>" target="_blank">
        <div><?php the_post_thumbnail(); ?></div>
        <h3> Visit Website <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg"
                class="arrow-link"></h3>
    </a>
    <?php } ?>
</div>

<div class="project-leads">
    <div>
        <p>Client</p>
        <p> <?php the_title(); ?> </p>
    </div>

    <?php if ($studio_partner) { ?>
    <div>
        <p>Studio Partner </p>
        <?php echo esc_html($studio_partner); ?>
    </div>
    <?php } ?>


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


<?php get_footer(); ?>