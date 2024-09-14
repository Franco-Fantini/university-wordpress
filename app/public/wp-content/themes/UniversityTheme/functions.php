<?php
function University_files()
{
    wp_enqueue_script('University_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,600;1,100;1,200;1,400;1,600&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_style('University_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('University_extra_styles', get_theme_file_uri('/build/index.css'));
}
function University_features()
{
    register_nav_menu('headerMenu', 'header menu');
    register_nav_menu('footerMenu', 'footer menu');
    add_theme_support('title-tag');
}

function University_adjust_queries($query)
{
    //order events page query
    $todayData = date('Ymd');
    if (!is_admin() and is_post_type_archive('event') and $query->is_main_query()) {
        $query->set('posts_per_page', '5');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'asc');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $todayData,
                'type' => 'numeric'
            )
        ));

    }
    //order programs page query
    if (!is_admin() and is_post_type_archive('program') and $query->is_main_query()) {
        $query->set('posts_per_page', '-1');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');


    }
}
add_action('wp_enqueue_scripts', 'University_files');
add_action('after_setup_theme', 'University_features');
add_action('pre_get_posts', 'University_adjust_queries');
