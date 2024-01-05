<?php get_header(); ?>

<?php 
    $desktop_image = CFS()->get('desktop_image');
    $banner_image = CFS()->get('banner_image');
?>


<div class="ui-header">
    <?php
        if (!empty($banner_image)) {
                echo '<img src="' . esc_url($banner_image) . '" alt="Desktop Site Layout">';
            }
    ?>
    <h2 class="project-title"><?php the_title(); ?></h2>
</div>

<div class="project-brief">
    <h3> Brief </h3>
    <?php the_content(); ?>
</div>

<div class="ui-screenshots">
    <?php
        if (!empty($desktop_image)) {
                echo '<img src="' . esc_url($desktop_image) . '" alt="Desktop Site Layout">';
            }
    ?>
</div>


<?php get_footer(); ?>