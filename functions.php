<?php

/* functions */
add_theme_support( 'title-tag' );

/* styles */
add_action( 'wp_enqueue_scripts', 'register_styles' );
function register_styles() {
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '4.1.1', 'all' );
    wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i', array(), null, 'all' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all' );
wp_enqueue_style( 'simple-icons', 'https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css', array(), '4.7.0', 'all' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/styles.min.css', array(), '1.0.0', 'all' );
    
    wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js', array('jQuery'), '1.0.0', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/script.min.js', array('jQuery'), '1.0.0', true );
}

function optimize_setup () {
    remove_action('wp_head', 'wp_generator');                // #1
    remove_action('wp_head', 'wlwmanifest_link');            // #2
    remove_action('wp_head', 'rsd_link');                    // #3
    remove_action('wp_head', 'wp_shortlink_wp_head');        // #4

    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);    // #5

    add_filter('the_generator', '__return_false');            // #6
    add_filter('show_admin_bar','__return_false');            // #7

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // #8
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    remove_action('wp_head', 'feed_links_extra', 3);

    remove_action('set_comment_cookies', 'wp_set_comment_cookies');
}
add_action('after_setup_theme', 'optimize_setup');