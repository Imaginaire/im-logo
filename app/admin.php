<?php 

// Create post type

function cptui_register_my_cpts_im_logo() {

    /**
     * Post Type: Logos.
     */

    $labels = array(
        "name" => __( "Logos", "sage" ),
        "singular_name" => __( "Logo", "sage" ),
        "featured_image" => __( "Logo", "sage" ),
        "set_featured_image" => __( "Add Logo", "sage" ),
        "remove_featured_image" => __( "Remove Logo", "sage" ),
        "use_featured_image" => __( "Use As Logo", "sage" ),
    );

    $args = array(
        "label" => __( "Logos", "sage" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "im_logo", "with_front" => true ),
        "query_var" => true,
        "menu_position" => 5,
        "menu_icon" => "dashicons-slides",
        "supports" => array( "title", "thumbnail" ),
    );

    register_post_type( "im_logo", $args );
}

add_action( 'init', 'cptui_register_my_cpts_im_logo' );

add_action('do_meta_boxes', 'im_logo_image_box');

function im_logo_image_box() {

    remove_meta_box( 'postimagediv', 'im_logo', 'side' );

    add_meta_box('postimagediv', __('Logo'), 'post_thumbnail_meta_box', 'im_logo', 'normal', 'high');

}

// Create taxonomy to allow multiple carousels

function cptui_register_my_taxes_logo_carousel() {

    /**
     * Taxonomy: Logo Carousels.
     */

    $labels = array(
        "name" => __( "Logo Carousels", "sage" ),
        "singular_name" => __( "Logo Carousel", "sage" ),
    );

    $args = array(
        "label" => __( "Logo Carousels", "sage" ),
        "labels" => $labels,
        "public" => true,
        "hierarchical" => true,
        "label" => "Logo Carousels",
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'logo_carousel', 'with_front' => true, ),
        "show_admin_column" => false,
        "show_in_rest" => false,
        "rest_base" => "logo_carousel",
        "show_in_quick_edit" => false,
    );
    register_taxonomy( "logo_carousel", array( "im_logo" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_logo_carousel' );