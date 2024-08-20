<?php

function University_files()
{
    wp_enqueue_script('University_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,600;1,100;1,200;1,400;1,600&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_style('University_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('University_extra_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'University_files');

function university_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');