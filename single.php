<?php get_header(); ?>

<?php while(have_posts()){ the_post(); ?>

<div>
    <h1><?php echo get_the_title(); ?></h1>
    <?php the_content(); ?>
</div>

<?php } ?>

<?php get_footer(); ?>