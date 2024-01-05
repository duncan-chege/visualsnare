<?php get_header(); ?>

<div class="web-dev-section">
    <h3 class="our-belief">Web Development Projects</h3>
    <p>Visualsnare is your go-to partner for SME-focused web development, specializing in tailored solutions using
        content management systems like WordPress and Drupal. Our unique approach combines creative problem-solving
        with transparent communication, ensuring the delivery of visually striking and functionally effective
        websites for your business.</p>

    <?php 
        $args = array(
            'post_type' => 'web-dev-projects',
            'order' => 'ASC'
        );
        $web_dev = new WP_Query($args);
    ?>

    <div class="projects">
        <div class="thumbnails">
            <?php if ($web_dev-> have_posts()):  ?>
            <?php while($web_dev->have_posts()): $web_dev->the_post(); ?>
            <a href="<?php echo get_permalink(); ?>">
                <div>
                    <?php the_post_thumbnail(); ?>
                    <p> <?php the_title(); ?> </p>
                </div>
            </a>
            <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>