<?php
function cptui_register_my_cpts() {

/**
 * Post Type: Cats.
 */

$labels = [
    "name" => __e( "Cats", "understrap" ),
    "singular_name" => __e( "Cat", "understrap" ),
    "menu_name" => __e( "My Cats", "understrap" ),
    "all_items" => __e( "All Cats", "understrap" ),
    "add_new" => __e( "Add new", "understrap" ),
    "add_new_item" => __e( "Add new Cat", "understrap" ),
    "edit_item" => __e( "Edit Cat", "understrap" ),
    "new_item" => __e( "New Cat", "understrap" ),
    "view_item" => __e( "View Cat", "understrap" ),
    "view_items" => __e( "View Cats", "understrap" ),
    "search_items" => __e( "Search Cats", "understrap" ),
    "not_found" => __e( "No Cats found", "understrap" ),
    "not_found_in_trash" => __e( "No Cats found in trash", "understrap" ),
    "parent" => __e( "Parent Cat:", "understrap" ),
    "featured_image" => __e( "Featured image for this Cat", "understrap" ),
    "set_featured_image" => __e( "Set featured image for this Cat", "understrap" ),
    "remove_featured_image" => __e( "Remove featured image for this Cat", "understrap" ),
    "use_featured_image" => __e( "Use as featured image for this Cat", "understrap" ),
    "archives" => __e( "Cat archives", "understrap" ),
    "insert_into_item" => __e( "Insert into Cat", "understrap" ),
    "uploaded_to_this_item" => __e( "Upload to this Cat", "understrap" ),
    "filter_items_list" => __e( "Filter Cats list", "understrap" ),
    "items_list_navigation" => __e( "Cats list navigation", "understrap" ),
    "items_list" => __e( "Cats list", "understrap" ),
    "attributes" => __e( "Cats attributes", "understrap" ),
    "name_admin_bar" => __e( "Cat", "understrap" ),
    "item_published" => __e( "Cat published", "understrap" ),
    "item_published_privately" => __e( "Cat published privately.", "understrap" ),
    "item_reverted_to_draft" => __e( "Cat reverted to draft.", "understrap" ),
    "item_scheduled" => __e( "Cat scheduled", "understrap" ),
    "item_updated" => __e( "Cat updated.", "understrap" ),
    "parent_item_colon" => __e( "Parent Cat:", "understrap" ),
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

/**
 * Post Type: Adoptions.
 */

$labels = [
    "name" => __e( "Adoptions", "understrap" ),
    "singular_name" => __e( "Adoption", "understrap" ),
    "menu_name" => __e( "My Adoptions", "understrap" ),
    "all_items" => __e( "All Adoptions", "understrap" ),
    "add_new" => __e( "Add new", "understrap" ),
    "add_new_item" => __e( "Add new Adoption", "understrap" ),
    "edit_item" => __e( "Edit Adoption", "understrap" ),
    "new_item" => __e( "New Adoption", "understrap" ),
    "view_item" => __e( "View Adoption", "understrap" ),
    "view_items" => __e( "View Adoptions", "understrap" ),
    "search_items" => __e( "Search Adoptions", "understrap" ),
    "not_found" => __e( "No Adoptions found", "understrap" ),
    "not_found_in_trash" => __e( "No Adoptions found in trash", "understrap" ),
    "parent" => __e( "Parent Adoption:", "understrap" ),
    "featured_image" => __e( "Featured image for this Adoption", "understrap" ),
    "set_featured_image" => __e( "Set featured image for this Adoption", "understrap" ),
    "remove_featured_image" => __e( "Remove featured image for this Adoption", "understrap" ),
    "use_featured_image" => __e( "Use as featured image for this Adoption", "understrap" ),
    "archives" => __e( "Adoption archives", "understrap" ),
    "insert_into_item" => __e( "Insert into Adoption", "understrap" ),
    "uploaded_to_this_item" => __e( "Upload to this Adoption", "understrap" ),
    "filter_items_list" => __e( "Filter Adoptions list", "understrap" ),
    "items_list_navigation" => __e( "Adoptions list navigation", "understrap" ),
    "items_list" => __e( "Adoptions list", "understrap" ),
    "attributes" => __e( "Adoptions attributes", "understrap" ),
    "name_admin_bar" => __e( "Adoption", "understrap" ),
    "item_published" => __e( "Adoption published", "understrap" ),
    "item_published_privately" => __e( "Adoption published privately.", "understrap" ),
    "item_reverted_to_draft" => __e( "Adoption reverted to draft.", "understrap" ),
    "item_scheduled" => __e( "Adoption scheduled", "understrap" ),
    "item_updated" => __e( "Adoption updated.", "understrap" ),
    "parent_item_colon" => __e( "Parent Adoption:", "understrap" ),
];

$args = [
    "label" => __( "Adoptions", "understrap" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "adoption_tips", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "excerpt" ],
];

register_post_type( "adoption_tips", $args );

/**
 * Post Type: Storys.
 */

$labels = [
    "name" => __e( "Storys", "understrap" ),
    "singular_name" => __e( "Story", "understrap" ),
    "menu_name" => __e( "My Storys", "understrap" ),
    "all_items" => __e( "All Storys", "understrap" ),
    "add_new" => __e( "Add new", "understrap" ),
    "add_new_item" => __e( "Add new Story", "understrap" ),
    "edit_item" => __e( "Edit Story", "understrap" ),
    "new_item" => __e( "New Story", "understrap" ),
    "view_item" => __e( "View Story", "understrap" ),
    "view_items" => __e( "View Storys", "understrap" ),
    "search_items" => __e( "Search Storys", "understrap" ),
    "not_found" => __e( "No Storys found", "understrap" ),
    "not_found_in_trash" => __e( "No Storys found in trash", "understrap" ),
    "parent" => __e( "Parent Story:", "understrap" ),
    "featured_image" => __e( "Featured image for this Story", "understrap" ),
    "set_featured_image" => __e( "Set featured image for this Story", "understrap" ),
    "remove_featured_image" => __e( "Remove featured image for this Story", "understrap" ),
    "use_featured_image" => __e( "Use as featured image for this Story", "understrap" ),
    "archives" => __e( "Story archives", "understrap" ),
    "insert_into_item" => __e( "Insert into Story", "understrap" ),
    "uploaded_to_this_item" => __e( "Upload to this Story", "understrap" ),
    "filter_items_list" => __e( "Filter Storys list", "understrap" ),
    "items_list_navigation" => __e( "Storys list navigation", "understrap" ),
    "items_list" => __e( "Storys list", "understrap" ),
    "attributes" => __e( "Storys attributes", "understrap" ),
    "name_admin_bar" => __e( "Story", "understrap" ),
    "item_published" => __e( "Story published", "understrap" ),
    "item_published_privately" => __e( "Story published privately.", "understrap" ),
    "item_reverted_to_draft" => __e( "Story reverted to draft.", "understrap" ),
    "item_scheduled" => __e( "Story scheduled", "understrap" ),
    "item_updated" => __e( "Story updated.", "understrap" ),
    "parent_item_colon" => __e( "Parent Story:", "understrap" ),
];

$args = [
    "label" => __( "Storys", "understrap" ),
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
    "rewrite" => [ "slug" => "storys", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "thumbnail", "excerpt" ],
];

register_post_type( "storys", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
