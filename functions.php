<?php

if ( ! function_exists ( 'rohper_setup') ) :

    function rohper_setup() {
        // let WordPress handle the Titles tags
        add_theme_support( 'title-tag' );
    }
endif;
add_action('after_setup_theme', 'rohper_setup');

/* ---- Register Menus ---- */

function register_rohper_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_rohper_menus');

/* ---- Add Stylesheets ---- */

function rohper_scripts() {

    // Enqueue Main Stylesheet
    wp_enqueue_style('rohper_styles', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('rohper_styles_pp', get_template_directory_uri() . '/css/prettyPhoto.css' );
    // Enqueue Google Fonts, Raleway
    wp_enqueue_style('rohper_google_fonts', 'https://fonts.googleapis.com/css?family=Sanchez' );
    // Bootstrap
    wp_enqueue_style('rohper_bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style('rohper_fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css' );

}
add_action('wp_enqueue_scripts', 'rohper_scripts');

function rohper_js() {

    wp_enqueue_script('rohper_modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', '', '', false );
    wp_enqueue_script('rohper_jquery', get_template_directory_uri() . '/js/jquery.1.11.1.js', array('jquery'), '', true );
    wp_enqueue_script('rohper_bootstrap', get_template_directory_uri() . '/js/bootstrap.js', '', '', true );
    wp_enqueue_script('rohper_SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', '', '', true );
    wp_enqueue_script('rohper_easypiechart', get_template_directory_uri() . '/js/easypiechart.js', '', '', true );
    wp_enqueue_script('rohper_prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'), '', true );
    wp_enqueue_script('rohper_isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array('jquery'), '', true );
    wp_enqueue_script('rohper_counterup', get_template_directory_uri() . '/js/jquery.counterup.js', array('jquery'), '', true );
    wp_enqueue_script('rohper_waypoints', get_template_directory_uri() . '/js/waypoints.js', '', '', true );
    wp_enqueue_script('rohper_jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), '', true );
    wp_enqueue_script('rohper_contact', get_template_directory_uri() . '/js/contact_me.js', '', '', true );
    wp_enqueue_script('rohper_main', get_template_directory_uri() . '/js/main.js', '', '', true );

}
add_action('wp_enqueue_scripts', 'rohper_js');
