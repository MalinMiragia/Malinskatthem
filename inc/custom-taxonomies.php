<?php

function cptui_register_my_taxes() {

/**
 * Taxonomy: Genders.
 */

$labels = [
    "name" => __( "Genders", "understrap" ),
    "singular_name" => __( "Gender", "understrap" ),
    "menu_name" => __( "Genders", "understrap" ),
    "all_items" => __( "All Genders", "understrap" ),
    "edit_item" => __( "Edit Gender", "understrap" ),
    "view_item" => __( "View Gender", "understrap" ),
    "update_item" => __( "Update Gender name", "understrap" ),
    "add_new_item" => __( "Add new Gender", "understrap" ),
    "new_item_name" => __( "New Gender name", "understrap" ),
    "parent_item" => __( "Parent Gender", "understrap" ),
    "parent_item_colon" => __( "Parent Gender:", "understrap" ),
    "search_items" => __( "Search Genders", "understrap" ),
    "popular_items" => __( "Popular Genders", "understrap" ),
    "separate_items_with_commas" => __( "Separate Genders with commas", "understrap" ),
    "add_or_remove_items" => __( "Add or remove Genders", "understrap" ),
    "choose_from_most_used" => __( "Choose from the most used Genders", "understrap" ),
    "not_found" => __( "No Genders found", "understrap" ),
    "no_terms" => __( "No Genders", "understrap" ),
    "items_list_navigation" => __( "Genders list navigation", "understrap" ),
    "items_list" => __( "Genders list", "understrap" ),
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
    "name" => __( "Towns", "understrap" ),
    "singular_name" => __( "Town", "understrap" ),
    "menu_name" => __( "Towns", "understrap" ),
    "all_items" => __( "All Towns", "understrap" ),
    "edit_item" => __( "Edit Town", "understrap" ),
    "view_item" => __( "View Town", "understrap" ),
    "update_item" => __( "Update Town name", "understrap" ),
    "add_new_item" => __( "Add new Town", "understrap" ),
    "new_item_name" => __( "New Town name", "understrap" ),
    "parent_item" => __( "Parent Town", "understrap" ),
    "parent_item_colon" => __( "Parent Town:", "understrap" ),
    "search_items" => __( "Search Towns", "understrap" ),
    "popular_items" => __( "Popular Towns", "understrap" ),
    "separate_items_with_commas" => __( "Separate Towns with commas", "understrap" ),
    "add_or_remove_items" => __( "Add or remove Towns", "understrap" ),
    "choose_from_most_used" => __( "Choose from the most used Towns", "understrap" ),
    "not_found" => __( "No Towns found", "understrap" ),
    "no_terms" => __( "No Towns", "understrap" ),
    "items_list_navigation" => __( "Towns list navigation", "understrap" ),
    "items_list" => __( "Towns list", "understrap" ),
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
