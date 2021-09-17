<?php 

include(get_template_directory().'/inc/simon-option.php');

function simon_setup(){
    load_theme_textdomain( 'simon', get_template_directory_uri().'/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'simon' ),
        )
    );
}
add_action('after_setup_theme','simon_setup');

function simon_assets(){

    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700',array(),null);
    wp_enqueue_style('bootstrap-css','//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css',array(),null);
    wp_enqueue_style('iconicons-css','//cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.8/css/ionicons.min.css',array(),null);
    wp_enqueue_style('animate-css','//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',array(),null);
    wp_enqueue_style('font-awesome-css','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array(),null);
    wp_enqueue_style('OwlCarousel2-css','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',array(),null);
    wp_enqueue_style('custom-css',get_template_directory_uri().'/assets/css/style.css',array(),null);
    wp_enqueue_style('main-css',get_stylesheet_uri());



    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js',array(),null,true);
}
add_action('wp_enqueue_scripts','simon_assets');