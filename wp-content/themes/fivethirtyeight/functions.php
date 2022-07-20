<?php

// function fivethirtyeight_theme_support(){
//     //add dynamic title tag support
//     add_theme_support('title-tag');
//     add_theme_support('custom-logo');
//     add_theme_support('post-thumbnails');
// }

// add_action('after_setup_theme','fivethirtyeight_theme_support');


//Thêm style , boostrap, fontawesome ở header
function fivethirtyeight_regiter_styles(){

    $version = wp_get_theme()->get('Version' );
    wp_enqueue_style('fivethirtyeight-style',get_template_directory_uri() . "/style.css" , array(), $version, 'all');
    wp_enqueue_style('fivethirtyeight-styles',get_template_directory_uri() . "/assets/css/style.css" , array(), $version, 'all');
    wp_enqueue_style('fivethirtyeight-normalize',get_template_directory_uri() . "/assets/css/styles.css" , array(), $version, 'all');
    // wp_enqueue_style('fivethirtyeight-mediaelement-css', "https://fivethirtyeight.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.16", array(), $version, 'all');
    // wp_enqueue_style('fivethirtyeight-wp-mediaelement-css', "https://fivethirtyeight.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.0.1", array(), $version, 'all');
    // wp_enqueue_style('fivethirtyeight-elasticpress-related-posts-block-css', "https://fivethirtyeight.com/wp-content/mu-plugins/search/elasticpress/dist/css/related-posts-block-styles.min.css?ver=3.6.5", array(), $version, 'all');

}

add_action('wp_enqueue_scripts','fivethirtyeight_regiter_styles');

//Thêm jquery, js, popper

function fivethirtyeight_regiter_scripts(){

    wp_enqueue_script( 'fivethirtyeight-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1',true );
    wp_enqueue_script( 'fivethirtyeight-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0',true );
    wp_enqueue_script( 'fivethirtyeight-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1',true );
    wp_enqueue_script( 'fivethirtyeight-main',get_template_directory_uri() . "/assets/js/main.js"  , array(), '1.0',true );

}

add_action('wp_enqueue_scripts','fivethirtyeight_regiter_scripts');




















?>