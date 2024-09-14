<?php

function university_post_types()
{
    //Event custom post type
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt'
        ),
        'rewrite' => array(
            'slug' => 'events'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_menu' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new' => ' New Event',
            'add_new_item' => 'Add New Event',
            'new_item' => 'New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar',
    ));


    //programs custom post type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
        ),
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_menu' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new' => ' New Program',
            'add_new_item' => 'Add New Program',
            'new_item' => 'New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-media-text
',
    ));
    //programs custom post type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
        ),
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_menu' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new' => ' New Program',
            'add_new_item' => 'Add New Program',
            'new_item' => 'New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-media-text
',
    ));
}

add_action('init', 'university_post_types');

