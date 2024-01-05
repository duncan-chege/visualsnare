<?php get_header(); ?>
<div class="content section my-5 mx-5">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="entry-content">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
