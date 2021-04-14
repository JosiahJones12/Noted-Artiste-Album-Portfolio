<?php

// This file defines all of the website's custom post types

function noted_post_types(){
    register_post_type('artiste',array(
        'capability_type' => 'artiste',
        'map_meta_cap'=> true,
        'public' => true,
        'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail'),
        'has_archive' => true,
        'map_meta_cap'=> true,
        'rewrite'=> array('slug' => 'artiste'),
        'labels' => array(
        'name' => "Artistes",
        'add_new_item' => 'Add New Artiste',
        'edit_item' => 'Edit Artiste Info',
        'all_items' => 'All Artistes',
        'singular_name' => "Artiste",
        ),
        'menu_icon' => 'dashicons-businessperson'
        ));


    register_post_type('album',array(
        'capability_type' => 'album',
        'map_meta_cap'=> true,
        'public' => true,
        'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail'),
        'has_archive' => true,
        'map_meta_cap'=> true,
        'rewrite'=> array('slug' => 'album'),
        'labels' => array(
        'name' => "Albums",
        'add_new_item' => 'Add New Album',
        'edit_item' => 'Edit Album Info',
        'all_items' => 'All Albums',
        'singular_name' => "Album",
        ),
        'menu_icon' => 'dashicons-playlist-audio'
        ));


    register_post_type('event',array(
        'capability_type' => 'event',
        'map_meta_cap'=> true,
        'public' => true,
        'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail'),
        'has_archive' => true,
        'map_meta_cap'=> true,
        'rewrite'=> array('slug' => 'event'),
        'labels' => array(
        'name' => "Events",
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event Info',
        'all_items' => 'All Events',
        'singular_name' => "Event",
        ),
        'menu_icon' => 'dashicons-calendar-alt'
        ));
    }
    add_action('init', 'noted_post_types');



?>