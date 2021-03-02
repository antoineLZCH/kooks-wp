<?php

function cptui_register_my_cpts_formules()
{

    /**
     * Post Type: Formules.
     */

    $labels = [
        "name" => __("Formules", "custom-post-type-ui"),
        "singular_name" => __("Formule", "custom-post-type-ui"),
        "menu_name" => __("Formules", "custom-post-type-ui"),
        "all_items" => __("All Formules", "custom-post-type-ui"),
        "add_new" => __("Add new", "custom-post-type-ui"),
        "add_new_item" => __("Add new Formule", "custom-post-type-ui"),
        "edit_item" => __("Edit Formule", "custom-post-type-ui"),
        "new_item" => __("New Formule", "custom-post-type-ui"),
        "view_item" => __("View Formule", "custom-post-type-ui"),
        "view_items" => __("View Formules", "custom-post-type-ui"),
        "search_items" => __("Search Formules", "custom-post-type-ui"),
        "not_found" => __("No Formules found", "custom-post-type-ui"),
        "not_found_in_trash" => __("No Formules found in trash", "custom-post-type-ui"),
        "parent" => __("Parent Formule:", "custom-post-type-ui"),
        "featured_image" => __("Featured image for this Formule", "custom-post-type-ui"),
        "set_featured_image" => __("Set featured image for this Formule", "custom-post-type-ui"),
        "remove_featured_image" => __("Remove featured image for this Formule", "custom-post-type-ui"),
        "use_featured_image" => __("Use as featured image for this Formule", "custom-post-type-ui"),
        "archives" => __("Formule archives", "custom-post-type-ui"),
        "insert_into_item" => __("Insert into Formule", "custom-post-type-ui"),
        "uploaded_to_this_item" => __("Upload to this Formule", "custom-post-type-ui"),
        "filter_items_list" => __("Filter Formules list", "custom-post-type-ui"),
        "items_list_navigation" => __("Formules list navigation", "custom-post-type-ui"),
        "items_list" => __("Formules list", "custom-post-type-ui"),
        "attributes" => __("Formules attributes", "custom-post-type-ui"),
        "name_admin_bar" => __("Formule", "custom-post-type-ui"),
        "item_published" => __("Formule published", "custom-post-type-ui"),
        "item_published_privately" => __("Formule published privately.", "custom-post-type-ui"),
        "item_reverted_to_draft" => __("Formule reverted to draft.", "custom-post-type-ui"),
        "item_scheduled" => __("Formule scheduled", "custom-post-type-ui"),
        "item_updated" => __("Formule updated.", "custom-post-type-ui"),
        "parent_item_colon" => __("Parent Formule:", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Formules", "custom-post-type-ui"),
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
        "rewrite" => false,
        "query_var" => true,
        "menu_icon" => "dashicons-heart",
        "supports" => ["title", "thumbnail", "excerpt", "custom-fields"],
    ];

    register_post_type("formules", $args);
}

add_action('init', 'cptui_register_my_cpts_formules');
