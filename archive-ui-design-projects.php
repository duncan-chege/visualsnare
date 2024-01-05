<?php get_header(); ?>

<div class="web-dev-section">
    <h3 class="our-belief">UI Design Projects</h3>
    <p>Visualsnare specializes in creating eye-catching and user-friendly interfaces that enhance the digital
        experience. Our approach prioritizes simplicity and functionality, ensuring that every design element
        contributes to a positive and intuitive user interaction.</p>

    <?php 
        $args = array(
            'post_type' => 'ui-design-projects',
            'order' => 'ASC'
        );
        $ui = new WP_Query($args);
    ?>

    <div class="projects">
        <div class="thumbnails">
            <?php if ($ui-> have_posts()):  ?>
            <?php while($ui->have_posts()): $ui->the_post(); ?>
            <div class="ui-thumbnail">
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <p class="ui-title"> <?php the_title(); ?> </p>
            </div>
            <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>

    <!-- <div class="projects">
            <div class="thumbnails">
                <div>
                    <a href="./saturo-sandwich-bar">
                        <img src="./assets/sandwich-thumbnail.png" alt="" class="ui-thumbnail"> </a>
                    <p class="ui-title"> Saturo Sandwich Bar </p>
                </div>
            </div>
        </div> -->
</div>

<?php get_footer(); ?>