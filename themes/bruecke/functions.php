<?php
require get_template_directory() . '/inc/customizer.php';

function breucke_load_scripts(){

    // Google Web Fonts
    // wp_enqueue_style( 'google-fonts-googleapis', '//fonts.googleapis.com', array(), null );
    // wp_enqueue_style( 'google-fonts-gstatic', '//fonts.gstatic.com', array(), null );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), null );


    // Template Stylesheet
    wp_enqueue_style('bruecke-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bruecke-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('bruecke-templatemo', get_template_directory_uri() . '/assets/css/templatemo-villa-agency.css');
    wp_enqueue_style('bruecke-event', get_template_directory_uri() . '/assets/css/event.css');
    wp_enqueue_style('bruecke-owl', get_template_directory_uri() . '/assets/css/owl.css');
    wp_enqueue_style('bruecke-animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bruecke-swiper-bundl', "https://unpkg.com/swiper@7/swiper-bundle.min.css");

    // Template Javascript
    wp_enqueue_script('breucke-jquery', get_theme_file_uri('/vendor/jquery/jquery.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('breucke-bootstrap', get_theme_file_uri('/vendor/bootstrap/js/bootstrap.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('breucke-isotope', get_theme_file_uri('/assets/js/isotope.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('breucke-owl-carousel', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('breucke-counter', get_theme_file_uri('/assets/js/counter.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('breucke-custom', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'breucke_load_scripts' );

function bruecke_config()
{

    $textdomain = 'bruecke';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'bruecke_main_menu' => esc_html__('Main Menu', 'bruecke'),
            'bruecke_footer_menu' => esc_html__('Footer Menu', 'bruecke')
        )
    );

    $args = array(
        'height'    => 320,
        'width'     => 1920
    );
    
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
        /**
        * Add support for core custom logo.
        *
        * @link https://codex.wordpress.org/Theme_Logo
        */
        // add_theme_support( 'custom-logo', array(
        //     'height'      => 100,
        //     'width'       => 400,
        //     'flex-height' => true,
        //     'flex-width'  => true,
        //     'header-text' => array( 'site-title', 'site-description' ),
        // ) );
    // add_theme_support( 'automatic-feed-links' );
    // add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    // add_theme_support( 'title-tag' );

    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );
    add_theme_support( 'wp-block-styles' );

}
add_action('after_setup_theme', 'bruecke_config', 0);


