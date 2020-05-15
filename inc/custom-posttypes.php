<?php
function cptui_register_my_cpts_our_cats() {

/**
 * Post Type: Cats.
 */

$labels = [
    "name" => __( "Cats", "understrap" ),
    "singular_name" => __( "Cat", "understrap" ),
    "menu_name" => __( "My Cats", "understrap" ),
    "all_items" => __( "All Cats", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new Cat", "understrap" ),
    "edit_item" => __( "Edit Cat", "understrap" ),
    "new_item" => __( "New Cat", "understrap" ),
    "view_item" => __( "View Cat", "understrap" ),
    "view_items" => __( "View Cats", "understrap" ),
    "search_items" => __( "Search Cats", "understrap" ),
    "not_found" => __( "No Cats found", "understrap" ),
    "not_found_in_trash" => __( "No Cats found in trash", "understrap" ),
    "parent" => __( "Parent Cat:", "understrap" ),
    "featured_image" => __( "Featured image for this Cat", "understrap" ),
    "set_featured_image" => __( "Set featured image for this Cat", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this Cat", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this Cat", "understrap" ),
    "archives" => __( "Cat archives", "understrap" ),
    "insert_into_item" => __( "Insert into Cat", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this Cat", "understrap" ),
    "filter_items_list" => __( "Filter Cats list", "understrap" ),
    "items_list_navigation" => __( "Cats list navigation", "understrap" ),
    "items_list" => __( "Cats list", "understrap" ),
    "attributes" => __( "Cats attributes", "understrap" ),
    "name_admin_bar" => __( "Cat", "understrap" ),
    "item_published" => __( "Cat published", "understrap" ),
    "item_published_privately" => __( "Cat published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "Cat reverted to draft.", "understrap" ),
    "item_scheduled" => __( "Cat scheduled", "understrap" ),
    "item_updated" => __( "Cat updated.", "understrap" ),
    "parent_item_colon" => __( "Parent Cat:", "understrap" ),
];

$args = [
    "label" => __( "Cats", "understrap" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "our_cats", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
    "taxonomies" => [ "cat_type", "cat_gender" ],
];

register_post_type( "our_cats", $args );
}

add_action( 'init', 'cptui_register_my_cpts_our_cats' );
