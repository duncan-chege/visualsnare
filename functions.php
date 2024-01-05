<?php 
    function main_files(){
        wp_enqueue_style( 'custom-google-font', '//fonts.googleapis.com/css2?family=DM+Sans:wght@500;600;700&display=swap', false);
        wp_enqueue_style( 'custom-style',  get_template_directory_uri().'/assets/css/custom.css');
        wp_enqueue_style( 'venobox-css', get_template_directory_uri().'/assets/venobox/dist/venobox.min.css' );
        wp_enqueue_style( 'main-css', get_stylesheet_uri());
    
        wp_enqueue_script( 'jQuery','//code.jquery.com/jquery-3.6.0.min.js', array('jquery'));
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );
        wp_enqueue_script( 'venobox-js', get_template_directory_uri() . '/assets/venobox/dist/venobox.min.js', '2.1.4' );
        wp_enqueue_script( 'masonry', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js' );
        wp_enqueue_script( 'imagesloaded', '//unpkg.com/imagesloaded@4/imagesloaded.pkgd.js' );
    }

    add_action('wp_enqueue_scripts', 'main_files');

    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
      }
    add_action( 'init', 'wpb_custom_new_menu' );


    require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_post_type_support('page', 'excerpt');

    // Adding wide image support to a Gutenburg block
    add_theme_support( 'align-wide' );

    //Page Slug Body Class
    function add_slug_body_class( $classes ) {
        global $post;
        if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
        }
        return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

    //Page Title separator
    add_filter( 'document_title_separator', 'cyb_document_title_separator' );
    function cyb_document_title_separator( $sep ) {

        $sep = "-";

    return $sep;
}


?>
