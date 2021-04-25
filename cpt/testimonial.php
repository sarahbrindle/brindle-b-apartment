<?php

add_action('init', 'Testimonial_type');

function Testimonial_type() {

    $imagepath = get_stylesheet_directory_uri() . '/cpt/images/';

    $labels    = array(

        'name' => __('Testimonial', 'brindle'),

        'singular_name' => __('Testimonial', 'brindle'),

        'add_new' => __('Add New Testimonial', 'brindle'),

        'add_new_item' => __('Add New Testimonial', 'brindle'),

        'edit' => __('Edit', 'brindle'),

        'edit_item' => __('Edit Testimonial', 'brindle'),

        'new_item' => __('New Testimonial', 'brindle'),

        'view' => __('View Testimonial', 'brindle'),

        'view_item' => __('View Testimonial', 'brindle'),

        'search_items' => __('Search Testimonial', 'brindle'),

        'not_found' => __('No Testimonial found', 'brindle'),

        'not_found_in_trash' => __('No Testimonial found in Trash', 'brindle'),

        'parent_item_colon' => ''

    );

    $args      = array(

        'labels' => $labels,

        'description' => 'This is the holding location for all testimonial',

        'public' => true,

        'publicly_queryable' => true,

        'exclude_from_search' => false,

        'show_ui' => true,

        'query_var' => true,

        'capability_type' => 'post',

        'rewrite' => true,

        'hierarchical' => true,

        'menu_position' => 5,

        'menu_icon' => $imagepath . 'testimonial.png',

        'supports' => array( 'title','editor','thumbnail'),

    );

    register_post_type('testimonial', $args);

}

?>