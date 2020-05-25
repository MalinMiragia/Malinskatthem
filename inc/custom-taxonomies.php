<?php

function cptui_register_my_taxes() {

/**
 * Taxonomy: Genders.
 */

$labels = [
    "name" => __e( "Genders", "understrap" ),
    "singular_name" => __e( "Gender", "understrap" ),
    "menu_name" => __e( "Genders", "understrap" ),
    "all_items" => __e( "All Genders", "understrap" ),
    "edit_item" => __e( "Edit Gender", "understrap" ),
    "view_item" => __e( "View Gender", "understrap" ),
    "update_item" => __e( "Update Gender name", "understrap" ),
    "add_new_item" => __e( "Add new Gender", "understrap" ),
    "new_item_name" => __e( "New Gender name", "understrap" ),
    "parent_item" => __e( "Parent Gender", "understrap" ),
    "parent_item_colon" => __e( "Parent Gender:", "understrap" ),
    "search_items" => __e( "Search Genders", "understrap" ),
    "popular_items" => __e( "Popular Genders", "understrap" ),
    "separate_items_with_commas" => __e( "Separate Genders with commas", "understrap" ),
    "add_or_remove_items" => __e( "Add or remove Genders", "understrap" ),
    "choose_from_most_used" => __e( "Choose from the most used Genders", "understrap" ),
    "not_found" => __e( "No Genders found", "understrap" ),
    "no_terms" => __e( "No Genders", "understrap" ),
    "items_list_navigation" => __e( "Genders list navigation", "understrap" ),
    "items_list" => __e( "Genders list", "understrap" ),
];

$args = [
    "label" => __( "Genders", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'cat_gender', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "cat_gender",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "cat_gender", [ "our_cats" ], $args );

/**
 * Taxonomy: Towns.
 */

$labels = [
    "name" => __e( "Towns", "understrap" ),
    "singular_name" => __e( "Town", "understrap" ),
    "menu_name" => __e( "Towns", "understrap" ),
    "all_items" => __e( "All Towns", "understrap" ),
    "edit_item" => __e( "Edit Town", "understrap" ),
    "view_item" => __e( "View Town", "understrap" ),
    "update_item" => __e( "Update Town name", "understrap" ),
    "add_new_item" => __e( "Add new Town", "understrap" ),
    "new_item_name" => __e( "New Town name", "understrap" ),
    "parent_item" => __e( "Parent Town", "understrap" ),
    "parent_item_colon" => __e( "Parent Town:", "understrap" ),
    "search_items" => __e( "Search Towns", "understrap" ),
    "popular_items" => __e( "Popular Towns", "understrap" ),
    "separate_items_with_commas" => __e( "Separate Towns with commas", "understrap" ),
    "add_or_remove_items" => __e( "Add or remove Towns", "understrap" ),
    "choose_from_most_used" => __e( "Choose from the most used Towns", "understrap" ),
    "not_found" => __e( "No Towns found", "understrap" ),
    "no_terms" => __e( "No Towns", "understrap" ),
    "items_list_navigation" => __e( "Towns list navigation", "understrap" ),
    "items_list" => __e( "Towns list", "understrap" ),
];

$args = [
    "label" => __( "Towns", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'cat_town', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "cat_town",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "cat_town", [ "our_cats" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
